<?php

namespace Database\Seeders;

use App\Models\Recipe;
use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{
    public function run()
    {
        $recipes = [
            [
                'category_id' => 1, // Tartes
                'title' => 'Tarte aux Fraises',
                'description' => 'Une délicieuse tarte aux fraises fraîches sur une crème pâtissière onctueuse.',
                'image' => 'images/recipes/tarte-fraises.jpg',
                'difficulty' => 'Facile',
                'prep_time' => '30 min',
                'cook_time' => '25 min',
                'servings' => 8,
                'ingredients' => [
                    '1 pâte sablée',
                    '500g de fraises fraîches',
                    '50cl de lait entier',
                    '4 jaunes d\'œufs',
                    '100g de sucre',
                    '40g de farine',
                    '1 gousse de vanille',
                    '20g de beurre',
                    'Quelques feuilles de menthe pour la décoration'
                ],
                'steps' => [
                    [
                        'title' => 'Préparation de la pâte',
                        'description' => 'Étalez la pâte sablée dans un moule à tarte de 28cm de diamètre. Piquez le fond avec une fourchette et réservez au réfrigérateur pendant 30 minutes.'
                    ],
                    [
                        'title' => 'Cuisson à blanc',
                        'description' => 'Préchauffez le four à 180°C. Recouvrez la pâte de papier sulfurisé et de haricots secs. Faites cuire pendant 15 minutes, puis retirez les haricots et le papier et poursuivez la cuisson pendant 10 minutes jusqu\'à ce que la pâte soit dorée.'
                    ],
                    [
                        'title' => 'Préparation de la crème pâtissière',
                        'description' => 'Fendez la gousse de vanille et grattez les graines. Dans une casserole, faites chauffer le lait avec la gousse et les graines de vanille. Dans un saladier, fouettez les jaunes d\'œufs avec le sucre jusqu\'à ce que le mélange blanchisse. Ajoutez la farine et mélangez. Versez progressivement le lait chaud sur ce mélange tout en remuant. Remettez le tout dans la casserole et faites épaissir à feu doux sans cesser de remuer. Hors du feu, ajoutez le beurre et mélangez. Laissez refroidir.'
                    ],
                    [
                        'title' => 'Montage de la tarte',
                        'description' => 'Étalez la crème pâtissière refroidie sur le fond de tarte. Lavez et équeutez les fraises, puis coupez-les en deux. Disposez-les harmonieusement sur la crème.'
                    ],
                    [
                        'title' => 'Finition',
                        'description' => 'Vous pouvez napper les fraises avec un peu de gelée de fraises ou de nappage neutre pour leur donner de la brillance. Décorez avec quelques feuilles de menthe fraîche.'
                    ]
                ],
                'tips' => [
                    'Pour une tarte encore plus gourmande, ajoutez un peu de mascarpone à votre crème pâtissière.',
                    'Vous pouvez remplacer les fraises par d\'autres fruits de saison comme les framboises ou les pêches.',
                    'Pour éviter que la pâte ne se détrempe, vous pouvez la badigeonner de blanc d\'œuf avant la cuisson.'
                ],
            ],
            // Ajoutez d'autres recettes ici
        ];
        
        foreach ($recipes as $recipe) {
            Recipe::create($recipe);
        }
    }
}