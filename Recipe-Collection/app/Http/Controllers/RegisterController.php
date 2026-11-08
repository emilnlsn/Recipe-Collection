<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Controllers\LoginController;


class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store()
    {
        User::create(request(['name', 'email', 'password']));
        return redirect()->route('login.index');
    }
}
