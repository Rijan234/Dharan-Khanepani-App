<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SuperAdminController extends Controller
{
    public function showLoginForm()
    {
        return view('super-admin-login'); // Ensure this file exists in resources/views/auth
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Super Admin credentials (Change as needed)
        $superAdminUsername = 'admin';
        $superAdminPassword = 'password123';

        if ($request->username === $superAdminUsername && $request->password === $superAdminPassword) {
            session(['super_admin_authenticated' => true]); // Store session
            return redirect()->route('super-admin-register'); // Redirect to register page
        }

        return back()->withErrors(['message' => 'Invalid credentials!']);
    }
}
