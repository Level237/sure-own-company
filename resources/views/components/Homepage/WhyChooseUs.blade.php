<section class="py-24 bg-slate-200 relative overflow-hidden" id="why-choose-us">
    <!-- Subtle Background Pattern -->
    <div class="absolute inset-0 opacity-[0.03] pointer-events-none">
        <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
            <pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse">
                <path d="M 10 0 L 0 0 0 10" fill="none" stroke="currentColor" stroke-width="0.5" />
            </pattern>
            <rect width="100" height="100" fill="url(#grid)" />
        </svg>
    </div>

    <div class="container mx-auto px-6 md:px-10 max-w-7xl relative z-10">
        <!-- Header -->
        <div
            class="text-center max-w-3xl mx-auto mb-20 animate-on-scroll opacity-0 translate-y-10 transition-all duration-1000">
            <h2 class="text-4xl md:text-5xl font-extrabold text-slate-900 mb-6">
                Pourquoi nous faire confiance
            </h2>
            <p class="text-lg text-slate-600 leading-relaxed">
                Nous nous engageons à offrir des services fiables, sécurisés et adaptés aux exigences de votre activité.
            </p>
        </div>

        <!-- Main Content Layout -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

            <!-- Left Pillars -->
            <div class="lg:col-span-4 space-y-12">
                <!-- Pillar 1: Sécurité -->
                <div
                    class="flex flex-col md:flex-row lg:flex-col items-start lg:items-end text-left lg:text-right gap-6 group animate-on-scroll opacity-0 translate-x-[-50px] transition-all duration-1000 delay-100">
                    <div
                        class="w-14 h-14 flex items-center justify-center rounded-2xl bg-white shadow-lg text-primary group-hover:bg-primary group-hover:text-white transition-all duration-500 order-1">
                        <x-lucide-shield-check class="w-10 h-10" />
                    </div>
                    <div class="space-y-2 order-2 lg:order-1">
                        <h3 class="text-2xl font-bold text-slate-900">Sécurité des opérations</h3>
                        <p class="text-slate-600 leading-relaxed">Respect strict des normes de transport et de
                            manipulation du carburant.</p>
                    </div>
                </div>

                <!-- Pillar 2: Réactivité -->
                <div
                    class="flex flex-col md:flex-row lg:flex-col items-start lg:items-end text-left lg:text-right gap-6 group animate-on-scroll opacity-0 translate-x-[-50px] transition-all duration-1000 delay-200">
                    <div
                        class="w-14 h-14 flex items-center justify-center rounded-2xl bg-white shadow-lg text-primary group-hover:bg-primary group-hover:text-white transition-all duration-500 order-1">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <div class="space-y-2 order-2 lg:order-1">
                        <h3 class="text-2xl font-bold text-slate-900">Réactivité terrain</h3>
                        <p class="text-slate-600 leading-relaxed">Intervention rapide et adaptation aux urgences
                            opérationnelles.</p>
                    </div>
                </div>
            </div>

            <!-- Central Image -->
            <div class="lg:col-span-4 relative group animate-on-scroll opacity-0 scale-90 transition-all duration-1000">

                <div
                    class="relative rounded-[2.5rem] overflow-hidden shadow-2xl border-8 border-white transform  transition-transform duration-700">
                    <img src="{{ asset('assets/images/why-choose-us.png') }}" alt="Pourquoi nous choisir"
                        class="w-96 h-96 object-cover">
                </div>
                <!-- Decorative elements -->
                <div class="absolute -top-6 -right-6 w-20 h-20 bg-primary/10 rounded-full blur-xl animate-pulse"></div>
                <div
                    class="absolute -bottom-6 -left-6 w-24 h-24 bg-primary/10 rounded-full blur-xl animate-pulse delay-700">
                </div>
            </div>

            <!-- Right Pillars -->
            <div class="lg:col-span-4 space-y-12">
                <!-- Pillar 3: Fiabilité -->
                <div
                    class="flex flex-col md:flex-row lg:flex-col items-start gap-6 group animate-on-scroll opacity-0 translate-x-[50px] transition-all duration-1000 delay-300">
                    <div
                        class="w-14 h-14 flex items-center justify-center rounded-2xl bg-white shadow-lg text-primary group-hover:bg-primary group-hover:text-white transition-all duration-500">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
                        </svg>
                    </div>
                    <div class="space-y-2">
                        <h3 class="text-2xl font-bold text-slate-900">Fiabilité des livraisons</h3>
                        <p class="text-slate-600 leading-relaxed">Délais respectés et suivi rigoureux de chaque mission.
                        </p>
                    </div>
                </div>

                <!-- Pillar 4: Engagement -->
                <div
                    class="flex flex-col md:flex-row lg:flex-col items-start gap-6 group animate-on-scroll opacity-0 translate-x-[50px] transition-all duration-1000 delay-400">
                    <div
                        class="w-14 h-14 flex items-center justify-center rounded-2xl bg-white shadow-lg text-primary group-hover:bg-primary group-hover:text-white transition-all duration-500">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5">
                            </path>
                        </svg>
                    </div>
                    <div class="space-y-2">
                        <h3 class="text-2xl font-bold text-slate-900">Engagement client</h3>
                        <p class="text-slate-600 leading-relaxed">Une équipe à l’écoute, orientée résultats et
                            satisfaction.</p>
                    </div>
                </div>
            </div>

        </div>

        <!-- CTA Button -->
        <div
            class="mt-12  text-center animate-on-scroll opacity-0 translate-y-10 transition-all duration-1000 delay-500">
            <a href="#contact"
                class="inline-flex hover:bg-white hover:text-primary items-center gap-3 px-10 py-5 rounded-full  text-white font-bold text-lg bg-primary transition-all duration-300 hover:shadow-2xl hover:shadow-primary/20 group">
                Contactez-nous
                <svg class="w-6 h-6 group-hover:translate-x-2 transition-transform duration-300" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3">
                    </path>
                </svg>
            </a>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const observerOptions = {
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove('opacity-0', 'translate-y-10', 'translate-x-[-50px]', 'translate-x-[50px]', 'scale-90');
                    entry.target.classList.add('opacity-100', 'translate-y-0', 'translate-x-0', 'scale-100');
                }
            });
        }, observerOptions);

        document.querySelectorAll('#why-choose-us .animate-on-scroll').forEach(el => {
            observer.observe(el);
        });
    });
</script>