@php
    $services = [
        [
            'slug' => 'transport',
            'title' => 'Transport de carburant',
            'desc' => 'Transport sécurisé d’hydrocarbures à l’échelle nationale et internationale.',
            'icon' => 'bus',
            'image' => 'assets/images/why-choose-us.png',
            'color' => 'indigo'
        ],
        [
            'slug' => 'logistique',
            'title' => 'Logistique internationale',
            'desc' => 'Gestion des flux vers la RCA, le Tchad et autres zones enclavées.',
            'icon' => 'globe',
            'image' => 'assets/images/slider1.png',
            'color' => 'blue'
        ],
        [
            'slug' => 'approvisionnement',
            'title' => 'Approvisionnement industriel',
            'desc' => 'Fourniture  et consommables pour vos opérations.',
            'icon' => 'package-check',
            'image' => 'assets/images/img.png',
            'color' => 'orange'
        ],
        [
            'slug' => 'securite',
            'title' => 'Équipements & sécurité (EPI)',
            'desc' => 'Distribution de matériels de protection individuelle conformes aux normes.',
            'icon' => 'hard-hat',
            'image' => 'assets/images/why-choose-us.png',
            'color' => 'teal'
        ]
    ];
@endphp

<x-Layout title="SureOwnCompany | Nos Services" image="{{ asset('assets/images/slider2.png') }}" description="Découvrez l'étendue de nos services conçus pour répondre aux défis les plus complexes de l'industrie
                    énergétique."
    keywords="transport carburant sécurisé,Services, logistique industrielle de pointe, livraison hydrocarbures B2B, flotte camions citernes, approvisionnement industriel traçable, expert logistique SureOwnCompany, transport matières critiques">
    <x-Services.Hero />

    <section class="py-24 bg-white overflow-hidden">
        <div class="container mx-auto px-6 md:px-10 max-w-7xl">
            <div class="text-center mb-20 space-y-4">
                <h2 class="text-4xl md:text-6xl font-black text-slate-900 leading-tight">
                    Des services adaptés à vos <br> <span
                        class="text-primary underline decoration-primary/30 underline-offset-8">attentes opérationnelle
                    </span>
                </h2>
                <p class="text-slate-500 max-w-2xl mx-auto text-lg">
                    Découvrez l'étendue de nos services conçus pour répondre aux défis les plus complexes de l'industrie
                    énergétique.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                @foreach($services as $service)
                    <div
                        class="group relative bg-white rounded-[2rem] overflow-hidden border border-slate-100 shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-700">
                        <!-- Image and Overlay -->
                        <div class="relative h-72 overflow-hidden">
                            <img src="{{ asset($service['image']) }}" alt="{{ $service['title'] }}"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent">
                            </div>

                            <!-- Floating Icon -->
                            <div
                                class="absolute top-6 left-6 w-14 h-14 bg-white/10 backdrop-blur-md rounded-2xl flex items-center justify-center text-white border border-white/20 group-hover:bg-primary group-hover:border-primary transition-all duration-500">
                                @php
                                    $iconName = $service['icon'];
                                    $iconComponent = 'lucide-' . $iconName;
                                @endphp

                                <x-dynamic-component :component="$iconComponent" class="w-6 h-6" />

                            </div>
                        </div>

                        <!-- Content -->
                        <div class="p-10 space-y-6">
                            <h3 class="text-2xl font-black text-slate-900 group-hover:text-primary transition-colors">
                                {{ $service['title'] }}
                            </h3>
                            <p class="text-slate-500 leading-relaxed text-lg line-clamp-2">
                                {{ $service['desc'] }}
                            </p>

                            <div class="pt-4 flex items-center justify-between">
                                <a href="/nos-services/{{ $service['slug'] }}"
                                    class="inline-flex items-center gap-3 text-slate-900 font-bold hover:text-primary transition-colors">
                                    En savoir plus
                                    <x-lucide-arrow-right class="w-5 h-5 group-hover:translate-x-2 transition-transform" />
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Why Us & CTA Section -->
    <section class="py-24 bg-slate-900 text-white overflow-hidden relative">
        <div class="container mx-auto px-6 md:px-10 max-w-7xl relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="space-y-12">
                    <div class="space-y-6">
                        <h2 class="text-4xl max-sm:text-3xl md:text-5xl font-black leading-tight">
                            Votre succès mérite une <br class="max-sm:hidden">
                            <span class="text-primary max-sm:text-3xl">logistique d'excellence</span>
                        </h2>
                        <p class="text-white/60 text-lg max-w-xl">
                            Une expertise de terrain couplée à une gestion logistique de pointe pour des résultats
                            garantis et une tranquillité d'esprit totale.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                        <div class="flex gap-6">
                            <div
                                class="flex-shrink-0 w-12 h-12 bg-primary/20 rounded-xl flex items-center justify-center text-primary">
                                <x-lucide-shield-check class="w-6 h-6" />
                            </div>
                            <div class="space-y-2">
                                <h4 class="text-xl font-bold">Sécurité</h4>
                                <p class="text-white/50 text-sm">Protocoles stricts et conformité ADR.</p>
                            </div>
                        </div>
                        <div class="flex gap-6">
                            <div
                                class="flex-shrink-0 w-12 h-12 bg-primary/20 rounded-xl flex items-center justify-center text-primary">
                                <x-lucide-zap class="w-6 h-6" />
                            </div>
                            <div class="space-y-2">
                                <h4 class="text-xl font-bold">Réactivité</h4>
                                <p class="text-white/50 text-sm">Infrastructure agile 24/7.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div
                        class="bg-white/5 backdrop-blur-sm p-10 md:p-16 rounded-[3rem] border border-white/10 text-center space-y-8 relative overflow-hidden group">
                        <div class="relative z-10 space-y-4">
                            <h3 class="text-3xl max-sm:text-2xl font-black">Prêt à démarrer ?</h3>
                            <p class="text-white/60 max-sm:text-sm">Discutez de votre projet avec nos experts et obtenez
                                une solution
                                personnalisée.</p>
                        </div>
                        <div class="relative z-10 pt-4">
                            <a href="/passer-une-commande"
                                class="inline-flex max-sm:text-sm items-center justify-center px-10 py-5 rounded-2xl bg-primary text-white font-black text-lg hover:bg-white hover:text-primary transition-all duration-300 shadow-xl shadow-primary/20">
                                Demander un devis
                                <x-lucide-arrow-right
                                    class="ml-3 w-6 h-6 group-hover:translate-x-2 transition-transform" />
                            </a>
                        </div>
                        <!-- Decorative background element -->

                    </div>
                </div>
            </div>
        </div>
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-primary/10 rounded-full blur-[100px]"></div>
        <div class="absolute -bottom-24 -left-24 w-72 h-72 bg-primary/5 rounded-full blur-[80px]"></div>
    </section>


    <x-Homepage.BecomePartner />

    <x-Homepage.Footer />
</x-Layout>