<section class="py-16 bg-white border-y border-slate-100" id="partners">
    <div class="max-w-7xl mx-auto px-6 md:px-10">
        <div class="space-y-10">

            <!-- Header -->
            <div class="text-center animate-on-scroll opacity-0 translate-y-5 transition-all duration-700">
                <span class="text-md font-bold tracking-[0.2em] uppercase text-slate-400">
                    Ils nous font confiance
                </span>
            </div>

            <!-- DESKTOP : grille normale -->
            <div
                class="hidden sm:flex flex-wrap justify-center items-center gap-10 animate-on-scroll translate-y-10 transition-all duration-1000 delay-200">
                <div class="group flex items-center justify-center">
                    <img src="{{ asset('assets/images/partner1.png') }}" alt="Partner 1"
                        class="h-24 w-24 transition-all duration-500 transform group-hover:scale-110">
                </div>
                <div class="group flex items-center justify-center">
                    <img src="{{ asset('assets/images/partner2.png') }}" alt="Partner 2"
                        class="h-24 w-38 transition-all duration-500 transform group-hover:scale-110">
                </div>
                <div class="group flex items-center justify-center">
                    <img src="{{ asset('assets/images/partner3.png') }}" alt="Partner 3"
                        class="h-24 w-38 transition-all duration-500 transform group-hover:scale-110">
                </div>
                <div class="group flex items-center justify-center">
                    <img src="{{ asset('assets/images/partner5.png') }}" alt="Partner 5"
                        class="h-24 w-38 transition-all duration-500 transform group-hover:scale-110">
                </div>
                <div class="group flex items-center justify-center">
                    <img src="{{ asset('assets/images/partner6.png') }}" alt="Partner 6"
                        class="h-44 w-28 transition-all duration-500 transform group-hover:scale-110">
                </div>
            </div>

            <!-- MOBILE : défilement infini -->
            <div
                class="sm:hidden overflow-hidden relative animate-on-scroll opacity-0 translate-y-5 transition-all duration-700 delay-200">
                <!-- Dégradés sur les bords -->
                <div
                    class="absolute left-0 top-0 h-full w-12 bg-gradient-to-r from-white to-transparent z-10 pointer-events-none">
                </div>
                <div
                    class="absolute right-0 top-0 h-full w-12 bg-gradient-to-l from-white to-transparent z-10 pointer-events-none">
                </div>

                <div class="partners-track flex items-center gap-10">
                    <!-- Liste dupliquée pour effet infini -->
                    @foreach ([1, 2, 3, 5, 6, 1, 2, 3, 5, 6] as $p)
                        @php
                            $heights = [1 => 'h-18', 2 => 'h-16', 3 => 'h-16', 5 => 'h-16', 6 => 'h-28'];
                            $widths = [1 => 'w-24', 2 => 'w-28', 3 => 'w-28', 5 => 'w-28', 6 => 'w-44'];
                        @endphp
                        <div class="flex-shrink-0 flex items-center justify-center">
                            <img src="{{ asset('assets/images/partner' . $p . '.png') }}" alt="Partner {{ $p }}"
                                class="{{ $heights[$p] }} {{ $widths[$p] }} object-contain">
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>

<style>
    .partners-track {
        width: max-content;
        animation: partners-scroll 18s linear infinite;
    }

    @keyframes partners-scroll {
        from {
            transform: translateX(0);
        }

        to {
            transform: translateX(-50%);
        }
    }

    /* Pause au survol/touch -->
    .partners-track:hover {
        animation-play-state: paused;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove('opacity-0', 'translate-y-5', 'translate-y-10');
                    entry.target.classList.add('opacity-100', 'translate-y-0');
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('#partners .animate-on-scroll').forEach(el => observer.observe(el));
    });
</script>