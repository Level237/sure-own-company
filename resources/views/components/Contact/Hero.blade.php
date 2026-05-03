<section class="relative h-[50vh] min-h-[400px] w-full overflow-hidden bg-black">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-cover bg-center animate-zoom-slow"
            style="background-image: url('{{ asset('assets/images/slider2.png') }}');"></div>
        <div class="absolute inset-0 bg-primary/80 mix-blend-multiply"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-primary/20 to-black/80"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10 container mx-auto px-6 md:px-10 h-full flex flex-col items-center justify-center text-center max-w-7xl">
        <div class="space-y-6">
            <h1 class="text-4xl md:text-7xl font-black text-white leading-tight animate-fade-in-up">
                Contactez-nous
            </h1>
            <div class="w-24 h-1.5 bg-white mx-auto rounded-full animate-width-grow"></div>
            <p class="text-white/90 text-lg md:text-xl max-w-2xl mx-auto animate-fade-in-up delay-200 leading-relaxed">
                Notre équipe d'experts est prête à répondre à tous vos besoins en logistique et approvisionnement industriel.
            </p>
        </div>
    </div>

    <!-- Breadcrumb -->
    <div class="absolute bottom-8 left-0 w-full z-10">
        <div class="container mx-auto px-6 md:px-10 max-w-7xl">
            <nav class="flex justify-center text-white/60 text-sm font-medium space-x-2">
                <a href="/" class="hover:text-white transition-colors">Accueil</a>
                <span>/</span>
                <span class="text-white">Contact</span>
            </nav>
        </div>
    </div>
</section>

<style>
    @keyframes fade-in-up {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes width-grow {
        from {
            width: 0;
        }
        to {
            width: 6rem;
        }
    }

    @keyframes zoom-slow {
        from { transform: scale(1.1); }
        to { transform: scale(1); }
    }

    .animate-fade-in-up {
        animation: fade-in-up 1s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }

    .animate-width-grow {
        animation: width-grow 1s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }

    .animate-zoom-slow {
        animation: zoom-slow 20s linear forwards;
    }

    .delay-200 {
        animation-delay: 0.2s;
    }
</style>
