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
    // public function registerStudent(Request $request)
    // {   
    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required',
    //         'password' => 'required'
    //     ]);
 
    //     $user = User::create([
    //         'name' => trim($request->input('name')),
    //         'email' => strtolower($request->input('email')),
    //         'password' => bcrypt($request->input('password')),
    //     ]);

    //     session()->flash('message', 'Your account is created');
       
    //     return redirect()->route('login');
    // }

    public function registerStudent() {
        dd('hi');
    }
    
    public function logout()
    {
        \Auth::logout();

        return redirect()->route('login');
    }
}
