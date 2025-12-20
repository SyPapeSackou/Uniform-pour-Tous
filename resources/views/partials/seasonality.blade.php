<section id="saison" class="py-20 px-4 bg-gradient-to-br from-gray-900 via-gray-800 to-amber-900 text-white relative overflow-hidden">
    <!-- Éléments d'arrière-plan décoratifs -->
    <div class="absolute inset-0 overflow-hidden">
        <!-- Formes géométriques -->
        <div class="absolute -top-20 -right-20 w-40 h-40 rounded-full bg-amber-600/10 blur-2xl"></div>
        <div class="absolute -bottom-16 -left-16 w-32 h-32 bg-gray-600/10 rotate-45 blur-2xl"></div>

        <!-- Lignes animées -->
        <div class="absolute top-1/3 left-10 w-px h-24 bg-gradient-to-b from-transparent via-amber-500/20 to-transparent animate-line-rise"></div>
        <div class="absolute bottom-1/4 right-20 w-20 h-px bg-gradient-to-r from-transparent via-amber-500/20 to-transparent animate-line-slide"></div>
    </div>

    <div class="max-w-6xl mx-auto relative z-10">
        <!-- En-tête de section -->
        <div class="text-center mb-16">
            <div class="inline-flex items-center gap-3 bg-white/5 backdrop-blur-sm px-6 py-2 rounded-full mb-6 border border-white/10">
                <div class="w-2 h-2 rounded-full bg-amber-400 animate-pulse"></div>
                <span class="text-sm font-semibold text-amber-300">PLANIFICATION SAISONNIÈRE</span>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold mb-4">
                Calendrier de <span class="text-amber-400">Production</span>
            </h2>
            <p class="text-lg text-gray-300 max-w-2xl mx-auto">
                Découvrez les périodes clés pour planifier vos commandes d'uniformes scolaires
            </p>
        </div>

        <!-- Cartes des saisons -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mt-16">
            @php
                $seasons = [
                    [
                        'icon' => 'school',
                        'title' => 'Rentrée Scolaire',
                        'description' => 'Période de forte demande où les parents préparent l\'achat d\'uniformes pour le nouveau cycle scolaire.',
                        'period' => 'Août - Septembre',
                        'color' => 'from-amber-600 to-amber-700',
                        'status' => 'Période intense'
                    ],
                    [
                        'icon' => 'sun',
                        'title' => 'Fin d\'Année',
                        'description' => 'Renouvellement et adaptation des tenues pour la rentrée suivante et préparation des commandes.',
                        'period' => 'Mai - Juin',
                        'color' => 'from-gray-700 to-gray-800',
                        'status' => 'Période active'
                    ],
                    [
                        'icon' => 'leaf',
                        'title' => 'Intersaison',
                        'description' => 'Achats supplémentaires pour les activités de fin d\'année et préparation des collections suivantes.',
                        'period' => 'Mars - Avril',
                        'color' => 'from-amber-700 to-amber-800',
                        'status' => 'Période modérée'
                    ]
                ];
            @endphp

            @foreach($seasons as $season)
            <div class="group relative bg-gradient-to-br {{ $season['color'] }} p-8 rounded-2xl shadow-2xl hover:shadow-3xl transition-all duration-500 transform hover:-translate-y-2 border border-white/10 hover:border-amber-400/30">
                <!-- Badge de statut -->
                <div class="absolute -top-3 left-6 bg-amber-500 text-white px-4 py-1.5 rounded-full text-xs font-bold shadow-lg">
                    {{ $season['status'] }}
                </div>

                <!-- Icone -->
                <div class="w-16 h-16 rounded-2xl bg-white/10 backdrop-blur-sm flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-white/20 transition-all duration-300 border border-white/20">
                    <i class="fas fa-{{ $season['icon'] }} text-2xl text-amber-300"></i>
                </div>

                <!-- Contenu -->
                <h3 class="text-xl font-bold text-white mb-4">{{ $season['title'] }}</h3>
                <p class="text-gray-200 leading-relaxed mb-6">{{ $season['description'] }}</p>

                <!-- Période -->
                <div class="flex items-center justify-between pt-4 border-t border-white/10">
                    <div class="flex items-center text-amber-300">
                        <i class="far fa-calendar mr-3 text-lg"></i>
                        <span class="font-semibold">{{ $season['period'] }}</span>
                    </div>
                    <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center group-hover:bg-amber-500 transition-colors duration-300">
                        <i class="fas fa-arrow-right text-xs text-white"></i>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Call-to-action -->
        <div class="text-center mt-16">
            <div class="bg-white/5 backdrop-blur-sm rounded-2xl p-8 border border-white/10 max-w-2xl mx-auto">
                <h3 class="text-2xl font-bold text-white mb-4">Planifions ensemble</h3>
                <p class="text-gray-300 mb-6">
                    Prenez les devants et réservez vos créneaux de production à l'avance pour garantir la livraison de vos uniformes à temps.
                </p>
                <a href="#contact" class="inline-flex items-center gap-3 bg-amber-600 hover:bg-amber-700 text-white px-8 py-4 rounded-xl font-semibold transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg">
                    <i class="fas fa-calendar-check"></i>
                    Réserver ma période
                </a>
            </div>
        </div>
    </div>
</section>

