<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'category_id',
        'title',
        'description',
        'image',
        'difficulty',
        'prep_time',
        'cook_time',
        'servings',
        'ingredients',
        'steps',
        'tips',
    ];
    
    protected $casts = [
        'ingredients' => 'array',
        'steps' => 'array',
        'tips' => 'array',
    ];
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}