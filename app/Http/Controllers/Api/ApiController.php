<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\TestRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str; // Add this for random token generation

class ApiController extends Controller
{
    /**
     * Check username and password from the database.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function checkCredentials(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Retrieve the user based on the customer_first_name and customer_last_name
        $user = Customer::where('customer_first_name', $request->username)
                    ->where('customer_last_name', $request->password)
                    ->first();

        // Log the request for debugging or auditing
        $testrequest = new TestRequest();
        $testrequest->username = $request->username;
        $testrequest->password = $request->password;
        $testrequest->save();

        // Check if the user exists
        if ($user) {
            // Generate a token (use a unique value, e.g., random string)
            $token = Str::random(60);

            // Optionally store the token in the database if you want to track it
            // $user->api_token = hash('sha256', $token); // Store a hashed version for security
            // $user->save();

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
}
