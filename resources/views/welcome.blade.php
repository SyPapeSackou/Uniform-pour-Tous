@extends('layouts.app')

@section('title', 'UNIFORME POUR TOUS - Uniformes Scolaires de Qualité')

@section('content')
    @include('partials.hero')
    @include('partials.about')
    @include('partials.gallery')
    @include('partials.services')
    @include('partials.seasonality')
    @include('partials.contact')
@endsection

@section('scripts')
<script>
    // Le code JavaScript reste le même que dans votre fichier original
    // Mobile menu toggle
    const burger = document.getElementById('burger');
    const mobileMenu = document.getElementById('mobileMenu');

    burger.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
        const spans = burger.querySelectorAll('span');
        spans[0].classList.toggle('rotate-45');
        spans[0].classList.toggle('translate-y-2');
        spans[1].classList.toggle('opacity-0');
        spans[2].classList.toggle('-rotate-45');
        spans[2].classList.toggle('-translate-y-2');
    });

    // Close mobile menu on link click
    document.querySelectorAll('#mobileMenu a').forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
        });
    });

    // Smooth scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Header scroll effect
    const header = document.getElementById('header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('py-2', 'bg-white/80');
            header.classList.remove('py-4');
        } else {
            header.classList.add('py-4');
            header.classList.remove('py-2', 'bg-white/80');
        }
    });

    // Modal functionality
    const modal = document.getElementById('modal');
    const modalImg = document.getElementById('modalImg');

    function openModal(element) {
        const img = element.querySelector('img');
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        modalImg.src = img.src;
    }

    function closeModal() {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }

    modal.addEventListener('click', (e) => {
        if (e.target === modal) {
            closeModal();
        }
    });

    // WhatsApp function
    function openWhatsApp() {
        const message = "Bonjour UNIFORME POUR TOUS, je suis intéressé(e) par vos uniformes scolaires. Pouvez-vous me renseigner ?";
        const url = `https://wa.me/221772391689?text=${encodeURIComponent(message)}`;
        window.open(url, '_blank');
    }

    // Intersection Observer for animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('opacity-100', 'translate-y-0', 'translate-x-0');
                entry.target.classList.remove('opacity-0', 'translate-y-10', 'translate-x-10', '-translate-x-10');
            }
        });
    }, observerOptions);

    // Observe elements for animation
    document.querySelectorAll('.animate-slide-in-left, .animate-slide-in-right, .animate-slide-in-bottom, .interactive-card').forEach(el => {
        if (el.classList.contains('animate-slide-in-left')) {
            el.classList.add('opacity-0', '-translate-x-10');
        } else if (el.classList.contains('animate-slide-in-right')) {
            el.classList.add('opacity-0', 'translate-x-10');
        } else {
            el.classList.add('opacity-0', 'translate-y-10');
        }

        el.classList.add('transition-all', 'duration-700');
        observer.observe(el);
    });

    // Add floating particles dynamically
    function createParticles() {
        const container = document.querySelector('.particles-container');
        if (!container) return;

        for (let i = 0; i < 8; i++) {
            const particle = document.createElement('div');
            particle.classList.add('particle');

            // Random size between 2px and 6px
            const size = Math.random() * 4 + 2;
            particle.style.width = `${size}px`;
            particle.style.height = `${size}px`;

            // Random position
            particle.style.left = `${Math.random() * 100}%`;
            particle.style.top = `${Math.random() * 100}%`;

            // Random animation delay
            particle.style.animationDelay = `${Math.random() * 5}s`;

            container.appendChild(particle);
        }
    }

    // Initialize particles
    createParticles();

    // Add wave animation to SVG
    const waves = document.querySelectorAll('.wave path');
    waves.forEach((wave, index) => {
        wave.style.animation = `wave ${8 + index * 2}s linear infinite`;
    });
</script>
@endsection
