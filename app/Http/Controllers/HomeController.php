<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class HomeController extends Controller
{
    public function index() {
        return view('index');
    }

    public function registerPage() {
        return view('users.registerPage');
    }

    public function login() {
        return view('users.login');
    }

    public function registerCareseeker() {
        return view('users.careseeker-register');
    }

    public function registerSupportworker () {
        return view('users.supportworker-register');
    }

    public function homereturn () {
        return redirect('/')->with('message',"This page is for logged-out users. You're logged in and can't access it.");
    }



    public function storeCareseeker (Request $request) {
        $formFields = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        // Create User
        $user = User::create($formFields);

        // Login
        auth()->login($user);

        return redirect('/')->with('message', 'Care Seeker has registered and logged in');
    }

    public function storeSupportworker (Request $request) {
        $formFields = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6',
            'contact_number' => 'required',
            'address' => 'required',
            'job_skills' => 'required',
            'experience' => 'required',
            'hourly_rate' => 'required',
            'reference1_name' => 'required',
            'reference1_contact' => 'required',
            'reference1_info' => 'required',
            'reference2_name' => 'required',
            'reference2_contact' => 'required',
            'reference2_info' => 'required',
        ]);

        if($request->hasFile('picture_url')) {
            $formFields['picture_url'] = $request->file('picture_url')->store('profilepicture', 'public');
        }

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        $formFields['account_type'] = 'SupportWorker';

        // Create User
        $user = User::create($formFields);

        // Login
        auth()->login($user);

        return redirect('/')->with('message', 'Support Woker has registered and logged in');
    }

    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');

    }

    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'You are now logged in!');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }

}

