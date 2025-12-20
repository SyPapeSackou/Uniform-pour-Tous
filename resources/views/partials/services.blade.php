<section id="services" class="py-20 px-4 max-w-7xl mx-auto bg-white">
    <h2 class="text-4xl md:text-5xl font-black text-center text-marron mb-16 relative animated-line">
        Nos Services
    </h2>

    <div class="grid md:grid-cols-3 gap-8 mt-16">
        @php
            $services = [
                [
                    'icon' => 'tshirt',
                    'title' => 'Uniformes Personnalisés',
                    'description' => 'Conception et production d\'uniformes sur mesure adaptés aux besoins spécifiques de chaque établissement scolaire.',
                    'features' => ['Design personnalisé', 'Couleurs de l\'établissement', 'Logo brodé']
                ],
                [
                    'icon' => 'palette',
                    'title' => 'Designs Innovants',
                    'description' => 'Des créations modernes et confortables qui répondent aux attentes de la nouvelle génération d\'élèves.',
                    'features' => ['Styles tendance', 'Confort optimal', 'Matières respirantes']
                ],
                [
                    'icon' => 'medal',
                    'title' => 'Qualité Premium',
                    'description' => 'Utilisation de tissus de haute qualité garantissant durabilité et confort tout au long de l\'année scolaire.',
                    'features' => ['Tissus durables', 'Finitions soignées', 'Résistance au lavage']
                ]
            ];
        @endphp

        @foreach($services as $service)
        <div class="bg-white p-8 rounded-2xl shadow-xl interactive-card border-t-4 border-marron group">
            <div class="text-5xl mb-4 text-marron group-hover:scale-110 transition-transform duration-500 animate-pulse-slow">
                <i class="fas fa-{{ $service['icon'] }}"></i>
            </div>
            <h3 class="text-xl font-bold text-marron mb-4">{{ $service['title'] }}</h3>
            <p class="text-gris">{{ $service['description'] }}</p>
            <div class="mt-6 pt-4 border-t border-gray-100">
                <ul class="text-sm text-gris">
                    @foreach($service['features'] as $feature)
                    <li class="mb-2 flex items-center"><i class="fas fa-check text-marron mr-2"></i> {{ $feature }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endforeach
    </div>
</section>
