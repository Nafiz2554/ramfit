<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Session;

class UserController extends Controller
{

    //Student Registration
    public function signUp()
    {
        return view('frontend.signup');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'phone' => 'required|string|max:20',
            'password' => 'required|string|min:8|confirmed', // Ensure the password_confirmation field is present and matches
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'password' => Hash::make($request->input('password')),
        ]);

        // You can add any additional logic here (e.g., sending a confirmation email)

        return redirect('/login')->with('success', 'Registration is successful, Login to access your dashboard!');
    }

    //Student Login

    public function showLoginForm()
    {
        return view('frontend.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect('/student-dashboard')->with('success', 'Login successful!');
        }

        return redirect()->back()->withErrors(['email' => 'Invalid login credentials']);
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/')->with('success', 'Logout successful!');


    }
}
