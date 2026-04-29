<header id="main-header" class="fixed top-0 left-0 w-full z-50 transition-all duration-300 py-6">
    <div class="container mx-auto px-6 md:px-10 flex items-center justify-between max-w-7xl">
        <div class="flex-shrink-0">
            <a href="/">
                <img src="{{ asset('assets/images/white-logo.png') }}" alt="Logo" class="h-12 w-auto">
            </a>
        </div>

        <nav class="hidden lg:flex items-center space-x-10">
            <a href="#about" class="text-sm font-medium text-white/90 hover:text-primary transition-colors">A propos de
                nous</a>
            <a href="#services" class="text-sm font-medium text-white/90 hover:text-primary transition-colors">Nos
                services</a>
            <a href="#contact"
                class="text-sm font-medium text-white/90 hover:text-primary transition-colors">Contactez-nous</a>
        </nav>

        <div class="flex items-center">
            <a href="#partner"
                class="hidden sm:inline-flex items-center justify-center px-8 py-3 rounded-full bg-primary hover:bg-primary-dark text-white font-semibold text-sm transition-all hover:-translate-y-0.5 hover:shadow-lg hover:shadow-primary/30">
                Devenir partenaire
            </a>

            <button id="menuToggle" class="lg:hidden ml-6 flex flex-col space-y-1.5 z-50">
                <span class="w-7 h-0.5 bg-white transition-all duration-300"></span>
                <span class="w-7 h-0.5 bg-white transition-all duration-300"></span>
                <span class="w-7 h-0.5 bg-white transition-all duration-300"></span>
            </button>
        </div>
    </div>

    <!-- Mobile Menu Overlay -->
    <div id="mobileMenu"
        class="fixed inset-0 bg-black z-40 translate-x-full transition-transform duration-500 lg:hidden flex flex-col items-center justify-center space-y-8">
        <a href="#about" class="text-2xl font-semibold text-white hover:text-primary transition-colors">A propos de
            nous</a>
        <a href="#services" class="text-2xl font-semibold text-white hover:text-primary transition-colors">Nos
            services</a>
        <a href="#contact"
            class="text-2xl font-semibold text-white hover:text-primary transition-colors">Contactez-nous</a>
        <a href="#partner" class="px-8 py-3 rounded-full bg-primary text-white font-semibold text-lg">Devenir
            partenaire</a>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const header = document.getElementById('main-header');
        const menuToggle = document.getElementById('menuToggle');
        const mobileMenu = document.getElementById('mobileMenu');
        const spans = menuToggle.querySelectorAll('span');

        // Scroll Effect
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('bg-black/80', 'backdrop-blur-xl', 'py-4', 'border-b', 'border-white/10');
                header.classList.remove('py-6');
            } else {
                header.classList.remove('bg-black/80', 'backdrop-blur-xl', 'py-4', 'border-b', 'border-white/10');
                header.classList.add('py-6');
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