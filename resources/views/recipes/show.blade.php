@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Breadcrumb -->
    <div class="text-sm text-gray-500 mb-6">
        <a href="{{ route('home') }}" class="hover:text-primary">Accueil</a>
        <span class="mx-2">/</span>
        <a href="{{ route('categories.index') }}" class="hover:text-primary">Catégories</a>
        <span class="mx-2">/</span>
        <a href="{{ route('categories.show', $recipe->category) }}" class="hover:text-primary">{{ $recipe->category->name }}</a>
        <span class="mx-2">/</span>
        <span class="text-gray-700">{{ $recipe->title }}</span>
    </div>

    <!-- Recipe Header -->
    <div class="mb-8">
        <h1 class="text-3xl md:text-4xl font-bold mb-4">{{ $recipe->title }}</h1>
        <div class="flex flex-wrap items-center gap-4 text-sm text-gray-600 mb-6">
            <div class="flex items-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                <span>Préparation: {{ $recipe->prep_time }}</span>
            </div>
            <div class="flex items-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                <span>Cuisson: {{ $recipe->cook_time }}</span>
            </div>
            <div class="flex items-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chef-hat"><path d="M6 13.87A4 4 0 0 1 7.41 6a5.11 5.11 0 0 1 1.05-1.54 5 5 0 0 1 7.08 0A5.11 5.11 0 0 1 16.59 6 4 4 0 0 1 18 13.87V21H6Z"/><line x1="6" x2="18" y1="17" y2="17"/></svg>
                <span>Difficulté: {{ $recipe->difficulty }}</span>
            </div>
            <div>
                <span>Pour {{ $recipe->servings }} personnes</span>
            </div>
        </div>
        
        <div class="flex flex-wrap gap-2 mb-6">
            <button class="border border-primary/20 hover:bg-accent px-3 py-1 rounded-md flex items-center gap-1 text-sm">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-printer"><polyline points="6 9 6 2 18 2 18 9"/><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"/><rect width="12" height="8" x="6" y="14"/></svg>
                <span>Imprimer</span>
            </button>
            <button class="border border-primary/20 hover:bg-accent px-3 py-1 rounded-md flex items-center gap-1 text-sm">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-share-2"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><line x1="8.59" x2="15.42" y1="13.51" y2="17.49"/><line x1="15.41" x2="8.59" y1="6.51" y2="10.49"/></svg>
                <span>Partager</span>
            </button>
            <button class="border border-primary/20 hover:bg-accent px-3 py-1 rounded-md flex items-center gap-1 text-sm">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bookmark-plus"><path d="m19 21-7-4-7 4V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16z"/><line x1="12" x2="12" y1="7" y2="13"/><line x1="15" x2="9" y1="10" y2="10"/></svg>
                <span>Sauvegarder</span>
            </button>
        </div>
    </div>

    <!-- Recipe Image -->
    <div class="relative h-[400px] mb-8 rounded-xl overflow-hidden">
        <img
            src="{{ asset($recipe->image) }}"
            alt="{{ $recipe->title }}"
            class="object-cover w-full h-full"
        >
    </div>

    <!-- Recipe Content -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Ingredients -->
        <div class="lg:col-span-1">
            <div class="bg-accent rounded-xl p-6 sticky top-4">
                <h2 class="text-xl font-bold mb-4 text-secondary">Ingrédients</h2>
                <ul class="space-y-2">
                    @foreach($recipe->ingredients as $ingredient)
                    <li class="flex items-start gap-2">
                        <div class="h-5 w-5 rounded-full border border-primary/50 flex-shrink-0 mt-0.5"></div>
                        <span>{{ $ingredient }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <!-- Instructions -->
        <div class="lg:col-span-2">
            <div class="mb-8">
                <h2 class="text-2xl font-bold mb-6 text-secondary">Instructions</h2>
                <div class="space-y-6">
                    @foreach($recipe->steps as $index => $step)
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-8 h-8 rounded-full bg-primary text-white flex items-center justify-center font-bold">
                            {{ $index + 1 }}
                        </div>
                        <div>
                            <h3 class="font-bold text-lg mb-2">{{ $step['title'] }}</h3>
                            <p class="text-gray-700">{{ $step['description'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Tips -->
            @if($recipe->tips)
            <div class="mb-8 bg-gray-50 rounded-xl p-6">
                <h2 class="text-xl font-bold mb-4 text-secondary">Astuces du Chef</h2>
                <ul class="space-y-2">
                    @foreach($recipe->tips as $tip)
                    <li class="flex items-start gap-2">
                        <span class="text-primary font-bold">•</span>
                        <span>{{ $tip }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
            @endif

            <!-- Author -->
            <div class="mb-8 border-t border-b py-6">
                <div class="flex items-center gap-4">
                    <img
                        src="{{ asset($recipe->author_image ?? 'images/default-author.jpg') }}"
                        alt="{{ $recipe->author }}"
                        class="w-16 h-16 rounded-full object-cover"
                    >
                    <div>
                        <p class="text-sm text-gray-500">Recette proposée par</p>
                        <h3 class="font-bold">{{ $recipe->author }}</h3>
                    </div>
                </div>
            </div>

            <!-- Related Recipes -->
            @if($relatedRecipes->count() > 0)
            <div>
                <h2 class="text-2xl font-bold mb-6 text-secondary">Recettes similaires</h2>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    @foreach($relatedRecipes as $related)
                    <a href="{{ route('recipes.show', $related) }}" class="group">
                        <div class="relative h-40 mb-2 overflow-hidden rounded-lg">
                            <img
                                src="{{ asset($related->image) }}"
                                alt="{{ $related->title }}"
                                class="object-cover w-full h-full transition-transform group-hover:scale-105"
                            >
                        </div>
                        <h3 class="font-medium group-hover:text-primary transition-colors">{{ $related->title }}</h3>
                    </a>
                    @endforeach
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection