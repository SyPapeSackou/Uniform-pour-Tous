<section id="galerie" class="py-20 px-4 bg-gradient-to-br from-gray-50 to-white relative overflow-hidden">
    <!-- Éléments décoratifs d'arrière-plan -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-24 -right-24 w-48 h-48 rounded-full bg-amber-100/50 blur-3xl"></div>
        <div class="absolute -bottom-32 -left-32 w-64 h-64 rounded-full bg-gray-200/30 blur-3xl"></div>
    </div>

    <div class="max-w-7xl mx-auto relative z-10">
        <!-- En-tête de section -->
        <div class="text-center mb-16">
            <div class="inline-flex items-center gap-2 bg-white/80 backdrop-blur-sm px-6 py-2 rounded-full mb-6 border border-gray-200 shadow-sm">
                <div class="w-2 h-2 rounded-full bg-amber-600 animate-pulse"></div>
                <span class="text-sm font-semibold text-gray-700">COLLECTIONS EXCLUSIVES</span>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">
                Notre <span class="text-amber-700">Galerie</span>
            </h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Découvrez nos créations d'uniformes scolaires alliant élégance, confort et durabilité
            </p>
        </div>

        <!-- Grille de galerie -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-16">
            @php
                $galleryItems = [
                    [
                        'image' => 'c1.jpg',
                        'title' => 'Uniforme Garçon Classique',
                        'category' => 'Collection Classique',
                        'colors' => ['bg-amber-300', 'bg-amber-600', 'bg-amber-900']
                    ],
                    [
                        'image' => 'c2.jpg',
                        'title' => 'Uniforme Fille Élégant',
                        'category' => 'Collection Élégance',
                        'colors' => ['bg-gray-400', 'bg-gray-600', 'bg-gray-800']
                    ],
                    [
                        'image' => 'c3.jpg',
                        'title' => 'Chemise Bleu Marine',
                        'category' => 'Tenue Formelle',
                        'colors' => ['bg-blue-400', 'bg-blue-600', 'bg-blue-800']
                    ],
                    [
                        'image' => 'c4.jpg',
                        'title' => 'Ensemble Été',
                        'category' => 'Collection Été',
                        'colors' => ['bg-green-400', 'bg-green-600', 'bg-green-800']
                    ],
                    [
                        'image' => 'c5.jpg',
                        'title' => 'Polo Sportif',
                        'category' => 'Sport & Confort',
                        'colors' => ['bg-red-400', 'bg-red-600', 'bg-red-800']
                    ],
                    [
                        'image' => 'c6.jpg',
                        'title' => 'Jupe Scolaire',
                        'category' => 'Collection Fille',
                        'colors' => ['bg-purple-400', 'bg-purple-600', 'bg-purple-800']
                    ],
                    [
                        'image' => 'c7.jpg',
                        'title' => 'Veste d\'Hiver',
                        'category' => 'Collection Hiver',
                        'colors' => ['bg-amber-400', 'bg-amber-600', 'bg-amber-800']
                    ],
                    [
                        'image' => 'c8.jpg',
                        'title' => 'Accessoires',
                        'category' => 'Compléments',
                        'colors' => ['bg-gray-300', 'bg-gray-500', 'bg-gray-700']
                    ],
                    [
                        'image' => 'c10.jpg',
                        'title' => 'Tenue de Cérémonie',
                        'category' => 'Événements',
                        'colors' => ['bg-amber-200', 'bg-amber-500', 'bg-amber-700']
                    ]
                ];
            @endphp

            @foreach($galleryItems as $item)
            <div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 cursor-pointer bg-white border border-gray-200">
                <!-- Image avec overlay -->
                <div class="relative overflow-hidden">
                    <img src="{{ asset('build/assets/images/'.$item['image']) }}"
                         alt="{{ $item['title'] }}"
                         class="w-full h-80 object-cover group-hover:scale-110 transition-transform duration-700">

                    <!-- Overlay au survol -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-end p-6">
                        <span class="text-amber-300 text-sm font-semibold mb-2">{{ $item['category'] }}</span>
                        <h3 class="text-white font-bold text-xl mb-3">{{ $item['title'] }}</h3>

                        <!-- Palette de couleurs -->
                        <div class="flex items-center gap-2 mb-4">
                            @foreach($item['colors'] as $color)
                            <span class="w-6 h-6 rounded-full {{ $color }} border-2 border-white shadow-sm"></span>
                            @endforeach
                            <span class="text-white/80 text-sm ml-2">Coloris disponibles</span>
                        </div>

                        <!-- Bouton d'action -->
                        <button class="w-full bg-amber-600 hover:bg-amber-700 text-white py-3 rounded-xl font-semibold transition-colors duration-300 transform group-hover:translate-y-0 translate-y-2 opacity-0 group-hover:opacity-100 flex items-center justify-center gap-2">
                            <i class="fas fa-eye"></i>
                            Voir les détails
                        </button>
                    </div>
                </div>

                <!-- Contenu visible -->
                <div class="p-6">
                    <h3 class="font-bold text-gray-800 text-lg mb-2">{{ $item['title'] }}</h3>
                    <p class="text-gray-600 text-sm mb-4">{{ $item['category'] }}</p>
                    <div class="flex items-center justify-between">
                        <div class="flex gap-1">
                            @foreach($item['colors'] as $color)
                            <span class="w-4 h-4 rounded-full {{ $color }} border border-gray-300"></span>
                            @endforeach
                        </div>
                        <span class="text-amber-600 text-sm font-semibold">En stock</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Call-to-action -->
        <div class="text-center mt-16">
            <div class="bg-gradient-to-r from-gray-800 to-amber-900 rounded-2xl p-8 text-white shadow-2xl">
                <h3 class="text-2xl font-bold mb-4">Vous avez un projet spécifique ?</h3>
                <p class="text-gray-300 mb-6 max-w-2xl mx-auto">
                    Nos uniformes sont personnalisables selon les couleurs et le style de votre établissement.
                </p>
                <a href="#contact" class="inline-flex items-center gap-3 bg-white text-gray-900 hover:bg-gray-100 px-8 py-4 rounded-xl font-semibold transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg">
                    <i class="fas fa-palette"></i>
                    Personnaliser mes uniformes
                </a>
            </div>
        </div>
    </div>
</section>

<style>
/* Animation d'entrée pour les cartes */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.grid > div {
    animation: fadeInUp 0.6s ease-out forwards;
}

/* Délais d'animation pour chaque carte */
.grid > div:nth-child(1) { animation-delay: 0.1s; }
.grid > div:nth-child(2) { animation-delay: 0.2s; }
.grid > div:nth-child(3) { animation-delay: 0.3s; }
.grid > div:nth-child(4) { animation-delay: 0.4s; }
.grid > div:nth-child(5) { animation-delay: 0.5s; }
.grid > div:nth-child(6) { animation-delay: 0.6s; }
.grid > div:nth-child(7) { animation-delay: 0.7s; }
.grid > div:nth-child(8) { animation-delay: 0.8s; }
.grid > div:nth-child(9) { animation-delay: 0.9s; }
</style>
