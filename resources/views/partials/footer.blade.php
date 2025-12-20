<footer class="bg-gradient-to-br from-gray-900 to-gray-800 text-white py-16 px-4 relative overflow-hidden">
    <!-- Éléments décoratifs -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-32 -right-32 w-64 h-64 rounded-full bg-amber-600/5 blur-3xl"></div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 rounded-full bg-gray-700/10 blur-3xl"></div>
    </div>

    <div class="max-w-7xl mx-auto relative z-10">
        <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-8 mb-12">
            <!-- Colonne Logo et Description -->
            <div class="lg:col-span-1">
                <div class="flex items-center gap-4 mb-6">
                    <div class="relative">
                        <img src="{{ asset('build/assets/images/logo.png') }}" alt="UNIFORME POUR TOUS" class="w-16 h-16">
                        <div class="absolute inset-0 rounded-full bg-amber-600/10"></div>
                    </div>
                    <div>
                        <div class="font-bold text-white text-xl">UNIFORME</div>
                        <div class="font-semibold text-amber-400 text-sm">POUR TOUS</div>
                    </div>
                </div>
                <p class="text-gray-300 leading-relaxed mb-6">
                    Créateur d'uniformes scolaires premium alliant élégance, confort et durabilité pour la nouvelle génération.
                </p>
                <div class="flex items-center text-gray-400 text-sm">
                    <i class="fas fa-map-marker-alt mr-3 text-amber-500"></i>
                    <span>Saint-Louis, Commune de Diama - Sénégal</span>
                </div>
            </div>

            <!-- Colonne Liens rapides -->
            <div>
                <h4 class="text-lg font-bold mb-6 text-white flex items-center">
                    <span class="w-2 h-2 rounded-full bg-amber-500 mr-3"></span>
                    Navigation
                </h4>
                <ul class="space-y-3">
                    @foreach(['accueil' => 'Accueil', 'apropos' => 'À Propos', 'galerie' => 'Galerie', 'services' => 'Services', 'saison' => 'Saisonnalité', 'contact' => 'Contact'] as $section => $label)
                    <li>
                        <a href="#{{ $section }}" class="text-gray-300 hover:text-amber-400 transition-all duration-300 flex items-center group">
                            <i class="fas fa-chevron-right text-xs mr-3 text-amber-600 group-hover:translate-x-1 transition-transform duration-300"></i>
                            {{ $label }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            <!-- Colonne Contact -->
            <div>
                <h4 class="text-lg font-bold mb-6 text-white flex items-center">
                    <span class="w-2 h-2 rounded-full bg-amber-500 mr-3"></span>
                    Contact
                </h4>
                <div class="space-y-4">
                    <a href="mailto:Uniformepourtous@gmail.com" class="flex items-center text-gray-300 hover:text-amber-400 transition-colors duration-300 group">
                        <div class="w-10 h-10 rounded-lg bg-gray-800 flex items-center justify-center mr-4 group-hover:bg-amber-600 transition-colors duration-300">
                            <i class="fas fa-envelope text-amber-500 group-hover:text-white"></i>
                        </div>
                        <div>
                            <div class="text-sm text-gray-400">Email</div>
                            <div>Uniformepourtous@gmail.com</div>
                        </div>
                    </a>

                    <a href="tel:+221772391689" class="flex items-center text-gray-300 hover:text-amber-400 transition-colors duration-300 group">
                        <div class="w-10 h-10 rounded-lg bg-gray-800 flex items-center justify-center mr-4 group-hover:bg-amber-600 transition-colors duration-300">
                            <i class="fas fa-phone text-amber-500 group-hover:text-white"></i>
                        </div>
                        <div>
                            <div class="text-sm text-gray-400">Téléphone</div>
                            <div>77 239 16 89</div>
                        </div>
                    </a>

                    <div class="flex items-center text-gray-300 group">
                        <div class="w-10 h-10 rounded-lg bg-gray-800 flex items-center justify-center mr-4">
                            <i class="fas fa-clock text-amber-500"></i>
                        </div>
                        <div>
                            <div class="text-sm text-gray-400">Horaires</div>
                            <div>Lun - Ven: 8h-18h</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Colonne Réseaux sociaux -->
            <div>
                <h4 class="text-lg font-bold mb-6 text-white flex items-center">
                    <span class="w-2 h-2 rounded-full bg-amber-500 mr-3"></span>
                    Suivez-nous
                </h4>
                <p class="text-gray-300 mb-6">
                    Restez connecté pour découvrir nos nouvelles collections et actualités.
                </p>
                <div class="flex space-x-3">
                    @foreach([
                        ['icon' => 'facebook-f', 'color' => 'hover:bg-blue-600'],
                        ['icon' => 'instagram', 'color' => 'hover:bg-pink-600'],
                        ['icon' => 'twitter', 'color' => 'hover:bg-blue-400'],
                        ['icon' => 'whatsapp', 'color' => 'hover:bg-green-500']
                    ] as $social)
                    <a href="#" class="w-12 h-12 rounded-xl bg-gray-800 flex items-center justify-center text-gray-300 {{ $social['color'] }} hover:text-white transition-all duration-300 transform hover:-translate-y-1 shadow-lg">
                        <i class="fab fa-{{ $social['icon'] }}"></i>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Section de copyright -->
        <div class="pt-8 border-t border-gray-700">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <div class="text-gray-400 text-center md:text-left">
                    <p>&copy; 2025 <span class="text-amber-400 font-semibold">UNIFORME POUR TOUS</span> - Tous droits réservés</p>
                    <p class="text-sm mt-1">SARL au capital de 5.000.000 FCFA - RC No: SN-DKR-2024-B-12345</p>
                </div>

                <div class="flex items-center gap-6 text-sm text-gray-400">
                    <a href="#" class="hover:text-amber-400 transition-colors duration-300">Mentions légales</a>
                    <a href="#" class="hover:text-amber-400 transition-colors duration-300">Politique de confidentialité</a>
                    <a href="#" class="hover:text-amber-400 transition-colors duration-300">CGV</a>
                </div>
            </div>
        </div>
    </div>
</footer>
