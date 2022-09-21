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

    public function appLogin(Request $req)
    {
        $req->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ]
        );

        $credentials = $req->only('email', 'password');
        if(Auth::attempt($credentials)) {
            return redirect()->intended('wpisy')->withSuccess('Zalogowano');
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

    public function appLogout() {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    } 
}
