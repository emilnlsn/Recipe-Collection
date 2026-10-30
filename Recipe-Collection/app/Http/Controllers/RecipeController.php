<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use App\Models\Recipe;
class RecipeController extends Controller
{
    public function index(): View
    {
        return view('index', [
            'recipes' => Recipe::query()->orderBy('name')->get(),
        ]);
    }
}

