<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class WishlistController extends Controller
{
    public function index(): View
    {
        return view('wishlist', [
            'recipes' => auth()->user()->wishlist()->orderBy('name')->get(),
        ]);
    }

    public function store(Recipe $recipe): RedirectResponse
    {
        auth()->user()->wishlist()->syncWithoutDetaching([$recipe->id]);

        return back();
    }

    public function destroy(Recipe $recipe): RedirectResponse
    {
        auth()->user()->wishlist()->detach($recipe->id);

        return back();
    }
}
