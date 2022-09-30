<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
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

        return redirect('panel-logowania')->withSuccess('Logowanie się nie powiodło');
    }

    public function appLogout() 
    {
        Session::flush();
        Auth::logout();

        return Redirect('panel-logowania');
    } 
}
