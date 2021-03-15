<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{

    protected $redirectTo = '/internship';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
    public function login()
    {
        return view('Auth.login');
    }
    public function processLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->except(['_token']);

        $user = User::where('email',$request->email)->first();

        if (auth()->attempt($credentials)) {

            return redirect()->route('internships');

        }else{
            session()->flash('error', 'Invalid credentials');
            return redirect()->back();
        }
    }
    public function registerQuestion()
    {
        return view('Auth.register');
    }

    public function registerStudent() {
        return view('Auth.student');
    }

    public function registerEmployer() {
        return view('Auth.employer');
    }

    public function processStudent(Request $request)
    {
        $user = User::find($request->email);
        if($user) { // User exists already
            session()->flash('error', 'Account exists already');
            return redirect()->back();
        } else { // No user exists
            $user = new User;
            $user->fill($request->all());
            $user->user_type = 0;
            if($user->save()){ // Try to save user
                // Saved, return user to login page
                session()->flash('message', 'Account created');
                return redirect()->route('login');
            }
            // User failed to save
            session()->flash('error', 'Account creation failed');
            return redirect()->back();
        }

    }
    
    public function processEmployer(Request $request)
    {
        $user = User::find($request->email);
        if($user) { // User exists already
            session()->flash('error', 'Account exists already');
            return redirect()->back();
        } else { // No user exists
            $user = new User;
            $user->fill($request->all());
            $user->user_type = 1;
            if($user->save()){ // Try to save user
                // Saved, return user to login page
                session()->flash('message', 'Account created');
                return redirect()->route('login');
            }
            // User failed to save
            session()->flash('error', 'Account creation failed');
            return redirect()->back();
        }
    }

    public function logout()
    {
        \Auth::logout();

        return redirect()->route('login');
    }
}
