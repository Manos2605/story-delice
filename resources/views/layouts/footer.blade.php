<footer class="bg-accent py-8">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
                <h3 class="font-bold text-lg mb-4 text-secondary">Story Délice</h3>
                <p class="text-gray-600">
                    Votre source d'inspiration pour des pâtisseries délicieuses et créatives.
                </p>
            </div>
            
            <div>
                <h3 class="font-bold text-lg mb-4 text-secondary">Liens Rapides</h3>
                <ul class="space-y-2">
                    <li>
                        <a href="{{ route('home') }}" class="text-gray-600 hover:text-primary transition-colors">
                            Accueil
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('categories.index') }}" class="text-gray-600 hover:text-primary transition-colors">
                            Catégories
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}" class="text-gray-600 hover:text-primary transition-colors">
                            À propos
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="text-gray-600 hover:text-primary transition-colors">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>
            
            <div>
                <h3 class="font-bold text-lg mb-4 text-secondary">Suivez-nous</h3>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-600 hover:text-primary transition-colors">
                        Facebook
                    </a>
                    <a href="#" class="text-gray-600 hover:text-primary transition-colors">
                        Instagram
                    </a>
                    <a href="#" class="text-gray-600 hover:text-primary transition-colors">
                        Pinterest
                    </a>
                </div>
            </div>
        </div>
        
        <div class="border-t border-primary/20 mt-8 pt-8 text-center text-gray-600">
            <p>&copy; {{ date('Y') }} Story Délice. Tous droits réservés.</p>
        </div>
    </div>
</footer>