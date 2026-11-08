<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class RecipeController extends Controller
{
    public function index(): View
    {
        return view('index', [
            'recipes' => Recipe::query()->orderBy('name')->get(),
            'wishlistIds' => auth()->user()->wishlist()->pluck('recipes.id')->all(),
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
            'imageUrl' => $recipe->image_path ? Storage::disk('public')->url($recipe->image_path) : null,
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
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp,gif', 'max:2048'],
        ]);

        if ($request->hasFile('image')) {
            $validated['image_path'] = $request->file('image')->store('recipes', 'public');
        }

        $recipe = Recipe::create([
            'name' => $validated['name'],
            'ingredients' => $validated['ingredients'],
            'image_path' => $validated['image_path'] ?? null,
        ]);

        return redirect()->route('recipes.show', $recipe);
    }

    public function destroy(Recipe $recipe): RedirectResponse
    {
        if ($recipe->image_path) {
            Storage::disk('public')->delete($recipe->image_path);
        }

        $recipe->delete();

        return redirect()->route('recipes.index');
    }
}
