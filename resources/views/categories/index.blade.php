@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl md:text-4xl font-bold mb-6 text-secondary">Catégories de Recettes</h1>
    <p class="text-gray-600 mb-8 max-w-3xl">
        Explorez notre collection de recettes de pâtisserie classées par catégories. 
        Des tartes aux gâteaux, en passant par les petites douceurs et les desserts de fêtes, 
        trouvez l'inspiration pour votre prochaine création sucrée.
    </p>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($categories as $category)
        <a 
            href="{{ route('categories.show', $category) }}"
            class="group overflow-hidden rounded-xl border border-primary/20 hover:shadow-lg transition-all"
        >
            <div class="relative h-48">
                <img
                    src="{{ asset($category->image) }}"
                    alt="{{ $category->name }}"
                    class="object-cover w-full h-full transition-transform group-hover:scale-105"
                >
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                <div class="absolute bottom-4 left-4 right-4 text-white">
                    <h2 class="text-xl font-bold">{{ $category->name }}</h2>
                    <p class="text-sm">{{ $category->recipes_count }} recettes</p>
                </div>
            </div>
            <div class="p-4">
                <p class="text-gray-600">{{ $category->description }}</p>
            </div>
        </a>
        @endforeach
    </div>
</div>
@endsection