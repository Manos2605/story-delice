@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-3xl md:text-4xl font-bold mb-6 text-secondary">À propos de Story Délice</h1>
        
        <div class="relative h-[300px] mb-8 rounded-xl overflow-hidden">
            <img
                src="{{ asset('images/about.jpg') }}"
                alt="L'équipe de Story Délice"
                class="object-cover w-full h-full"
            >
        </div>
        
        <div class="prose prose-lg max-w-none">
            <p class="lead text-xl">
                Bienvenue sur Story Délice, votre destination gourmande pour découvrir les meilleures recettes de pâtisserie.
            </p>
            
            <h2 class="text-secondary">Notre Histoire</h2>
            <p>
                Story Délice est né d'une passion partagée pour la pâtisserie et l'art culinaire. Fondé en 2020 par deux amis d'enfance passionnés de cuisine, notre blog s'est donné pour mission de rendre la pâtisserie accessible à tous, des débutants aux plus expérimentés.
            </p>
            
            <p>
                Ce qui a commencé comme un simple échange de recettes entre amis s'est transformé en une communauté vibrante de passionnés de pâtisserie du monde entier. Aujourd'hui, Story Délice est fier de partager des centaines de recettes testées et approuvées, des astuces de professionnels et des techniques pour vous aider à créer des desserts délicieux chez vous.
            </p>
            
            <h2 class="text-secondary">Notre Philosophie</h2>
            <p>
                Chez Story Délice, nous croyons que la pâtisserie est bien plus qu'une simple préparation culinaire – c'est un art, une science et une forme d'expression. Notre philosophie repose sur trois piliers fondamentaux :
            </p>
            
            <ul>
                <li>
                    <strong>Accessibilité</strong> : Nous nous efforçons de rendre la pâtisserie accessible à tous, en proposant des recettes claires, des instructions détaillées et des astuces pratiques.
                </li>
                <li>
                    <strong>Qualité</strong> : Chaque recette publiée sur notre blog est méticuleusement testée pour garantir sa réussite dans votre cuisine.
                </li>
                <li>
                    <strong>Créativité</strong> : Nous encourageons l'innovation et la personnalisation, en vous donnant les bases pour ensuite laisser libre cours à votre imagination.
                </li>
            </ul>
            
            <h2 class="text-secondary">Notre Équipe</h2>
            <p>
                Derrière Story Délice se cache une petite équipe passionnée, composée de pâtissiers amateurs et professionnels, de photographes culinaires et de rédacteurs gourmands. Ensemble, nous travaillons pour vous offrir le meilleur contenu possible et partager notre amour de la pâtisserie.
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 my-8">
                <div class="text-center">
                    <div class="relative h-[200px] w-[200px] mb-4 rounded-full overflow-hidden mx-auto">
                        <img
                            src="{{ asset('images/team-1.jpg') }}"
                            alt="Sophie Martin - Fondatrice"
                            class="object-cover w-full h-full"
                        >
                    </div>
                    <h3 class="font-bold text-xl text-secondary">Sophie Martin</h3>
                    <p class="text-primary">Fondatrice & Chef Pâtissière</p>
                </div>
                
                <div class="text-center">
                    <div class="relative h-[200px] w-[200px] mb-4 rounded-full overflow-hidden mx-auto">
                        <img
                            src="{{ asset('images/team-2.jpg') }}"
                            alt="Thomas Dubois - Co-fondateur"
                            class="object-cover w-full h-full"
                        >
                    </div>
                    <h3 class="font-bold text-xl text-secondary">Thomas Dubois</h3>
                    <p class="text-primary">Co-fondateur & Photographe Culinaire</p>
                </div>
            </div>
            
            <h2 class="text-secondary">Rejoignez l'Aventure</h2>
            <p>
                Story Délice est plus qu'un simple blog – c'est une communauté. Nous vous invitons à partager vos créations, à poser vos questions et à échanger avec d'autres passionnés de pâtisserie. Suivez-nous sur les réseaux sociaux, abonnez-vous à notre newsletter et n'hésitez pas à nous contacter pour partager vos idées ou suggestions.
            </p>
            
            <p>
                Merci de faire partie de cette aventure sucrée. Ensemble, continuons à créer, à partager et à savourer les délices de la pâtisserie !
            </p>
        </div>
    </div>
</div>
@endsection