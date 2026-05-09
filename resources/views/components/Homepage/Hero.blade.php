<section class="relative h-screen w-full overflow-hidden bg-black" id="hero-slider">
    <!-- Slide 1 -->
    <div class="hero-slide absolute inset-0 opacity-100 transition-opacity duration-1000 z-10" data-active="true">
        <!-- Background -->
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-cover bg-center scale-110 animate-zoom-slow"
                style="background-image: url('{{ asset('assets/images/slider1.png') }}');"></div>
            <div class="absolute inset-0 bg-gradient-to-b from-black/40 via-black/60 to-black/90"></div>
        </div>

        <!-- Content -->
        <div
            class="relative z-10 container mx-auto px-6 md:px-10 h-full flex flex-col items-center justify-center text-center max-w-7xl">
            <div class="flex flex-col items-center space-y-8 slide-content">
                <div class="animate-content">
                    <h1 class="text-3xl font-extrabold md:text-6xl lg:text-7xl text-white mb-0 md:mb-[-20px]">
                        Votre partenaire de solution sur mesure pour optimiser vos opérations.
                    </h1>
                </div>

                <p
                    class="text-lg mt-6 max-sm:mt-1 max-sm:text-base md:text-xl text-white/70 max-w-2xl mx-auto animate-content delay-200">
                    Transport sécurisé de carburant et solutions d’approvisionnement industriel adaptées à vos besoins,
                    partout et à tout moment.
                </p>

                <div
                    class="flex flex-col sm:flex-row max-sm:flex-row items-center justify-center gap-5 animate-content delay-400 w-full sm:w-auto">
                    <a href="nos-services"
                        class="w-full max-sm:w-full max-sm:text-sm sm:w-auto px-14 max-sm:px-4 py-4 rounded-full bg-primary hover:bg-primary-dark text-white font-bold text-lg transition-all hover:shadow-primary/40 flex items-center justify-center gap-2">
                        Nos Services
                    </a>
                    <a href="contactez-nous"
                        class="w-full sm:w-auto max-sm:w-full max-sm:text-sm px-14 max-sm:px-4 py-4 rounded-full bg-white/10 backdrop-blur-md border border-white/10 hover:bg-white/20 text-white font-bold text-lg transition-all flex items-center justify-center gap-2">
                        Nous contacter
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Slide 2 -->
    <div class="hero-slide absolute inset-0 opacity-0 transition-opacity duration-1000 z-0" data-active="false">
        <!-- Background -->
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-cover bg-center scale-110 animate-zoom-slow"
                style="background-image: url('{{ asset('assets/images/slider2.png') }}');"></div>
            <div class="absolute inset-0 bg-gradient-to-b from-black/40 via-black/60 to-black/90"></div>
        </div>

        <!-- Content -->
        <div
            class="relative z-10 container mx-auto px-6 md:px-10 h-full flex flex-col items-center justify-center text-center max-w-7xl">
            <div class="flex flex-col items-center space-y-8 slide-content">
                <div class="animate-content">
                    <h1 class="text-3xl font-extrabold md:text-6xl lg:text-7xl text-white mb-0 md:mb-[-20px]">
                        Fiabilit&eacute; et Engagement au cœur de vos
                        op&eacute;rations
                    </h1>
                </div>

                <p
                    class="text-lg mt-6 max-sm:mt-1 max-sm:text-base md:text-xl text-white/70 max-w-2xl mx-auto animate-content delay-200">
                    Nous répondons avec efficacité et engagement à vos besoins en carburant et fourniture d'équipements
                    industriels pour garantir la continuité de vos opérations.
                </p>

                <div
                    class="flex flex-col sm:flex-row max-sm:flex-row items-center justify-center gap-5 animate-content delay-400 w-full sm:w-auto">
                    <a href="a-propos-de-nous"
                        class="w-full max-sm:w-full max-sm:text-sm sm:w-auto px-14 max-sm:px-4 py-4 rounded-full bg-primary hover:bg-primary-dark text-white font-bold text-lg transition-all hover:shadow-primary/40 flex items-center justify-center gap-2">
                        A propos de nous
                    </a>
                    <a href="devenir-partenaire"
                        class="w-full sm:w-auto max-sm:w-full max-sm:text-sm px-14 max-sm:px-4 py-4 rounded-full bg-white/10 backdrop-blur-md border border-white/10 hover:bg-white/20 text-white font-bold text-lg transition-all flex items-center justify-center gap-2">
                        Partenariat
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation Dots -->
    <div class="absolute bottom-10 left-1/2 -translate-x-1/2 z-30 flex space-x-3">
        <button class="w-12 h-1.5 rounded-full bg-white transition-all duration-300" data-slide="0"></button>
        <button class="w-8 h-1.5 rounded-full bg-white/30 hover:bg-white/50 transition-all duration-300"
            data-slide="1"></button>
    </div>
</section>

<style>
    @keyframes zoom-slow {
        from {
            transform: scale(1.1);
        }

        to {
            transform: scale(1);
        }
    }

    .animate-zoom-slow {
        animation: zoom-slow 20s linear infinite alternate;
    }

    .hero-slide[data-active="true"] {
        opacity: 1;
        z-index: 20;
    }

    .hero-slide[data-active="false"] {
        opacity: 0;
        z-index: 10;
    }

    /* Animation for content inside active slide */
    .hero-slide[data-active="true"] .animate-content {
        animation: fadeInUp 1s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }

    .hero-slide[data-active="false"] .animate-content {
        opacity: 0;
        transform: translateY(30px);
    }

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

    .delay-200 {
        animation-delay: 0.2s;
    }

    .delay-400 {
        animation-delay: 0.4s;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const slides = document.querySelectorAll('.hero-slide');
        const dots = document.querySelectorAll('[data-slide]');
        let currentSlide = 0;
        const totalSlides = slides.length;
        let interval;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                const isActive = i === index;
                slide.setAttribute('data-active', isActive);

                // Reset animations for hidden slides
                if (!isActive) {
                    const anims = slide.querySelectorAll('.animate-content');
                    anims.forEach(a => a.style.opacity = '0');
                } else {
                    const anims = slide.querySelectorAll('.animate-content');
                    anims.forEach(a => a.style.opacity = '');
                }
            });

            dots.forEach((dot, i) => {
                if (i === index) {
                    dot.classList.remove('bg-white/30', 'w-8');
                    dot.classList.add('bg-white', 'w-12');
                } else {
                    dot.classList.remove('bg-white', 'w-12');
                    dot.classList.add('bg-white/30', 'w-8');
                }
            });
            currentSlide = index;
        }

        function nextSlide() {
            showSlide((currentSlide + 1) % totalSlides);
        }

        function startAutoPlay() {
            interval = setInterval(nextSlide, 6000);
        }

        dots.forEach(dot => {
            dot.addEventListener('click', () => {
                clearInterval(interval);
                showSlide(parseInt(dot.dataset.slide));
                startAutoPlay();
            });
        });

        startAutoPlay();
    });
</script>