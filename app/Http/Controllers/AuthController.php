<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function AppLogin(Request $req)
    {
        $req->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ]
        );

        $credentials = $req->only('email', 'password');
        if(Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')->withSuccess('Zalogowano');
        }

        return redirect('login')->withSuccess('Logowanie się nie powiodło');
    }
    public function dashboard()
    {
        if(Auth::check()) {
            return view('dashboard');
        }
        return redirect("login")->withSuccess('Nie masz wymaganych uprawnień');
    }

    public function AppLogout() {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    } 
}
