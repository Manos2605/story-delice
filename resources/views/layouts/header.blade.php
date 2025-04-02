<header class="border-b border-primary/20">
    <div class="container mx-auto px-4 py-4">
        <div class="flex items-center justify-between gap-4">
            <a href="{{ route('home') }}" class="flex items-center">
                <img src="{{ asset('images/logo.png') }}" alt="Story Délice" class="h-auto" width="180">
            </a>
            
            <!-- Navigation pour desktop -->
            <nav class="hidden md:flex items-center space-x-6">
                <a href="{{ route('home') }}" class="text-lg font-medium hover:text-primary transition-colors">
                    Accueil
                </a>
                <a href="{{ route('categories.index') }}" class="text-lg font-medium hover:text-primary transition-colors">
                    Catégories
                </a>
                <a href="{{ route('about') }}" class="text-lg font-medium hover:text-primary transition-colors">
                    À propos
                </a>
                <a href="{{ route('contact') }}" class="text-lg font-medium hover:text-primary transition-colors">
                    Contact
                </a>
                <button class="p-2 rounded-full hover:bg-accent transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                </button>
            </nav>
            
            <!-- Menu hamburger pour mobile -->
            <div class="md:hidden relative" x-data="{ open: false }">
                <button @click="open = !open" class="border border-primary/20 hover:bg-accent p-2 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-align-justify"><line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="21" y1="12" y2="12"/><line x1="3" x2="21" y1="18" y2="18"/></svg>
                    <span class="sr-only">Menu</span>
                </button>
                
                <div x-show="open" @click.away="open = false" x-transition class="absolute right-0 top-full mt-2 w-64 bg-white shadow-lg rounded-md border border-primary/20 p-4 z-50">
                    <div class="flex flex-col gap-4">
                        <a href="{{ route('home') }}" class="text-lg font-medium hover:text-primary transition-colors">
                            Accueil
                        </a>
                        <a href="{{ route('categories.index') }}" class="text-lg font-medium hover:text-primary transition-colors">
                            Catégories
                        </a>
                        <a href="{{ route('about') }}" class="text-lg font-medium hover:text-primary transition-colors">
                            À propos
                        </a>
                        <a href="{{ route('contact') }}" class="text-lg font-medium hover:text-primary transition-colors">
                            Contact
                        </a>
                        <div class="flex items-center mt-4">
                            <div class="relative w-full">
                                <input
                                    type="text"
                                    placeholder="Rechercher..."
                                    class="pl-3 pr-10 py-2 border border-primary/20 rounded-md w-full focus:outline-none focus:ring-2 focus:ring-primary/30"
                                >
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>