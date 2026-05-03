@php
    $services = [
        [
            'slug' => 'transport',
            'title' => 'Transport de carburant',
            'desc' => 'Transport sécurisé d’hydrocarbures à l’échelle nationale et internationale.',
            'icon' => 'bus',
            'image' => 'assets/images/slider1.png',
            'color' => 'indigo'
        ],
        [
            'slug' => 'logistique',
            'title' => 'Logistique internationale',
            'desc' => 'Gestion des flux vers la RCA, le Tchad et autres zones enclavées.',
            'icon' => 'globe',
            'image' => 'assets/images/slider2.png',
            'color' => 'blue'
        ],
        [
            'slug' => 'approvisionnement',
            'title' => 'Approvisionnement industriel',
            'desc' => 'Fourniture d’équipements et consommables pour chantiers et usines.',
            'icon' => 'package-check',
            'image' => 'assets/images/become-partener.png',
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

<x-Layout :headerWhite="true">
    <x-Services.Hero />

    <section class="py-24 bg-white overflow-hidden">
        <div class="container mx-auto px-6 md:px-10 max-w-7xl">
            <div class="text-center mb-20 space-y-4">
                <h2 class="text-4xl md:text-6xl font-black text-slate-900 leading-tight">
                    Des solutions logistiques <br> <span class="text-primary underline decoration-primary/30 underline-offset-8">sans compromis</span>
                </h2>
                <p class="text-slate-500 max-w-2xl mx-auto text-lg">
                    Découvrez l'étendue de nos services conçus pour répondre aux défis les plus complexes de l'industrie énergétique.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                @foreach($services as $service)
                <div class="group relative bg-white rounded-[2rem] overflow-hidden border border-slate-100 shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-700">
                    <!-- Image and Overlay -->
                    <div class="relative h-72 overflow-hidden">
                        <img src="{{ asset($service['image']) }}" alt="{{ $service['title'] }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-1000">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent"></div>
                        
                        <!-- Floating Icon -->
                        <div class="absolute top-6 left-6 w-14 h-14 bg-white/10 backdrop-blur-md rounded-2xl flex items-center justify-center text-white border border-white/20 group-hover:bg-primary group-hover:border-primary transition-all duration-500">
                            @php $iconClass = "x-lucide-" . $service['icon']; @endphp
                            <{{ $iconClass }} class="w-8 h-8" />
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
                            <a href="/nos-services/{{ $service['slug'] }}" class="inline-flex items-center gap-3 text-slate-900 font-bold hover:text-primary transition-colors">
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

    <!-- Why Us Short -->
    <section class="py-24 bg-slate-900 text-white overflow-hidden relative">
        <div class="container mx-auto px-6 md:px-10 max-w-7xl relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-16">
                <div class="lg:col-span-1 space-y-6">
                    <h2 class="text-4xl font-black">Pourquoi nous choisir ?</h2>
                    <p class="text-white/60">Une expertise de terrain couplée à une gestion logistique de pointe pour des résultats garantis.</p>
                </div>
                <div class="lg:col-span-2 grid grid-cols-1 md:grid-cols-2 gap-10">
                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-12 h-12 bg-primary/20 rounded-xl flex items-center justify-center text-primary">
                            <x-lucide-shield-check class="w-6 h-6" />
                        </div>
                        <div class="space-y-2">
                            <h4 class="text-xl font-bold">Sécurité Garantie</h4>
                            <p class="text-white/50 text-sm">Nous respectons les protocoles les plus stricts du secteur pétrolier.</p>
                        </div>
                    </div>
                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-12 h-12 bg-primary/20 rounded-xl flex items-center justify-center text-primary">
                            <x-lucide-zap class="w-6 h-6" />
                        </div>
                        <div class="space-y-2">
                            <h4 class="text-xl font-bold">Réactivité Maximale</h4>
                            <p class="text-white/50 text-sm">Une infrastructure agile pour répondre à vos urgences 24/7.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-primary/10 rounded-full blur-[100px]"></div>
    </section>

    <x-Homepage.BecomePartner />

    <x-Homepage.Footer />
</x-Layout>