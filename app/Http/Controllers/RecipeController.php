<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::with('category')
            ->orderBy('created_at', 'desc')
            ->paginate(12);
            
        return view('recipes.index', compact('recipes'));
    }
    
    public function show(Recipe $recipe)
    {
        $relatedRecipes = Recipe::where('category_id', $recipe->category_id)
            ->where('id', '!=', $recipe->id)
            ->take(3)
            ->get();
            
        return view('recipes.show', compact('recipe', 'relatedRecipes'));
    }
}