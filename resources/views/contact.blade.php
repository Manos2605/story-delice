@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-3xl md:text-4xl font-bold mb-6 text-secondary">Contactez-nous</h1>
        <p class="text-gray-600 mb-8">
            Vous avez une question, une suggestion ou vous souhaitez collaborer avec nous ? 
            N'hésitez pas à nous contacter en utilisant le formulaire ci-dessous ou les coordonnées fournies.
        </p>
        
        @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
            {{ session('success') }}
        </div>
        @endif
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white p-6 rounded-lg shadow-sm text-center">
                <div class="flex justify-center mb-4">
                    <div class="p-3 rounded-full bg-accent">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail text-primary"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                    </div>
                </div>
                <h3 class="font-bold mb-2 text-secondary">Email</h3>
                <p class="text-gray-600">contact@storydelice.com</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-sm text-center">
                <div class="flex justify-center mb-4">
                    <div class="p-3 rounded-full bg-accent">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone text-primary"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                    </div>
                </div>
                <h3 class="font-bold mb-2 text-secondary">Téléphone</h3>
                <p class="text-gray-600">+33 1 23 45 67 89</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-sm text-center">
                <div class="flex justify-center mb-4">
                    <div class="p-3 rounded-full bg-accent">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin text-primary"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                    </div>
                </div>
                <h3 class="font-bold mb-2 text-secondary">Adresse</h3>
                <p class="text-gray-600">123 Rue de la Pâtisserie<br />75001 Paris, France</p>
            </div>
        </div>
        
        <div class="bg-white p-6 rounded-lg shadow-sm mb-8">
            <h2 class="text-2xl font-bold mb-6 text-secondary">Formulaire de Contact</h2>
            <form action="{{ route('contact.store') }}" method="POST" class="space-y-4">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="space-y-2">
                        <label for="name" class="font-medium text-gray-700">
                            Nom
                        </label>
                        <input 
                            id="name" 
                            name="name" 
                            type="text" 
                            placeholder="Votre nom" 
                            class="w-full px-4 py-2 border border-primary/20 rounded-md focus:outline-none focus:ring-2 focus:ring-primary/30"
                            required
                        >
                        @error('name')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="space-y-2">
                        <label for="email" class="font-medium text-gray-700">
                            Email
                        </label>
                        <input 
                            id="email" 
                            name="email" 
                            type="email" 
                            placeholder="votre@email.com" 
                            class="w-full px-4 py-2 border border-primary/20 rounded-md focus:outline-none focus:ring-2 focus:ring-primary/30"
                            required
                        >
                        @error('email')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                <div class="space-y-2">
                    <label for="subject" class="font-medium text-gray-700">
                        Sujet
                    </label>
                    <input 
                        id="subject" 
                        name="subject" 
                        type="text" 
                        placeholder="Sujet de votre message" 
                        class="w-full px-4 py-2 border border-primary/20 rounded-md focus:outline-none focus:ring-2 focus:ring-primary/30"
                        required
                    >
                    @error('subject')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="space-y-2">
                    <label for="message" class="font-medium text-gray-700">
                        Message
                    </label>
                    <textarea 
                        id="message" 
                        name="message" 
                        placeholder="Votre message" 
                        rows="6" 
                        class="w-full px-4 py-2 border border-primary/20 rounded-md focus:outline-none focus:ring-2 focus:ring-primary/30"
                        required
                    ></textarea>
                    @error('message')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                
                <button 
                    type="submit" 
                    class="bg-primary hover:bg-primary/90 text-white px-6 py-2 rounded-md transition-colors"
                >
                    Envoyer le message
                </button>
            </form>
        </div>
        
        <div class="bg-accent rounded-xl p-6 text-center">
            <h2 class="text-2xl font-bold mb-4 text-secondary">Suivez-nous</h2>
            <p class="text-gray-600 mb-6">
                Restez connecté avec nous sur les réseaux sociaux pour découvrir nos dernières recettes et actualités.
            </p>
            <div class="flex justify-center space-x-4">
                <a href="#" class="p-3 rounded-full bg-white shadow-sm hover:shadow-md transition-shadow">
                    Facebook
                </a>
                <a href="#" class="p-3 rounded-full bg-white shadow-sm hover:shadow-md transition-shadow">
                    Instagram
                </a>
                <a href="#" class="p-3 rounded-full bg-white shadow-sm hover:shadow-md transition-shadow">
                    Pinterest
                </a>
                <a href="#" class="p-3 rounded-full bg-white shadow-sm hover:shadow-md transition-shadow">
                    YouTube
                </a>
            </div>
        </div>
    </div>
</div>
@endsection