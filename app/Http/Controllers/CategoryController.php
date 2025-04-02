<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::withCount('recipes')
            ->orderBy('name')
            ->get();
            
        return view('categories.index', compact('categories'));
    }
    
    public function show(Category $category)
    {
        $recipes = $category->recipes()
            ->orderBy('created_at', 'desc')
            ->paginate(9);
            
        return view('categories.show', compact('category', 'recipes'));
    }
}