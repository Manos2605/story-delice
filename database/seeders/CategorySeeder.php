<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            [
                'name' => 'Tartes',
                'description' => 'Des tartes sucrées aux fruits, au chocolat ou à la crème.',
                'image' => 'images/categories/tartes.jpg',
            ],
            [
                'name' => 'Gâteaux',
                'description' => 'Des gâteaux pour toutes les occasions, du simple quatre-quarts au gâteau d\'anniversaire élaboré.',
                'image' => 'images/categories/gateaux.jpg',
            ],
            [
                'name' => 'Petits Gâteaux',
                'description' => 'Macarons, cupcakes, muffins et autres délicieuses petites bouchées sucrées.',
                'image' => 'images/categories/petits-gateaux.jpg',
            ],
            [
                'name' => 'Biscuits',
                'description' => 'Des cookies aux sablés, en passant par les biscuits de Noël et autres gourmandises croquantes.',
                'image' => 'images/categories/biscuits.jpg',
            ],
            [
                'name' => 'Pâtisseries Françaises',
                'description' => 'Les grands classiques de la pâtisserie française : éclairs, mille-feuilles, Paris-Brest, etc.',
                'image' => 'images/categories/patisseries-francaises.jpg',
            ],
        ];
        
        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}