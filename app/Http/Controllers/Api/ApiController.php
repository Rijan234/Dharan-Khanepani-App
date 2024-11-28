<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Inbox;
use App\Models\Schedule;
use App\Models\TestRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str; // Add this for random token generation

class ApiController extends Controller
{
    /**
     * Check meterID and phoneNumber from the database.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function checkCredentials(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'meterID' => 'required|string',
            'phoneNumber' => 'required|string',
        ]);

        // Retrieve the user based on the meter_id and phone_number
        $user = Customer::where('meter_id', $request->meterID)
            ->where('phone_number', $request->phoneNumber)
            ->first();

        // Log the request for debugging or auditing
        $testrequest = new TestRequest();
        $testrequest->username = $request->meterID;
        $testrequest->password = $request->phoneNumber;
        $testrequest->save();

        // Check if the user exists
        if ($user) {
            // Generate a token (use a unique value, e.g., random string)
            $token = Str::random(60);

            // Optionally store the token in the database if you want to track it
            // $user->api_token = hash('sha256', $token); // Store a hashed version for security
            $user->api_token =  $token; // Store a hashed version for security
            $user->save();

            // Login successful
            return response()->json([
                'message' => 'Login successful',
                'user' => $user,  // Optional: Return user data if needed
                'token' => $token  // Return the token to be used for further requests
            ], 200);
        }

        // Invalid credentials
        return response()->json(['message' => 'Invalid credentials'], 401);
    }

    public function getSchedule(Request $request)
    {
        // Validate the request
        $request->validate([
            'api_token' => 'required|string',
        ]);

        // Find the customer using the API token
        $customer = Customer::where('api_token', $request->api_token)->first();

        if (!$customer) {
            return response()->json(['error' => 'Invalid API token.'], 404);
        }

        // Fetch the schedules matching the customer's `tole` and `ward_no`
        $schedules = Schedule::where('tole', $customer->tole)
            ->where('ward', $customer->ward_no)
            ->get();

        return response()->json([
            // 'customer' => $customer->only(['meter_id', 'phone_number', 'tole']),
            'schedules' => $schedules,
        ]);
    }

    public function storeEnquiry(Request $request)
    {
        // Validate the incoming request with custom error messages
        $request->validate([
            'api_token' => 'required|string', // Ensure the API token is passed
            'issueType' => 'required|string',
            'description' => 'required|string',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', // Optional image validation (limit size to 2MB)
        ], [
            'api_token.required' => 'API token is required.',
            'issueType.required' => 'Issue type is required.',
            'description.required' => 'Description is required.',
            'photo.image' => 'The photo must be an image.',
            'photo.mimes' => 'The photo must be a jpg, jpeg, png, or gif image.',
            'photo.max' => 'The photo must not be larger than 2MB.',
        ]);

        // Find the customer using the API token
        $customer = Customer::where('api_token', $request->api_token)->first();

        if (!$customer) {
            return response()->json(['error' => 'Invalid API token.'], 404);
        }

        // Create a new Inbox entry
        $inbox = new Inbox();
        $inbox->customer_id = $customer->customer_id;
        $inbox->issue_type = $request->issueType;
        $inbox->description = $request->description;

        // Handle photo upload if a file is provided
        if ($request->hasFile('image')) {
            // Store the photo in the 'photos' directory in the public disk and get the file path
            $photoPath = $request->file('image')->store('photos', 'public');
            $inbox->photo_path = $photoPath; // Save the photo path in the database
        }

        // Save the enquiry to the Inbox table
        $inbox->time = now();
        $inbox->save();

        // Return a successful response with the data
        return response()->json([
            'message' => 'Enquiry submitted successfully',
            'customerId' => $customer->customer_id,
            'photoUrl' => $inbox->photo_path ? asset('storage/' . $inbox->photo_path) : null, // Return photo URL if available
        ]);
    }



    // public function storeEnquiry(Request $request)
    // {

    //     // Find the customer using the API token
    //     $customer = Customer::where('api_token', $request->api_token)->first();
    //     if (!$customer) {
    //         return response()->json(['error' => 'Invalid API token.'], 404);
    //     }

    //     $inbox = new Inbox();
    //     $inbox->customer_id= $customer->customer_id;
    //     $inbox->issue_type= $request->issueType;
    //     $inbox->description= $request->description;
    //        // Handle photo update if a new file is uploaded
    //        if ($request->hasFile('photo')) {

    //         // Store new photo
    //         uploadImage($request, $inbox, 'photo');
    //     }
    //     $inbox->time= now();
    //     $inbox->save();
    //     return response()->json(['message' => 'Enquiry submitted successfully','customerId' => "$customer->customer_id"]);


    // }
}
