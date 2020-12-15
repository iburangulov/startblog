<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function login()
    {
        return view('login');
    }

    public function login_(Request $request)
    {
        dump($request->all());
    }

    public function register()
    {
        return view('register');
    }

    public function register_()
    {

    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('home'));
    }
}
