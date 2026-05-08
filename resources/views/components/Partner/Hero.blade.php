<section class="relative h-[60vh] min-h-[450px] w-full overflow-hidden bg-black">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-cover bg-center animate-zoom-slow"
            style="background-image: url('{{ asset('assets/images/become-partener.png') }}');"></div>
        <div class="absolute inset-0 bg-slate-900/60"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-slate-900 via-slate-900/40 to-transparent"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10 container mx-auto px-6 md:px-10 h-full flex flex-col justify-center max-w-7xl">
        <div class="max-w-3xl space-y-5 max-sm:space-y-3">


            <h1 class="text-4xl md:text-6xl max-sm:text-3xl font-black text-white leading-tight animate-fade-in-up">
                Bâtissons l'avenir <br> <span class="text-primary">ensemble</span>
            </h1>

            <p
                class="text-white/80 max-sm:text-sm text-lg md:text-xl max-w-xl animate-fade-in-up delay-200 leading-relaxed">
                Rejoignez le réseau SureOwn et profitez d'une expertise logistique de premier plan pour développer vos
                activités.
            </p>

            <div class="pt-4 animate-fade-in-up delay-300">
                <a href="#form"
                    class="inline-flex max-sm:text-sm items-center gap-3 px-8 py-4 rounded-2xl bg-primary text-white font-black hover:bg-white hover:text-primary transition-all duration-300 shadow-xl shadow-primary/20 group">
                    Commencer l'aventure
                    <x-lucide-arrow-down class="w-5 h-5 group-hover:translate-y-1 transition-transform" />
                </a>
            </div>
        </div>
    </div>
</section>

<style>
    @keyframes fade-in-up {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fade-in {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes zoom-slow {
        from {
            transform: scale(1.1);
        }

        to {
            transform: scale(1);
        }
    }

    .animate-fade-in-up {
        animation: fade-in-up 1s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }

    .animate-fade-in {
        animation: fade-in 1.5s ease-out forwards;
    }

    .animate-zoom-slow {
        animation: zoom-slow 20s linear forwards;
    }

    .delay-200 {
        animation-delay: 0.2s;
    }

    .delay-300 {
        animation-delay: 0.3s;
    }

    .delay-500 {
        animation-delay: 0.5s;
    }
</style>