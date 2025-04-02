<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featuredRecipes = Recipe::with('category')
            ->orderBy('created_at', 'desc')
            ->take(6)
            ->get();
            
        $categories = Category::withCount('recipes')
            ->orderBy('name')
            ->take(5)
            ->get();
            
        return view('home', compact('featuredRecipes', 'categories'));
    }
}