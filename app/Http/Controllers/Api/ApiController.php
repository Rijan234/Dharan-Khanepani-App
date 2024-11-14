<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;

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

        // Check if the user exists
        if ($user) {
            // Login successful
            return response()->json([
                'message' => 'Login successful',
                // 'user' => $user,  // Optional: you can return some user data here if needed
            ], 200);
        }

        // Invalid credentials
        return response()->json(['message' => 'Invalid credentials'], 401);
    }
}
