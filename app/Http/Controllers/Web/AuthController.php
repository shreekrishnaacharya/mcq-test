<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;

class AuthController extends Controller
{

    public function index()
    {
        return view('auth.login');
    }

    public function store(LoginRequest $request)
    {
        if (!auth()->attempt($request->only('email', 'password'), $request->remember)) {
            return back()->with('status', 'Invalid login details');
        }
        return redirect()->route('questions.list');
    }
    public function logout()
    {
        auth()->logout();
        return redirect()->route('questions.list');
    }
}
