<?php

// app/Http/Controllers/AuthController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 
use Illuminate\Support\Facades\Hash;  
use Illuminate\Support\Facades\Auth; 

class AuthController extends Controller
{
    // Show Registration Form
    public function showRegisterForm()
    {
        return view('auth.register'); 
    }

    // Handle Registration
    public function register(Request $request)
    {
        // Validate the input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',  // Ensure the passwords match
        ]);

        // Create the user
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        
        auth()->login($user);

        // Redirect to the home page after login
        return redirect()->intended('/app');
    }

    // Show Login Form
    public function showLoginForm()
{
    if (Auth::check()) {
        return redirect()->route('app');
    }
    return view('auth.login');
}


    // Handle Login
    public function login(Request $request)
    {
        // Validate the login credentials
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        // Attempt to log the user in
        if (Auth::attempt([
            'email' => $validated['email'],
            'password' => $validated['password']
        ])) {
            
            return redirect()->intended('/app');
        }
        

        // If login fails, return back with an error message
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput();
    }


    // Handle Logout
    public function logout()
    {
        Auth::logout();  

        return redirect('/');  
    }
}
