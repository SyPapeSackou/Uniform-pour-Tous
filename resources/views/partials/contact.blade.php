<section id="contact" class="py-20 px-4 max-w-7xl mx-auto relative bg-gradient-to-br from-gray-50 to-white">
    <div class="text-center mb-16">
        <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">
            Prenons <span class="text-amber-800">Contact</span>
        </h2>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto">
            Discutons de votre projet d'uniformes scolaires et créons ensemble des tenues qui représenteront fièrement votre établissement.
        </p>
    </div>

    <div class="grid lg:grid-cols-3 gap-8 mt-16">
        <!-- Carte de contact principale -->
        <div class="lg:col-span-2">
            <div class="bg-gradient-to-br from-gray-800 to-gray-900 text-white p-8 rounded-2xl shadow-2xl hover:shadow-3xl transition-all duration-500">
                <h3 class="text-3xl font-bold mb-6 flex items-center">
                    <span class="w-3 h-8 bg-amber-600 rounded-full mr-4"></span>
                    Travaillons ensemble
                </h3>
                <p class="text-gray-300 mb-8 text-lg leading-relaxed">
                    Vous avez un projet d'uniformes scolaires ? Discutons de vos besoins et créons ensemble des tenues qui représenteront fièrement votre établissement.
                </p>

                <div class="grid md:grid-cols-2 gap-6 mb-8">
                    <div class="flex items-center p-4 bg-white/5 rounded-xl border border-white/10 hover:border-amber-600/30 transition-all duration-300">
                        <div class="w-12 h-12 rounded-full bg-amber-600 flex items-center justify-center text-white mr-4">
                            <i class="fas fa-comments"></i>
                        </div>
                        <div>
                            <p class="font-bold text-white">Consultation gratuite</p>
                            <p class="text-sm text-gray-400">Échangeons sur votre projet</p>
                        </div>
                    </div>

                    <div class="flex items-center p-4 bg-white/5 rounded-xl border border-white/10 hover:border-amber-600/30 transition-all duration-300">
                        <div class="w-12 h-12 rounded-full bg-amber-600 flex items-center justify-center text-white mr-4">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <div>
                            <p class="font-bold text-white">Solutions sur mesure</p>
                            <p class="text-sm text-gray-400">Adaptées à vos besoins</p>
                        </div>
                    </div>
                </div>

                <div class="flex flex-wrap gap-4">
                    <a href="mailto:Uniformepourtous@gmail.com" class="bg-amber-600 text-white px-8 py-4 rounded-xl font-semibold hover:bg-amber-700 transform hover:-translate-y-1 transition-all duration-300 flex items-center shadow-lg">
                        <i class="fas fa-envelope mr-3"></i>
                        Nous écrire
                    </a>
                    <a href="tel:+221772391689" class="bg-white text-gray-900 px-8 py-4 rounded-xl font-semibold hover:bg-gray-100 transform hover:-translate-y-1 transition-all duration-300 flex items-center shadow-lg">
                        <i class="fas fa-phone mr-3"></i>
                        Nous appeler
                    </a>
                    <button onclick="openWhatsApp()" class="bg-green-600 text-white px-8 py-4 rounded-xl font-semibold hover:bg-green-700 transform hover:-translate-y-1 transition-all duration-300 flex items-center shadow-lg">
                        <i class="fab fa-whatsapp mr-3"></i>
                        WhatsApp
                    </button>
                </div>
            </div>
        </div>

        <!-- Informations de contact -->
        <div class="space-y-6">
            @php
                $contactInfo = [
                    ['icon' => 'envelope', 'title' => 'Email', 'content' => 'Uniformepourtous@gmail.com', 'color' => 'bg-amber-600'],
                    ['icon' => 'phone', 'title' => 'Téléphone', 'content' => '77 239 16 89', 'color' => 'bg-gray-700'],
                    ['icon' => 'map-marker-alt', 'title' => 'Adresse', 'content' => 'Saint-Louis, Commune de Diama', 'color' => 'bg-amber-800']
                ];
            @endphp

            @foreach($contactInfo as $info)
            <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-200 hover:border-amber-600/20 group">
                <div class="flex items-center">
                    <div class="w-14 h-14 rounded-xl {{ $info['color'] }} flex items-center justify-center text-white mr-4 group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-{{ $info['icon'] }} text-lg"></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-800">{{ $info['title'] }}</h3>
                        <p class="text-gray-600 mt-1">{{ $info['content'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach

            <!-- Horaires -->
            <div class="bg-white p-6 rounded-2xl shadow-lg border border-gray-200">
                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-clock mr-3 text-amber-600"></i>
                    Horaires d'ouverture
                </h3>
                <div class="space-y-3">
                    <div class="flex justify-between items-center py-2 border-b border-gray-100">
                        <span class="text-gray-600">Lundi - Vendredi</span>
                        <span class="font-semibold text-amber-700">8h00 - 18h00</span>
                    </div>
                    <div class="flex justify-between items-center py-2 border-b border-gray-100">
                        <span class="text-gray-600">Samedi</span>
                        <span class="font-semibold text-amber-700">9h00 - 13h00</span>
                    </div>
                    <div class="flex justify-between items-center py-2">
                        <span class="text-gray-600">Dimanche</span>
                        <span class="font-semibold text-red-500">Fermé</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Statistiques -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-20">
        @php
            $stats = [
                ['value' => '50+', 'label' => 'Établissements', 'icon' => 'school'],
                ['value' => '1000+', 'label' => 'Élèves équipés', 'icon' => 'user-graduate'],
                ['value' => '5+', 'label' => 'Ans d\'expérience', 'icon' => 'award'],
                ['value' => '98%', 'label' => 'Satisfaction client', 'icon' => 'heart']
            ];
        @endphp

        @foreach($stats as $stat)
        <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-200 hover:border-amber-600/30 text-center group">
            <div class="w-16 h-16 rounded-full bg-amber-100 flex items-center justify-center text-amber-600 mx-auto mb-4 group-hover:bg-amber-600 group-hover:text-white transition-all duration-300">
                <i class="fas fa-{{ $stat['icon'] }} text-xl"></i>
            </div>
            <div class="text-3xl font-bold text-gray-800 mb-2">{{ $stat['value'] }}</div>
            <p class="text-gray-600 font-medium">{{ $stat['label'] }}</p>
        </div>
        @endforeach
    </div>
</section>
