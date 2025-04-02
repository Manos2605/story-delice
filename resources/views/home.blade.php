@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Hero Section -->
    <section class="bg-accent rounded-xl p-8 mb-12">
        <div class="flex flex-col md:flex-row items-center gap-8">
            <div class="md:w-1/2">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 text-secondary">
                    Découvrez l'Art de la Pâtisserie
                </h1>
                <p class="text-lg text-gray-700 mb-6">
                    Bienvenue sur Story Délice, votre source d'inspiration pour des recettes de pâtisserie délicieuses et créatives.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="{{ route('categories.index') }}" class="bg-primary hover:bg-primary/90 text-white px-4 py-2 rounded-md transition-colors">
                        Découvrir nos recettes
                    </a>
                    <a href="{{ route('about') }}" class="border border-primary text-primary hover:bg-accent/80 px-4 py-2 rounded-md transition-colors">
                        En savoir plus
                    </a>
                </div>
            </div>
            <div class="md:w-1/2">
                <img
                    src="{{ asset('images/hero.jpg') }}"
                    alt="Délicieuses pâtisseries"
                    class="rounded-lg shadow-md w-full h-auto"
                >
            </div>
        </div>
    </section>

    <!-- Featured Recipes -->
    <section class="mb-12">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl md:text-3xl font-bold text-secondary">Recettes Populaires</h2>
            <a href="{{ route('recipes.index') }}" class="text-primary hover:underline">
                Voir toutes les recettes
            </a>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($featuredRecipes as $recipe)
            <div class="overflow-hidden hover:shadow-lg transition-shadow border border-primary/10 rounded-lg">
                <div class="relative h-48">
                    <img
                        src="{{ asset($recipe->image) }}"
                        alt="{{ $recipe->title }}"
                        class="object-cover w-full h-full"
                    >
                    <div class="absolute top-2 right-2 bg-primary text-white px-2 py-1 rounded text-sm">
                        {{ $recipe->category->name }}
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="text-xl font-bold text-secondary mb-2">{{ $recipe->title }}</h3>
                    <p class="text-gray-600 text-sm mb-2">{{ $recipe->description }}</p>
                    <div class="flex flex-wrap gap-2 text-xs text-gray-500">
                        <span>Difficulté: {{ $recipe->difficulty }}</span>
                        <span>•</span>
                        <span>Préparation: {{ $recipe->prep_time }}</span>
                        <span>•</span>
                        <span>Cuisson: {{ $recipe->cook_time }}</span>
                    </div>
                </div>
                <div class="px-4 pb-4">
                    <a 
                        href="{{ route('recipes.show', $recipe) }}"
                        class="text-primary hover:underline text-sm font-medium"
                    >
                        Voir la recette
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Categories -->
    <section class="mb-12">
        <h2 class="text-2xl md:text-3xl font-bold mb-6 text-secondary">Catégories</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
            @foreach($categories as $category)
            <a 
                href="{{ route('categories.show', $category) }}"
                class="bg-white border border-primary/20 rounded-lg p-4 text-center hover:border-primary hover:shadow-md transition-all"
            >
                <h3 class="font-medium mb-1 text-secondary">{{ $category->name }}</h3>
                <p class="text-sm text-gray-500">{{ $category->recipes_count }} recettes</p>
            </a>
            @endforeach
        </div>
    </section>

    <!-- Newsletter -->
    <section class="bg-accent rounded-xl p-8">
        <div class="max-w-2xl mx-auto text-center">
            <h2 class="text-2xl md:text-3xl font-bold mb-4 text-secondary">
                Abonnez-vous à notre newsletter
            </h2>
            <p class="text-gray-600 mb-6">
                Recevez nos nouvelles recettes et astuces de pâtisserie directement dans votre boîte mail.
            </p>
            <form class="flex flex-col sm:flex-row gap-2 max-w-md mx-auto">
                <input
                    type="email"
                    placeholder="Votre adresse email"
                    class="flex-grow px-4 py-2 rounded-md border border-primary/20 focus:outline-none focus:ring-2 focus:ring-primary/30"
                    required
                >
                <button type="submit" class="bg-primary hover:bg-primary/90 text-white px-4 py-2 rounded-md transition-colors">
                    S'abonner
                </button>
            </form>
        </div>
    </section>
</div>
@endsection