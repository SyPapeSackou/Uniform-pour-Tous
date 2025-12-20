<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'UNIFORME POUR TOUS - Uniformes Scolaires de Qualité')</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{asset('build/assets/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        marron: {
                            DEFAULT: '#6B4423',
                            light: '#8B6A4F',
                            dark: '#4A2F1A'
                        },
                        gris: {
                            DEFAULT: '#4A4A4A',
                            light: '#E8E8E8',
                            dark: '#2A2A2A'
                        }
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'text-shimmer': 'text-shimmer 3s ease-in-out infinite alternate',
                        'gradient-x': 'gradient-x 15s ease infinite',
                        'morph': 'morph 8s ease-in-out infinite',
                        'slide-in-bottom': 'slide-in-bottom 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both',
                        'slide-in-left': 'slide-in-left 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both',
                        'slide-in-right': 'slide-in-right 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both',
                        'kenburns-top': 'kenburns-top 5s ease-out both',
                        'bounce-gentle': 'bounce-gentle 2s infinite'
                    }
                }
            }
        }
    </script>
</head>
<body class="font-sans text-gris overflow-x-hidden bg-white">
    @include('layouts.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <!-- Modal -->
    <div id="modal" class="fixed inset-0 bg-black bg-opacity-95 z-50 hidden items-center justify-center p-4">
        <span class="absolute top-5 right-10 text-white text-5xl cursor-pointer hover:text-gray-300 transition-colors duration-300 z-10" onclick="closeModal()">&times;</span>
        <div class="max-w-4xl max-h-full overflow-auto rounded-2xl">
            <img id="modalImg" class="w-full h-auto object-contain rounded-2xl">
        </div>
    </div>

    @yield('scripts')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
