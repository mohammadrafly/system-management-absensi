<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function Login(Request $request)
    {
        if ($request->ajax()) {
            return Auth::attempt($request->only('email', 'password'))
                ? response()->json(['message' => 'Login successful', 'redirect' => 'dashboard'], 200)
                : response()->json(['message' => 'Invalid credentials'], 401);
        } else {
            $title = 'Login';
            return view('auth.login', compact('title'));
        }
    }

    public function Logout()
    {
        Auth::logout();

        return response()->json(['message' => 'Logout successful', 'redirect' => '/'], 200);
    }
}
