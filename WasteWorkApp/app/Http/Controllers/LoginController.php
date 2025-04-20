<?php

namespace App\Http\Controllers;

use App\Models\Login;         // pastikan ini model yang benar, atau ganti ke App\Models\Admin
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request)
{
    $credentials = $request->only('username', 'password');

    $admin = Login::where('username', $credentials['username'])->first();


    if ($admin && Hash::check($credentials['password'], $admin->password)) {
        return redirect('/dashboard');
    }

    return back()->withErrors(['password' => 'Invalid credentials']);
}


    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
