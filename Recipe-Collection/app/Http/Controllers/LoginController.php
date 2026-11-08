<?php

namespace App\Http\Controllers;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function store()
    {
        $loggedIn = auth()->attempt(request(['email', 'password']));

        if ($loggedIn) {
            return redirect()->route('recipes.index');
        } else{
            return redirect()->route('login.index');
        }
    }
}
