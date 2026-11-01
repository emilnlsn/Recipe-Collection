<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RecipeController extends Controller
{
    public function index(): View
    {
        return view('index', [
            'recipes' => Recipe::query()->orderBy('name')->get(),
        ]);
    }

    public function create(): View
    {
        return view('create');
    }

    public function show(Recipe $recipe): View
    {
        return view('show', [
            'recipe' => $recipe,
        ]);
    }

    public function edit(Recipe $recipe): View
    {
        return view('edit', [
            'recipe' => $recipe,
        ]);
    }

    public function update(Request $request, Recipe $recipe): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'ingredients' => ['required', 'string'],
        ]);

        $recipe->update($validated);

        return redirect()->route('recipes.show', $recipe);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'ingredients' => ['required', 'string'],
        ]);

        $recipe = Recipe::create($validated);

        return redirect()->route('recipes.show', $recipe);
    }

    public function destroy(Recipe $recipe): RedirectResponse
    {
        $recipe->delete();

        return redirect()->route('recipes.index');
    }
}
