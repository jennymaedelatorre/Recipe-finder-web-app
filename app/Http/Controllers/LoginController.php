<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function processLogin(Request $request)
    {
        // sample email & pass
        $validEmail = 'user@example.com';
        $validPassword = 'password123'; 

        // Check if email and password match
        if ($request->email === $validEmail && $request->password === $validPassword) {
            return redirect()->route('app');
        } else {
            return redirect()->route('login')->with('error', 'Invalid credentials.');
        }
    }
}


