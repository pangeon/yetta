<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function register(Request $req) 
    {
        $req->validate(
            [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6',
            ]
        );

        $data = $req->all();
        $check = $this->create_account($data);

        return redirect("auth.login")->withSuccess('Poprawnie zarejestrowane konto.');
    }

    public function create_account(array $data)
    {
        return User::create(
            [
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password'])
            ]
        );
    } 

}
