<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
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
            return redirect()->intended('wpisy')->with('massage', 'Zalogowano poprawnie');
        }

        return redirect('login')->withSuccess('Logowanie się nie powiodło');
    }
    public function appLogout() {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    } 
}
