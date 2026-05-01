<section class="py-24 bg-white text-slate-900 overflow-hidden" id="services">
    <div class="container mx-auto px-6 md:px-10 max-w-7xl">
        <!-- Section Header -->
        <div
            class="flex flex-col lg:flex-row lg:items-end justify-between gap-8 mb-16 animate-on-scroll opacity-0 translate-y-10 transition-all duration-1000">
            <div class="max-w-2xl space-y-4">
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold leading-tight text-slate-900">
                    Des solutions pour garantir la
                    <span class="relative inline-block">
                        continuité
                        <svg class="absolute -bottom-2 left-0 w-full h-3 text-primary opacity-60" viewBox="0 0 200 12"
                            fill="none" preserveAspectRatio="none">
                            <path d="M2 10.5C40 4 80 2 198 4.5" stroke="currentColor" stroke-width="4"
                                stroke-linecap="round" />
                        </svg>
                    </span>
                    de vos opérations
                </h2>
                <p class="text-lg text-slate-600 leading-relaxed max-w-xl">
                    Nous proposons des services fiables et sécurisés en transport de carburant et en approvisionnement
                    industriel, adaptés aux exigences de votre activité.
                </p>
            </div>
            <div class="flex flex-col items-start lg:items-end">
                <a href="/services"
                    class="group flex items-center gap-2 text-slate-900 font-bold text-lg hover:text-primary transition-colors duration-300">
                    <span class="relative">
                        Voir tous les services
                        <span
                            class="absolute bottom-0 left-0 w-0 h-0.5 bg-primary transition-all duration-300 group-hover:w-full"></span>
                    </span>
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        </div>

        <!-- Services Grid -->
        <!-- Services Grid / Mobile Carousel -->
        <div id="services-carousel" class="flex overflow-x-auto md:grid md:grid-cols-2 lg:grid-cols-4 gap-8 snap-x snap-mandatory scroll-smooth pb-12 md:pb-0 hide-scrollbar">
            <!-- 1. Transport de carburant -->
            <div
                class="flex-none w-[85vw] md:w-full snap-center group p-8 rounded-3xl bg-white border border-slate-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-500 animate-on-scroll opacity-0 translate-y-10 delay-100 transition-all duration-1000">
                <div
                    class="w-16 h-16 mb-8 flex items-center justify-center rounded-2xl bg-indigo-50 text-indigo-600 group-hover:scale-110 group-hover:rotate-3 transition-transform duration-500">
                    <x-lucide-bus class="w-10 h-10" />
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-4">Transport de carburant</h3>
                <p class="text-slate-600 mb-8 line-clamp-3">
                    Transport sécurisé de carburant à l’échelle nationale et internationale, avec respect strict des
                    normes et des délais.
                </p>
                <a href="/services/transport"
                    class="inline-flex items-center gap-2 px-6 py-3 rounded-xl border border-slate-200 text-slate-900 font-bold group/btn hover:bg-slate-900 hover:text-white hover:border-slate-900 transition-all duration-300">
                    Explorer
                    <x-lucide-arrow-right class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform" />
                </a>
            </div>

            <!-- 2. Logistique internationale -->
            <div
                class="flex-none w-[85vw] md:w-full snap-center group p-8 rounded-3xl bg-white border border-slate-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-500 animate-on-scroll opacity-0 translate-y-10 delay-200 transition-all duration-1000">
                <div
                    class="w-16 h-16 mb-8 flex items-center justify-center rounded-2xl bg-blue-50 text-blue-600 group-hover:scale-110 group-hover:rotate-3 transition-transform duration-500">
                    <x-lucide-globe class="w-10 h-10" />
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-4">Logistique internationale</h3>
                <p class="text-slate-600 mb-8 line-clamp-3">
                    Gestion des livraisons vers la RCA, le Tchad et autres zones, avec un suivi fiable et une
                    coordination efficace.
                </p>
                <a href="/services/logistique"
                    class="inline-flex items-center gap-2 px-6 py-3 rounded-xl border border-slate-200 text-slate-900 font-bold group/btn hover:bg-slate-900 hover:text-white hover:border-slate-900 transition-all duration-300">
                    Explorer
                    <svg class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>

            <!-- 3. Approvisionnement industriel -->
            <div
                class="flex-none w-[85vw] md:w-full snap-center group p-8 rounded-3xl bg-white border border-slate-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-500 animate-on-scroll opacity-0 translate-y-10 delay-300 transition-all duration-1000">
                <div
                    class="w-16 h-16 mb-8 flex items-center justify-center rounded-2xl bg-orange-50 text-orange-600 group-hover:scale-110 group-hover:rotate-3 transition-transform duration-500">
                    <x-lucide-package-check class="w-10 h-10" />
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-4">Approvisionnement industriel</h3>
                <p class="text-slate-600 mb-8 line-clamp-3">
                    Fourniture d’équipements, consommables et solutions adaptées aux besoins des entreprises et
                    chantiers.
                </p>
                <a href="/services/approvisionnement"
                    class="inline-flex items-center gap-2 px-6 py-3 rounded-xl border border-slate-200 text-slate-900 font-bold group/btn hover:bg-slate-900 hover:text-white hover:border-slate-900 transition-all duration-300">
                    Explorer
                    <svg class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>

            <!-- 4. Équipements & sécurité (EPI) -->
            <div
                class="flex-none w-[85vw] md:w-full snap-center group p-8 rounded-3xl bg-white border border-slate-100 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-500 animate-on-scroll opacity-0 translate-y-10 delay-400 transition-all duration-1000">
                <div
                    class="w-16 h-16 mb-8 flex items-center justify-center rounded-2xl bg-teal-50 text-teal-600 group-hover:scale-110 group-hover:rotate-3 transition-transform duration-500">
                    <x-lucide-hard-hat class="w-10 h-10" />
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-4">Équipements & sécurité (EPI)</h3>
                <p class="text-slate-600 mb-8 line-clamp-3">
                    Distribution de matériels de protection et produits professionnels pour garantir la sécurité et la
                    performance.
                </p>
                <a href="/services/securite"
                    class="inline-flex items-center gap-2 px-6 py-3 rounded-xl border border-slate-200 text-slate-900 font-bold group/btn hover:bg-slate-900 hover:text-white hover:border-slate-900 transition-all duration-300">
                    Explorer
                    <svg class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        </div>

        <!-- Mobile Pagination Indicator (Visible only on mobile) -->
        <div class="flex md:hidden justify-center items-center gap-3 mt-4">
            <div class="service-dot w-2.5 h-2.5 rounded-full bg-primary transition-all duration-300"></div>
            <div class="service-dot w-1.5 h-1.5 rounded-full bg-slate-200 transition-all duration-300"></div>
            <div class="service-dot w-1.5 h-1.5 rounded-full bg-slate-200 transition-all duration-300"></div>
            <div class="service-dot w-1.5 h-1.5 rounded-full bg-slate-200 transition-all duration-300"></div>
        </div>
    </div>

    <style>
        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Animation on scroll observer
        const observerOptions = {
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove('opacity-0', 'translate-y-10');
                    entry.target.classList.add('opacity-100', 'translate-y-0');
                }
            });
        }, observerOptions);

        document.querySelectorAll('#services .animate-on-scroll').forEach(el => {
            observer.observe(el);
        });

        // Dynamic Pagination logic
        const carousel = document.getElementById('services-carousel');
        const dots = document.querySelectorAll('.service-dot');

        if (carousel && dots.length > 0) {
            carousel.addEventListener('scroll', () => {
                const scrollLeft = carousel.scrollLeft;
                const itemWidth = carousel.firstElementChild.offsetWidth + 32; // width + gap
                const index = Math.round(scrollLeft / itemWidth);

                dots.forEach((dot, i) => {
                    if (i === index) {
                        dot.classList.add('bg-primary', 'w-2.5', 'h-2.5');
                        dot.classList.remove('bg-slate-200', 'w-1.5', 'h-1.5');
                    } else {
                        dot.classList.remove('bg-primary', 'w-2.5', 'h-2.5');
                        dot.classList.add('bg-slate-200', 'w-1.5', 'h-1.5');
                    }
                });
            });
        }
    });
</script>