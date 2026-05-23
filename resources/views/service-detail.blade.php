@section('canonical', 'https://sureowncompany.com/nos-services')

@php
    $services = [
        'transport-et-logistiques-des-hydrocarbures' => [
            'title' => 'Transport & Logistique des hydrocarbures',
            'category' => 'Énergie & Logistique',
            'image' => 'assets/images/why-choose-us.png',
            'icon' => 'bus',
            'description' => 'Sure Own Company assure le transport sécurisé, national et transfrontalier des hydrocarbures. Nous disposons d’une flotte de camions-citernes de pointe, géo-localisés en temps réel.',

            'features' => [
                'Sécurité' => 'Respect strict des normes HSE/QHSE, ADR et protocoles de transport pétrolier.
                                                                                                                                                                                                                                                                                                                    ',
                'Traçabilité' => "Tracking en temps réel et coordination continue des opérations de livraison.",

                'Capacité' => 'Flotte adaptée au transport de 20 000 à 36 000 litres pour répondre aux besoins opérationnels.',

                'Couverture' => 'Transport et approvisionnement  des sites industriels et stations services.'
            ],
            'process' => [
                ['title' => 'Commande', 'desc' => 'Validation de votre demande et planification logistique.'],
                ['title' => 'Chargement', 'desc' => 'Chargement sécurisé en dépôt pétrolier certifié.'],
                ['title' => 'Acheminement', 'desc' => 'Transport sous haute surveillance et suivi satellite.'],
                ['title' => 'Livraison', 'desc' => 'Dépotage sécurisé et vérification de la qualité.']
            ]
        ],

        'fourniture-et-approvisionnement-general' => [
            'title' => 'Fourniture & Approvisionnement Général',
            'category' => 'Énergie & Logistique',
            'image' => 'assets/images/why-choose-us.png',
            'icon' => 'bus',
            'description' => 'Nous accompagnons les entreprises dans la fourniture de matériels et consommables nécessaires à leur fonctionnement .A savoir :
                                                                                                                                                                                                Fournitures et Consommables de bureau,
                                                                                                                                                                                                Matériel administratif,
                                                                                                                                                                                                Produits d’entretien,
                                                                                                                                                                                                Produits d’hygiène.',
            'features' => [
                'Approvisionnement' => 'Solutions adaptées aux besoins opérationnels des entreprises.',
                'Disponibilité' => "Fourniture rapide de matériels et consommables essentiels (Fourniture et consommables de bureau, matériel administratif, produits d'entretien, produits d'hygiène).",

                'Polyvalence' => ' Une offre multi-sectorielle pour différents environnements professionnels.',

                'Réactivité' => 'Approvisionnement flexible et à la demande.'
            ],
            'process' => [
                ['title' => 'Besoin', 'desc' => 'Audit de vos besoins spécifiques en équipement.'],
                ['title' => 'Sourcing', 'desc' => 'Sélection des meilleurs produits au meilleur prix.'],
                ['title' => 'Livraison', 'desc' => 'Logistique dédiée jusqu\'à votre site industriel.'],
                ['title' => 'Support', 'desc' => 'Accompagnement technique et service après-vente.']
            ]
        ],
        'equipements-de-protection-et-securite' => [
            'title' => 'Équipements de Protection & Sécurité',
            'category' => 'Protection & Performance',
            'image' => 'assets/images/security.jpg',

            'icon' => 'package-check',
            'description' => 'Sure Own Company fournit des équipements de protection individuelle adaptés aux environnements industriels, logistiques ,techniques
                                                                                                                                                                        et conformes aux exigences HSE.',
            'features' => [
                'Protection' => 'Équipements fiables pour vos manutentions industrielles et techniques  (Casques et chaussures de  sécurité,gants de protection, gilets réfléchissants, combinaisons de travail, lunettes et protections spécialisées).',
                'Qualité' => 'Conformité aux exigences et standards HSE.',
                'Fiabilité' => 'Des équipements conçus pour des opérations professionnelles exigeantes.',
                'Prévention' => 'Réduction des risques pour la sécurité des équipes sur le terrain.'
            ],
            'process' => [
                ['title' => 'Besoin', 'desc' => 'Audit de vos besoins spécifiques en équipement.'],
                ['title' => 'Sourcing', 'desc' => 'Sélection des meilleurs produits au meilleur prix.'],
                ['title' => 'Livraison', 'desc' => 'Logistique dédiée jusqu\'à votre site industriel.'],
                ['title' => 'Support', 'desc' => 'Accompagnement technique et service après-vente.']
            ]
        ],
        'fourniture-industrielle-et-piece-technique' => [
            'title' => 'Fourniture Industrielle & Pièces Techniques',
            'category' => 'Protection & Performance',
            'image' => 'assets/images/industrie.jpg',
            'icon' => 'hard-hat',
            'description' => 'Nous proposons des solutions d’approvisionnement en pièces et équipements industriels conformément au cahier de charge et références spécifiques des équipements. 

                                                                                                                                        ',
            'features' => [
                'Approvisionnement technique' => 'Solutions adaptées aux besoins industriels spécifiques.',
                'Conformité' => 'Fourniture selon cahier de charge et références équipements.',
                'Maintenance industrielle' => 'Pièces et accessoires dédiés à la continuité des opérations : Pièces industrielles, équipements techniques, accessoires mécaniques, pièces pour maintenance.',
                'Fiabilité' => 'Des équipements techniques adaptés aux exigences du terrain.'
            ],
            'process' => [
                ['title' => 'Besoin', 'desc' => 'Audit de vos besoins spécifiques en équipement.'],
                ['title' => 'Sourcing', 'desc' => 'Sélection des meilleurs produits au meilleur prix.'],
                ['title' => 'Livraison', 'desc' => 'Logistique dédiée jusqu\'à votre site industriel.'],
                ['title' => 'Support', 'desc' => 'Accompagnement technique et service après-vente.']
            ]
        ]
    ];

    $service = $services[$slug] ?? $services['transport-et-logistiques-en-hydrocarbure'];

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
                                    {{ $title }}
                                </h3>
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
                            <p class="text-slate-500 max-w-xl mx-auto">Une méthodologie rigoureuse pour garantir une
                                qualité de service constante et une sécurité totale.</p>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 relative">
                            @foreach($service['process'] as $index => $step)
                                <div
                                    class="group relative p-8 rounded-[2.5rem] bg-white border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-500 overflow-hidden">
                                    <!-- Step Number -->
                                    <div
                                        class="absolute -top-4 -right-4 text-8xl font-black text-slate-50 opacity-[0.03] group-hover:opacity-[0.08] group-hover:scale-110 transition-all duration-700 select-none">
                                        0{{ $index + 1 }}
                                    </div>
                                    <div class="relative z-10 space-y-6">
                                        <div
                                            class="w-14 h-14 rounded-2xl bg-primary/10 text-primary flex items-center justify-center font-black text-xl group-hover:bg-primary group-hover:text-white transition-colors duration-500">
                                            {{ $index + 1 }}
                                        </div>
                                        <div class="space-y-2">
                                            <h4 class="text-2xl font-bold text-slate-900">{{ $step['title'] }}</h4>
                                            <p class="text-slate-600 leading-relaxed">{{ $step['desc'] }}</p>
                                        </div>
                                    </div>
                                    <!-- Decorative element -->
                                    <div
                                        class="absolute bottom-0 left-0 w-0 h-1.5 bg-primary group-hover:w-full transition-all duration-700">
                                    </div>
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
                            <a href="/passer-une-commande"
                                class="inline-flex items-center justify-center w-full py-4 rounded-xl bg-white text-primary font-bold hover:bg-slate-900 hover:text-white transition-all">
                                Demander un devis
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