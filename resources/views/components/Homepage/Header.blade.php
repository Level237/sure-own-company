@props(['isWhite' => false, 'isHomepage' => false])

<header id="main-header"
    class="fixed top-0 left-0 w-full z-50 transition-all duration-300 {{ $isWhite ? ' shadow-md py-4' : 'py-6' }}">
    <div class="container mx-auto px-6 md:px-10 flex items-center justify-between max-w-7xl">
        <div class="flex-shrink-0">
            <a href="/">
                <!-- White Logo (Initial) -->
                <img src="{{ asset('assets/images/white-logo.png') }}" alt="Logo" id="logo-white"
                    class="h-12 w-auto {{ $isWhite ? 'hidden' : '' }}">
                <!-- Dark Logo (Scrolled) -->
                <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" id="logo-dark"
                    class="h-12 w-auto {{ $isWhite ? '' : 'hidden' }}">
            </a>
        </div>

        <nav id="nav-links"
            class="hidden lg:flex items-center space-x-10 {{ $isWhite ? 'text-slate-800' : 'text-white/90' }} transition-colors duration-300">
            <a href="/" class="text-lg font-bold hover:text-primary transition-colors">Accueil</a>
            <a href="/a-propos-de-nous" class="text-lg font-bold hover:text-primary transition-colors">A propos de
                nous</a>
            <a href="/nos-services" class="text-lg font-bold hover:text-primary transition-colors">Nos services</a>

            <a href="/contactez-nous" class="text-lg font-bold hover:text-primary transition-colors">Contactez-nous</a>

        </nav>

        <div class="flex items-center">
            <a href="/devenir-partenaire" id="partner-btn"
                class="hidden sm:inline-flex items-center justify-center px-8 py-3 rounded-full font-semibold text-sm transition-all hover:-translate-y-0.5 hover:shadow-lg
                {{ !$isHomepage && $isWhite ? 'bg-white text-primary border border-primary' : 'bg-primary text-white' }}">
                Devenir partenaire
            </a>

            <button id="menuToggle" class="lg:hidden ml-6 flex flex-col space-y-1.5 z-50">
                <span class="w-7 h-0.5 {{ $isWhite ? 'bg-slate-800' : 'bg-white' }} transition-all duration-300"></span>
                <span class="w-7 h-0.5 {{ $isWhite ? 'bg-slate-800' : 'bg-white' }} transition-all duration-300"></span>
                <span class="w-7 h-0.5 {{ $isWhite ? 'bg-slate-800' : 'bg-white' }} transition-all duration-300"></span>
            </button>
        </div>
    </div>

    <!-- Mobile Menu Overlay -->
    <div id="mobileMenu"
        class="fixed inset-0 bg-black z-40 translate-x-full transition-transform duration-500 lg:hidden flex flex-col items-center justify-center space-y-8">
        <a href="/" class="text-2xl font-semibold text-white hover:text-primary transition-colors">Accueil</a>
        <a href="/a-propos-de-nous" class="text-2xl font-semibold text-white hover:text-primary transition-colors">A
            propos de nous</a>
        <a href="/nos-services" class="text-2xl font-semibold text-white hover:text-primary transition-colors">Nos
            services</a>
        <a href="/passer-une-commande"
            class="text-2xl font-semibold text-white hover:text-primary transition-colors">Passer une commande</a>
        <a href="/contactez-nous"
            class="text-2xl font-semibold text-white hover:text-primary transition-colors">Contactez-nous</a>

        <a href="/devenir-partenaire" class="px-8 py-3 rounded-full bg-primary text-white font-semibold text-lg">Devenir
            partenaire</a>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const header = document.getElementById('main-header');
        const logoWhite = document.getElementById('logo-white');
        const logoDark = document.getElementById('logo-dark');
        const navLinks = document.getElementById('nav-links');
        const menuToggle = document.getElementById('menuToggle');
        const mobileMenu = document.getElementById('mobileMenu');
        const partnerBtn = document.getElementById('partner-btn');
        const spans = menuToggle.querySelectorAll('span');
        const isWhiteInitial = {{ $isWhite ? 'true' : 'false' }};
        const isHomepage = {{ $isHomepage ? 'true' : 'false' }};

        // Scroll Effect
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50 || isWhiteInitial) {
                // Header Background & Height
                header.classList.add('bg-white', 'shadow-md', 'py-4');
                header.classList.remove('py-6');

                // Logo Switch
                logoWhite.classList.add('hidden');
                logoDark.classList.remove('hidden');

                // Nav Links Color
                navLinks?.classList.remove('text-white/90');
                navLinks?.classList.add('text-slate-800');

                // Partner Button (toggle only if not homepage)
                if (!isHomepage) {
                    partnerBtn.classList.add('bg-primary', 'text-white');
                    partnerBtn.classList.remove('bg-white', 'text-primary', 'border', 'border-primary');
                }

                // Menu Toggle Spans Color
                spans.forEach(span => {
                    span.classList.remove('bg-white');
                    span.classList.add('bg-slate-800');
                });
            } else {
                // Restore Initial State (only if not forced white)
                header.classList.remove('bg-white', 'shadow-md', 'py-4');
                header.classList.add('py-6');

                logoWhite.classList.remove('hidden');
                logoDark.classList.add('hidden');

                navLinks?.classList.add('text-white/90');
                navLinks?.classList.remove('text-slate-800');

                // Partner Button
                if (!isHomepage) {
                    partnerBtn.classList.remove('bg-primary', 'text-white');
                    partnerBtn.classList.add('bg-white', 'text-primary', 'border', 'border-primary');
                }

                spans.forEach(span => {
                    span.classList.add('bg-white');
                    span.classList.remove('bg-slate-800');
                });
            }
        });

        // Mobile Menu Toggle
        menuToggle.addEventListener('click', () => {
            const isOpen = mobileMenu.classList.contains('translate-x-0');

            if (isOpen) {
                mobileMenu.classList.remove('translate-x-0');
                mobileMenu.classList.add('translate-x-full');
                spans[0].classList.remove('translate-y-2', 'rotate-45');
                spans[1].classList.remove('opacity-0');
                spans[2].classList.remove('-translate-y-2', '-rotate-45');
            } else {
                mobileMenu.classList.add('translate-x-0');
                mobileMenu.classList.remove('translate-x-full');
                spans[0].classList.add('translate-y-2', 'rotate-45');
                spans[1].classList.add('opacity-0');
                spans[2].classList.add('-translate-y-2', '-rotate-45');
            }
        });

        // Close menu on link click
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.remove('translate-x-0');
                mobileMenu.classList.add('translate-x-full');
                spans[0].classList.remove('translate-y-2', 'rotate-45');
                spans[1].classList.remove('opacity-0');
                spans[2].classList.remove('-translate-y-2', '-rotate-45');
            });
        });
    });
</script>