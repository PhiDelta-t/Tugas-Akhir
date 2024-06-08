<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('pages.auth.login');
    }

    public function proses(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $data =
            [
                'username' => $request->username,
                'password' => $request->password
            ];

        if (Auth::attempt($data)) {
            session(['username' => $request->username]);
            return redirect('/');
        } else {
            return redirect()->route('login')->with(['Failed' => 'Username or Password not found']);
        }
    }

    public function logout()
    {
        Auth::logout();
        session()->flush();
        return redirect()->route('login')->with(['Success' => 'User has been logout']);
    }
}
