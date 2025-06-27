<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
   
    public function loginForm()
    {
        return view('user.auth.login');
    }

     public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        $student = Students::where('email', $request->email)->first();

        if (!$student || !Hash::check($request->password, $student->password)) {
            return back()->with('error', 'Invalid credentials!');
        }

        // Login manually using session
        session([
            'student_id' => $student->id,
            'student_name' => $student->name,
            'student_email' => $student->email,
        ]);

        return redirect()->route('homepage')->with('success', 'Welcome, ' . $student->name . '!');
    }

    public function dashboard()
    {
        if (!session('student_id')) {
            return redirect()->route('loginForm')->with('error', 'Please log in first.');
        }

        return view('user.pages.index'); // Create this view
    }

    public function logout()
    {
        session()->flush();
        return redirect()->route('loginForm')->with('success', 'Logged out successfully.');
    }
}