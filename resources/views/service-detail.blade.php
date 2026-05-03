@php
    $services = [
        'transport' => [
            'title' => 'Transport de carburant',
            'category' => 'Énergie & Logistique',
            'image' => 'assets/images/slider1.png',
            'icon' => 'bus',
            'description' => 'SureOwnCompany assure le transport sécurisé d’hydrocarbures à l’échelle nationale et internationale. Nous disposons d’une flotte de camions-citernes de pointe, géo-localisés en temps réel.',
            'features' => [
                'Sécurité Maximale' => 'Respect des normes ADR et protocoles de sécurité stricts.',
                'Traçabilité' => 'Suivi GPS en temps réel de chaque cargaison.',
                'Disponibilité' => 'Intervention 24/7 pour vos besoins urgents.',
                'Flexibilité' => 'Capacité adaptée de 10 000 à 45 000 litres.'
            ],
            'process' => [
                ['title' => 'Commande', 'desc' => 'Validation de votre demande et planification logistique.'],
                ['title' => 'Chargement', 'desc' => 'Chargement sécurisé en dépôt pétrolier certifié.'],
                ['title' => 'Acheminement', 'desc' => 'Transport sous haute surveillance et suivi satellite.'],
                ['title' => 'Livraison', 'desc' => 'Dépotage sécurisé et vérification de la qualité.']
            ]
        ],
        'logistique' => [
            'title' => 'Logistique internationale',
            'category' => 'Transport Transfrontalier',
            'image' => 'assets/images/slider2.png',
            'icon' => 'globe',
            'description' => 'Nous connectons vos marchés en Afrique Centrale, particulièrement vers la RCA et le Tchad. Notre expertise douanière garantit des passages fluides aux frontières.',
            'features' => [
                'Zone Afrique Centrale' => 'Expertise reconnue sur les corridors Douala-Bangui et Douala-N\'Djamena.',
                'Dédouanement' => 'Gestion complète des formalités administratives.',
                'Multimodal' => 'Solutions combinées pour une efficacité optimale.',
                'Entreposage' => 'Espaces de stockage sécurisés en zones stratégiques.'
            ],
            'process' => [
                ['title' => 'Analyse', 'desc' => 'Étude de l\'itinéraire et des contraintes douanières.'],
                ['title' => 'Groupage', 'desc' => 'Optimisation du chargement pour réduire les coûts.'],
                ['title' => 'Transit', 'desc' => 'Franchissement des frontières avec assistance dédiée.'],
                ['title' => 'Arrivée', 'desc' => 'Distribution finale à destination sécurisée.']
            ]
        ],
        'approvisionnement' => [
            'title' => 'Approvisionnement industriel',
            'category' => 'Solutions de Chantier',
            'image' => 'assets/images/become-partener.png',
            'icon' => 'package-check',
            'description' => 'Nous fournissons aux entreprises et aux chantiers les équipements et consommables nécessaires à leur bon fonctionnement, même dans les zones les plus reculées.',
            'features' => [
                'Équipements' => 'Vente et location de matériel industriel certifié.',
                'Consommables' => 'Fourniture régulière de lubrifiants et pièces d\'usure.',
                'Réactivité' => 'Livraison rapide directement sur votre site.',
                'Qualité' => 'Produits issus des meilleurs fabricants mondiaux.'
            ],
            'process' => [
                ['title' => 'Besoin', 'desc' => 'Audit de vos besoins spécifiques en équipement.'],
                ['title' => 'Sourcing', 'desc' => 'Sélection des meilleurs produits au meilleur prix.'],
                ['title' => 'Livraison', 'desc' => 'Logistique dédiée jusqu\'à votre site industriel.'],
                ['title' => 'Support', 'desc' => 'Accompagnement technique et service après-vente.']
            ]
        ],
        'securite' => [
            'title' => 'Équipements & sécurité (EPI)',
            'category' => 'Protection & Performance',
            'image' => 'assets/images/why-choose-us.png',
            'icon' => 'hard-hat',
            'description' => 'La sécurité au travail n’est pas négociable. Nous distribuons une gamme complète d’équipements de protection individuelle conformes aux standards internationaux.',
            'features' => [
                'Gamme Complète' => 'Casques, gants, chaussures, lunettes et protection auditive.',
                'Conformité' => 'Équipements certifiés CE et normes de sécurité spécifiques.',
                'Audit de Sécurité' => 'Conseil sur les EPI adaptés à vos risques métiers.',
                'Stock Permanent' => 'Disponibilité immédiate pour vos commandes groupées.'
            ],
            'process' => [
                ['title' => 'Évaluation', 'desc' => 'Analyse des risques de votre environnement de travail.'],
                ['title' => 'Sélection', 'desc' => 'Choix des EPI les plus adaptés à vos contraintes.'],
                ['title' => 'Échantillonnage', 'desc' => 'Test des produits pour validation par vos équipes.'],
                ['title' => 'Distribution', 'desc' => 'Livraison et formation à l\'utilisation correcte.']
            ]
        ]
    ];

    $service = $services[$slug] ?? $services['transport'];
@endphp

<x-Layout>
    <x-Services.DetailHero :title="$service['title']" :category="$service['category']" :image="$service['image']" />

    <section class="py-24 bg-white">
        <div class="container mx-auto px-6 md:px-10 max-w-7xl">
            <div class="flex flex-col lg:flex-row gap-16">
                <!-- Main Content -->
                <div class="lg:w-2/3 space-y-12">
                    <div class="space-y-6">
                        <h2 class="text-3xl font-black text-slate-900">Aperçu du Service</h2>
                        <p class="text-lg text-slate-600 leading-relaxed">
                            {{ $service['description'] }}
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        @foreach($service['features'] as $title => $desc)
                            <div
                                class="p-8 rounded-3xl bg-slate-50 border border-slate-100 group hover:bg-primary transition-all duration-500">
                                <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-white transition-colors">
                                    {{ $title }}</h3>
                                <p class="text-slate-600 group-hover:text-white/80 transition-colors leading-relaxed">
                                    {{ $desc }}
                                </p>
                            </div>
                        @endforeach
                    </div>

                    <!-- Process Section -->
                    <div class="space-y-12 pt-12">
                        <div class="text-center space-y-4">
                            <h2 class="text-3xl md:text-4xl font-black text-slate-900">Notre Processus</h2>
                            <p class="text-slate-500 max-w-xl mx-auto">Une méthodologie rigoureuse pour garantir une qualité de service constante et une sécurité totale.</p>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 relative">
                            @foreach($service['process'] as $index => $step)
                            <div class="group relative p-8 rounded-[2.5rem] bg-white border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-500 overflow-hidden">
                                <!-- Step Number -->
                                <div class="absolute -top-4 -right-4 text-8xl font-black text-slate-50 opacity-[0.03] group-hover:opacity-[0.08] group-hover:scale-110 transition-all duration-700 select-none">
                                    0{{ $index + 1 }}
                                </div>
                                
                                <div class="relative z-10 space-y-6">
                                    <div class="w-14 h-14 rounded-2xl bg-primary/10 text-primary flex items-center justify-center font-black text-xl group-hover:bg-primary group-hover:text-white transition-colors duration-500">
                                        {{ $index + 1 }}
                                    </div>
                                    <div class="space-y-2">
                                        <h4 class="text-2xl font-bold text-slate-900">{{ $step['title'] }}</h4>
                                        <p class="text-slate-600 leading-relaxed">{{ $step['desc'] }}</p>
                                    </div>
                                </div>
                                
                                <!-- Decorative element -->
                                <div class="absolute bottom-0 left-0 w-0 h-1.5 bg-primary group-hover:w-full transition-all duration-700"></div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>

                <!-- Sidebar -->
                <aside class="lg:w-1/3 space-y-8">
                    <!-- Navigation -->
                    <div class="bg-slate-900 p-8 rounded-3xl text-white">
                        <h3 class="text-xl font-bold mb-6">Nos autres services</h3>
                        <div class="space-y-4">
                            @foreach($services as $sSlug => $sData)
                                @if($sSlug != $slug)
                                    <a href="/nos-services/{{ $sSlug }}"
                                        class="flex items-center justify-between p-4 rounded-xl border border-white/10 hover:bg-primary hover:border-primary transition-all group">
                                        <span class="font-bold">{{ $sData['title'] }}</span>
                                        <x-lucide-chevron-right
                                            class="w-4 h-4 group-hover:translate-x-1 transition-transform" />
                                    </a>
                                @endif
                            @endforeach
                        </div>
                    </div>

                    <!-- Contact Card -->
                    <div class="bg-primary p-8 rounded-3xl text-white relative overflow-hidden">
                        <div class="relative z-10">
                            <h3 class="text-2xl font-bold mb-4">Besoin d'un devis ?</h3>
                            <p class="text-white/80 mb-6 text-sm">Nos experts sont à votre disposition pour étudier vos
                                besoins et vous proposer une solution sur mesure.</p>
                            <a href="/#contact"
                                class="inline-flex items-center justify-center w-full py-4 rounded-xl bg-white text-primary font-bold hover:bg-slate-900 hover:text-white transition-all">
                                Nous contacter
                            </a>
                        </div>
                        <x-lucide-help-circle class="absolute -bottom-10 -right-10 w-40 h-40 text-white/10" />
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <x-Homepage.Footer />
</x-Layout>