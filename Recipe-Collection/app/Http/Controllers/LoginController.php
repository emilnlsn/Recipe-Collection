<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;

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
        } else {
            return redirect()->route('login');
        }
    }

    public function destroy(): RedirectResponse
    {
        auth()->logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('login');
    }
}
