<header id="header" class="bg-white/90 backdrop-blur-xl border-b border-gray-200 fixed w-full top-0 z-50 transition-all duration-500 shadow-sm">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <a href="#" class="flex items-center gap-3 group">
                <div class="relative">
                    <img src="{{ asset('build/assets/images/logo.png') }}" style="width: 60px; height: 60px;" alt="UNIFORME POUR TOUS" class="group-hover:scale-105 transition-transform duration-300" />
                    <div class="absolute inset-0 rounded-full bg-amber-600/10 group-hover:bg-amber-600/20 transition-colors duration-300"></div>
                </div>
                <div class="hidden lg:block">
                    <div class="font-bold text-gray-900 text-lg leading-tight">UNIFORME</div>
                    <div class="font-semibold text-amber-700 text-sm leading-tight">POUR TOUS</div>
                </div>
            </a>

            <!-- Navigation Desktop -->
            <ul class="hidden md:flex items-center space-x-1">
                @foreach(['accueil' => 'Accueil', 'apropos' => 'À Propos', 'galerie' => 'Galerie', 'services' => 'Services', 'saison' => 'Saisonnalité', 'contact' => 'Contact'] as $section => $label)
                <li>
                    <a href="#{{ $section }}" class="relative px-6 py-3 text-gray-700 hover:text-amber-800 transition-colors duration-300 group font-medium text-[15px]">
                        {{ $label }}
                        <span class="absolute bottom-2 left-1/2 transform -translate-x-1/2 w-0 h-0.5 bg-amber-600 group-hover:w-4/5 transition-all duration-300 rounded-full"></span>
                        <span class="absolute inset-0 bg-gradient-to-r from-amber-50 to-amber-100 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300 -z-10"></span>
                    </a>
                </li>
                @endforeach
            </ul>

            <!-- Bouton Contact Mobile -->
            <div class="md:hidden flex items-center gap-4">
                <a href="#contact" class="bg-amber-600 text-white px-4 py-2 rounded-lg text-sm font-semibold hover:bg-amber-700 transition-colors duration-300">
                    Contact
                </a>

                <!-- Menu Burger -->
                <button id="burger" class="flex flex-col space-y-1.5 p-2 rounded-lg hover:bg-gray-100 transition-colors duration-300">
                    <span class="w-6 h-0.5 bg-gray-700 transition-all duration-300 burger-line-1"></span>
                    <span class="w-6 h-0.5 bg-gray-700 transition-all duration-300 burger-line-2"></span>
                    <span class="w-6 h-0.5 bg-gray-700 transition-all duration-300 burger-line-3"></span>
                </button>
            </div>
        </div>

        <!-- Menu Mobile -->
        <div id="mobileMenu" class="md:hidden hidden pb-6 bg-white/95 backdrop-blur-xl border border-gray-200 rounded-2xl mt-2 shadow-xl">
            <ul class="flex flex-col space-y-2 p-4">
                @foreach(['accueil' => 'Accueil', 'apropos' => 'À Propos', 'galerie' => 'Galerie', 'services' => 'Services', 'saison' => 'Saisonnalité', 'contact' => 'Contact'] as $section => $label)
                <li>
                    <a href="#{{ $section }}" class="flex items-center gap-3 text-gray-700 hover:text-amber-800 hover:bg-amber-50 transition-all duration-300 py-3 px-4 rounded-xl font-medium group">
                        <div class="w-1.5 h-1.5 rounded-full bg-amber-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        {{ $label }}
                    </a>
                </li>
                @endforeach
            </ul>

            <!-- Bouton Contact Mobile -->
            <div class="px-4 pt-4 border-t border-gray-100">
                <a href="#contact" class="block w-full bg-amber-600 text-white text-center py-3 rounded-xl font-semibold hover:bg-amber-700 transition-colors duration-300 shadow-lg">
                    Discuter de mon projet
                </a>
            </div>
        </div>
    </nav>
</header>

<style>
/* Animation du menu burger */
#burger.active .burger-line-1 {
    transform: rotate(45deg) translate(6px, 6px);
}
#burger.active .burger-line-2 {
    opacity: 0;
}
#burger.active .burger-line-3 {
    transform: rotate(-45deg) translate(6px, -6px);
}

/* Transition pour le menu mobile */
#mobileMenu {
    transition: all 0.3s ease-in-out;
}
</style>

<script>
// Gestion du menu burger
document.getElementById('burger').addEventListener('click', function() {
    this.classList.toggle('active');
    const mobileMenu = document.getElementById('mobileMenu');
    mobileMenu.classList.toggle('hidden');

    // Animation d'apparition
    if (!mobileMenu.classList.contains('hidden')) {
        mobileMenu.style.opacity = '0';
        mobileMenu.style.transform = 'translateY(-10px)';
        setTimeout(() => {
            mobileMenu.style.opacity = '1';
            mobileMenu.style.transform = 'translateY(0)';
        }, 10);
    }
});

// Fermer le menu mobile au clic sur un lien
document.querySelectorAll('#mobileMenu a').forEach(link => {
    link.addEventListener('click', () => {
        document.getElementById('burger').classList.remove('active');
        document.getElementById('mobileMenu').classList.add('hidden');
    });
});
</script>
