@props(['title', 'category', 'image'])

<section class="relative h-[50vh] min-h-[400px] w-full overflow-hidden bg-black">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-cover bg-center animate-zoom-slow"
            style="background-image: url('{{ asset($image) }}');"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/40 to-transparent"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10 container mx-auto px-6 md:px-10 h-full flex flex-col justify-center max-w-7xl">
        <div class="max-w-3xl space-y-4">
            <div class="inline-block px-4 py-1 bg-primary text-white text-sm font-bold rounded-full animate-fade-in">
                {{ $category }}
            </div>
            <h1 class="text-4xl md:text-6xl font-black text-white leading-tight animate-slide-in-left">
                {{ $title }}
            </h1>
            <div class="w-20 h-1 bg-primary animate-width-grow"></div>
        </div>
    </div>

    <!-- Breadcrumb -->
    <div class="absolute bottom-8 left-0 w-full z-10">
        <div class="container mx-auto px-6 md:px-10 max-w-7xl">
            <nav class="flex text-white/60 text-sm font-medium space-x-2">
                <a href="/" class="hover:text-primary transition-colors">Accueil</a>
                <span>/</span>
                <a href="/nos-services" class="hover:text-primary transition-colors">Nos Services</a>
                <span>/</span>
                <span class="text-white">{{ $title }}</span>
            </nav>
        </div>
    </div>
</section>

<style>
    @keyframes slide-in-left {
        from { opacity: 0; transform: translateX(-30px); }
        to { opacity: 1; transform: translateX(0); }
    }

    @keyframes fade-in {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    .animate-slide-in-left {
        animation: slide-in-left 1s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }

    .animate-fade-in {
        animation: fade-in 1s ease-out forwards;
    }

    @keyframes zoom-slow {
        from { transform: scale(1.1); }
        to { transform: scale(1); }
    }

    .animate-zoom-slow {
        animation: zoom-slow 20s linear forwards;
    }
</style>
