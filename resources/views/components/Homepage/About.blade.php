<section class="py-24 bg-white text-slate-900 overflow-hidden" id="about">
    <div class="container mx-auto px-6 md:px-10 max-w-7xl">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-32 items-center">

            <!-- Left: Text Content -->
            <div class="space-y-8 animate-on-scroll opacity-0 translate-x-[-50px] transition-all duration-1000">
                <div class="space-y-4">
                    <span class="text-primary font-bold tracking-widest uppercase text-sm block">Qui sommes-nous</span>
                    <h2 class="text-4xl md:text-5xl font-extrabold leading-tight text-slate-900">
                        Un partenaire fiable pour vos besoins Logistiques
                    </h2>
                </div>
                <div class="relative hidden max-sm:block z-10 rounded-3xl overflow-hidden shadow-2xl">
                    <img src="{{ asset('assets/images/about1.png') }}" alt="Transport de carburant"
                        class="w-full h-auto transform hover:scale-105 transition-transform duration-700">
                </div>
                <div class="space-y-6 text-lg text-slate-600 leading-relaxed">
                    <p>
                        C’est une équipe engagée, tournée vers vos enjeux.
                        Nous accompagnons les entreprises des secteurs
                        publics, parapublics et privés au cameroun, avec une
                        approche fondée sur:
                    </p>

                </div>

                <!-- Key Points -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 pt-4">
                    <div class="flex items-center gap-3 group">
                        <div
                            class="w-10 h-10 flex items-center justify-center rounded-xl bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white transition-all duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                </path>
                            </svg>
                        </div>
                        <span class="font-bold text-sm text-slate-800">S&eacute;curit&eacute; des
                            op&eacute;rations</span>
                    </div>

                    <div class="flex items-center gap-3 group">
                        <div
                            class="w-10 h-10 flex items-center justify-center rounded-xl bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white transition-all duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <span class="font-bold text-sm text-slate-800">Fiabilit&eacute; des livraisons</span>
                    </div>

                    <div class="flex items-center gap-3 group">
                        <div
                            class="w-10 h-10 flex items-center justify-center rounded-xl bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white transition-all duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <span class="font-bold text-sm text-slate-800">R&eacute;activit&eacute; terrain</span>
                    </div>
                </div>

                <div class="pt-8">
                    <a href="#about-more"
                        class="inline-flex items-center gap-2 px-8 py-4 rounded-full bg-slate-900 text-white font-bold hover:bg-primary transition-all duration-300 hover:shadow-xl hover:shadow-primary/20 group">
                        En savoir plus
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Right: Images -->
            <div
                class="relative max-sm:hidden animate-on-scroll opacity-0 translate-x-[50px] transition-all duration-1000">
                <div class="relative z-10 rounded-3xl overflow-hidden shadow-2xl">
                    <img src="{{ asset('assets/images/about1.png') }}" alt="Transport de carburant"
                        class="w-full h-auto transform hover:scale-105 transition-transform duration-700">
                </div>

                <div
                    class="absolute -bottom-10 -left-6 md:-left-12 z-20 w-1/2 rounded-3xl overflow-hidden border-8 border-white shadow-2xl hidden sm:block">
                    <img src="{{ asset('assets/images/about2.png') }}" alt="Industrie et Logistique"
                        class="w-full h-auto">
                </div>

                <!-- Decorative elements -->
                <div class="absolute -top-10 -right-10 w-32 h-32 bg-primary/10 rounded-full blur-3xl -z-10"></div>
                <div class="absolute -bottom-20 -right-10 w-64 h-64 bg-primary/5 rounded-full blur-3xl -z-10"></div>
            </div>

        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const observerOptions = {
            threshold: 0.2
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove('opacity-0', 'translate-x-[-50px]', 'translate-x-[50px]');
                    entry.target.classList.add('opacity-100', 'translate-x-0');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.animate-on-scroll').forEach(el => {
            observer.observe(el);
        });
    });
</script>