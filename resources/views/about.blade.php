@section('canonical', 'https://sureowncompany.com/a-propos-de-nous')
<x-Layout title="SureOwnCompany | A propos de nous" image="{{ asset('assets/images/about1.png') }}" description="Fondée avec la vision de révolutionner le transport de carburant et la logistique industrielle,
                        SureOwnCompany s'est imposée comme un partenaire de confiance pour les entreprises exigeantes."
    keywords="transport carburant sécurisé,A propos de nous, logistique industrielle de pointe, livraison hydrocarbures B2B, flotte camions citernes, approvisionnement industriel traçable, expert logistique SureOwnCompany, transport matières critiques">
    <x-About.Hero />

    <!-- Notre Histoire -->
    <section class="py-24 bg-white text-slate-900">
        <div class="container mx-auto px-6 md:px-10 max-w-7xl">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="space-y-8">
                    <div
                        class="inline-block px-4 py-2 bg-primary/10 text-primary font-bold rounded-lg tracking-wider uppercase text-sm">
                        Notre Histoire
                    </div>
                    <h2 class="text-4xl md:text-5xl font-extrabold leading-tight">
                        Notre engagement au service de vos besoins
                    </h2>
                    <p class="text-lg text-slate-600 leading-relaxed">
                        Fondée avec la vision de devenir la reference dans le transport de carburant générale et
                        industrielle,
                        SureOwnCompany s'impose comme un partenaire de confiance pour les entreprises exigeantes.
                        Nous comprenons que dans notre secteur, la fiabilité est une nécessité
                        absolue.
                    </p>
                    <p class="text-lg text-slate-600 leading-relaxed">
                        Grâce à notre flotte moderne et des technologies de pointe, nous vous garantissons une sécurité
                        maximale et une traçabilité totale à chaque étape de nos opérations.
                    </p>

                </div>
                <div class="relative">
                    <div class="rounded-3xl overflow-hidden shadow-2xl">
                        <img src="{{ asset('assets/images/about2.png') }}" alt="Equipe SureOwnCompany"
                            class="w-full h-full object-cover">
                    </div>
                    <!-- Decorative element -->
                    <div class="absolute -bottom-10 -right-10 w-48 h-48 bg-primary/10 rounded-full blur-3xl -z-10">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Dynamic Slogan Section -->
    <section class="py-20 bg-transparent overflow-hidden">
        <div class="container mx-auto px-6 text-center">
            <div class="inline-block">
                <h2 class="text-3xl md:text-6xl font-black text-slate-300 tracking-tighter">
                    <span class="text-primary italic">"</span>
                    <span id="typewriter" class="relative">
                        <!-- The text will be typed here -->
                    </span>
                    <span class="text-primary italic">"</span>
                </h2>
                <div class="w-24 h-1.5 bg-primary mx-auto mt-6 rounded-full opacity-50"></div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const text = "Votre Confiance, Notre Engagement";
            const element = document.getElementById('typewriter');
            let index = 0;

            function type() {
                if (index < text.length) {
                    element.innerHTML += text.charAt(index);
                    index++;
                    setTimeout(type, 100);
                }
            }

            // Start animation when section is in view
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        type();
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.5 });

            observer.observe(element);
        });
    </script>

    <!-- Mission & Vision -->
    <section class="py-24 bg-slate-50">
        <div class="container mx-auto px-6 md:px-10 max-w-7xl">
            <div class="text-center mb-16 space-y-4">
                <h2 class="text-3xl md:text-5xl font-black text-slate-900">Nos Fondements</h2>
                <p class="text-slate-500 max-w-2xl mx-auto text-lg">
                    Ce qui nous guide au quotidien pour offrir l'excellence à nos partenaires.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <!-- Mission -->
                <div
                    class="bg-white p-10 rounded-3xl shadow-sm border border-slate-100 hover:shadow-xl transition-shadow group">
                    <div
                        class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mb-8 group-hover:bg-primary transition-colors">
                        <svg class="w-8 h-8 text-primary group-hover:text-white" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-4">Notre Mission</h3>
                    <p class="text-slate-600 leading-relaxed">
                        Assurer un approvisionnement en énergie et équipements fluide et sécurisés pour soutenir la
                        croissance industrielle et économique de nos clients
                    </p>
                </div>

                <!-- Vision -->
                <div
                    class="bg-white p-10 rounded-3xl shadow-sm border border-slate-100 hover:shadow-xl transition-shadow group">
                    <div
                        class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mb-8 group-hover:bg-primary transition-colors">
                        <svg class="w-8 h-8 text-primary group-hover:text-white" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-4">Notre Vision</h3>
                    <p class="text-slate-600 leading-relaxed">
                        Devenir la référence de sérieux, d’efficacité et de constance dans l'exécution de nos
                        opérations.
                    </p>
                </div>

                <!-- Valeurs -->
                <div
                    class="bg-white p-10 rounded-3xl shadow-sm border border-slate-100 hover:shadow-xl transition-shadow group">
                    <div
                        class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mb-8 group-hover:bg-primary transition-colors">
                        <svg class="w-8 h-8 text-primary group-hover:text-white" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-4">Nos Valeurs</h3>
                    <p class="text-slate-600 leading-relaxed">
                        Ecoute active, fiabilité, éfficacité,engagement envers l'excellence sont les piliers de chacune
                        de nos actions.
                    </p>
                </div>
            </div>
        </div>
    </section>




    <x-Homepage.Footer />
</x-Layout>