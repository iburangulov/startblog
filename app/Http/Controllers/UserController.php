<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function login()
    {
        return view('login');
    }

    public function login_(Request $request)
    {
        $request->validate([
            'email' => 'required|max:32|min:6|email',
            'password' => 'required|max:32|min:6|alpha_dash'
        ]);

        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            return redirect(route('home'));
        }

        return redirect()->back();

    }

    public function register()
    {
        return view('register');
    }

    public function register_(Request $request)
    {
        $request->validate([
            'name' => 'required|max:32|min:3|alpha',
            'email' => 'required|max:32|min:6|email|unique:users',
            'password' => 'required|max:32|min:6|alpha_dash|confirmed'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);
        return redirect(route('home'));

    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('home'));
    }
}
