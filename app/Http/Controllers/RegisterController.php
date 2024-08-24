<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('body2'); // Use the body2 template
    }
    public function index()
           {
               // Get the authenticated user
               $user = Auth::user();
    
                // Pass the user to the view
             return view('home', compact('user'));
            }

    public function register(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create a new user and store in the database
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Log the user in after registration
        auth()->login($user);

        // Redirect the user to a specific page, e.g., dashboard
        
        return redirect()->route('body2')->with('success', 'Registration successful!');

    }
}
