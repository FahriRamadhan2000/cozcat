<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login_adminController extends Controller
{
    public function index()
    {
        return view('admin.index', [
            'title' => 'Login Admin'
        ]);
    }

    public function hom_a()
    {
        return view('admin.home_admin', [
            'title' => 'Admin'
        ]);
    }

    public function authenticate(Request $request)
    {
        $creds = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'

        ]);

        $creds = $request->only('email', 'password');

        if(Auth::guard('user_admin')->attempt($creds)) {
            $request->session()->regenerate();
            return redirect()->intended('/home_admin');
        } 

        return back()->with('loginError', 'Login failed');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/admin');

        // if (Auth::guard('user')->check()){
        //     Auth::guard('user')->logout();
        // }
        // elseif (Auth::guard('admin')->check()){
        //     Auth::guard('admin')->logout();
        // }
        // return redirect('/');
    }
}