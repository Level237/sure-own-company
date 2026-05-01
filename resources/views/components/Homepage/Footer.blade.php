<footer class="bg-primary text-white pt-20 pb-10 overflow-hidden">
    <div class="container mx-auto px-6 md:px-10 max-w-7xl">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-16">

            <!-- Column 1: Brand & Social -->
            <div class="space-y-8 animate-on-scroll opacity-0 translate-y-10 transition-all duration-700">
                <a href="/" class="inline-block">
                    <img src="{{ asset('assets/images/white-logo.png') }}" alt="SureOwn Logo" class="h-16 w-auto">
                </a>
                <p class="text-white/80 leading-relaxed text-lg">
                    Votre partenaire de confiance en logistique et approvisionnement industriel au Cameroun et à
                    l'international.
                </p>
                <div class="flex items-center gap-4 pt-4">
                    <a href="#"
                        class="w-10 h-10 flex items-center justify-center rounded-full bg-white/10 hover:bg-white hover:text-primary transition-all duration-300">
                        <x-lucide-linkedin class="w-5 h-5" />
                    </a>
                    <a href="#"
                        class="w-10 h-10 flex items-center justify-center rounded-full bg-white/10 hover:bg-white hover:text-primary transition-all duration-300">
                        <x-lucide-facebook class="w-5 h-5" />
                    </a>
                    <a href="#"
                        class="w-10 h-10 flex items-center justify-center rounded-full bg-white/10 hover:bg-white hover:text-primary transition-all duration-300">
                        <x-lucide-twitter class="w-5 h-5" />
                    </a>
                </div>
            </div>

            <!-- Column 2: Navigation -->
            <div class="space-y-8 animate-on-scroll opacity-0 translate-y-10 transition-all duration-700 delay-100">
                <h3 class="text-xl font-bold uppercase tracking-wider">Navigation</h3>
                <nav class="flex flex-col space-y-4">
                    <a href="#about"
                        class="text-white/70 hover:text-white transition-colors text-lg flex items-center gap-2 group">
                        <span class="w-0 h-0.5 bg-white transition-all duration-300 group-hover:w-4"></span>
                        A propos de nous
                    </a>
                    <a href="#services"
                        class="text-white/70 hover:text-white transition-colors text-lg flex items-center gap-2 group">
                        <span class="w-0 h-0.5 bg-white transition-all duration-300 group-hover:w-4"></span>
                        Nos services
                    </a>
                    <a href="#why-choose-us"
                        class="text-white/70 hover:text-white transition-colors text-lg flex items-center gap-2 group">
                        <span class="w-0 h-0.5 bg-white transition-all duration-300 group-hover:w-4"></span>
                        Contactez-nous
                    </a>
                    <a href="#partners"
                        class="text-white/70 hover:text-white transition-colors text-lg flex items-center gap-2 group">
                        <span class="w-0 h-0.5 bg-white transition-all duration-300 group-hover:w-4"></span>
                        Devenir Partenaire
                    </a>
                </nav>
            </div>

            <!-- Column 3: Coordonnées -->
            <div class="space-y-8 animate-on-scroll opacity-0 translate-y-10 transition-all duration-700 delay-200">
                <h3 class="text-xl font-bold uppercase tracking-wider">Nos Coordonn&eacute;es</h3>
                <ul class="space-y-6">
                    <li class="flex items-start gap-4">
                        <div class="w-10 h-10 flex-shrink-0 flex items-center justify-center rounded-xl bg-white/10">
                            <x-lucide-phone class="w-5 h-5" />
                        </div>
                        <div>
                            <span
                                class="block text-white/60 text-sm uppercase font-bold tracking-tight mb-1">T&eacute;l&eacute;phone</span>
                            <a href="tel:+237670999916" class="text-lg font-bold hover:underline">+237 670999916</a>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <div class="w-10 h-10 flex-shrink-0 flex items-center justify-center rounded-xl bg-white/10">
                            <x-lucide-mail class="w-5 h-5" />
                        </div>
                        <div>
                            <span
                                class="block text-white/60 text-sm uppercase font-bold tracking-tight mb-1">Email</span>
                            <a href="mailto:DIRECTION@SUREOWNCOMPANY.COM"
                                class="text-sm font-bold hover:underline break-all uppercase">DIRECTION@SUREOWNCOMPANY.COM</a>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <div class="w-10 h-10 flex-shrink-0 flex items-center justify-center rounded-xl bg-white/10">
                            <x-lucide-file-text class="w-5 h-5" />
                        </div>
                        <div>
                            <span
                                class="block text-white/60 text-sm uppercase font-bold tracking-tight mb-1">N&deg;RCCM</span>
                            <span class="text-lg font-bold uppercase tracking-tighter">RC/DLA/2023/B/5501</span>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Column 4: Bureaux & Horaires -->
            <div class="space-y-8 animate-on-scroll opacity-0 translate-y-10 transition-all duration-700 delay-300">
                <h3 class="text-xl font-bold uppercase tracking-wider">Bureaux & Horaires</h3>
                <ul class="space-y-6">
                    <li class="flex items-start gap-4">
                        <div class="w-10 h-10 flex-shrink-0 flex items-center justify-center rounded-xl bg-white/10">
                            <x-lucide-map-pin class="w-5 h-5" />
                        </div>
                        <div>
                            <span
                                class="block text-white/60 text-sm uppercase font-bold tracking-tight mb-1">Localisation</span>
                            <address class="not-italic text-sm font-bold uppercase">
                                Ndogbong, Douala,<br>Cameroun
                            </address>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <div class="w-10 h-10 flex-shrink-0 flex items-center justify-center rounded-xl bg-white/10">
                            <x-lucide-clock class="w-5 h-5" />
                        </div>
                        <div>
                            <span
                                class="block text-white/60 text-sm uppercase font-bold tracking-tight mb-1">Horaires</span>
                            <p class="text-white/90 text-sm font-medium mb-2 italic">
                                Nous recevons <span
                                    class="font-bold underline uppercase tracking-tighter text-white">uniquement sur
                                    rendez-vous</span>
                            </p>
                            <span class="text-lg font-bold uppercase tracking-tighter italic">DU LUNDI AU VENDREDI : 9H
                                - 15H</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Divider -->
        <div
            class="mt-20 pt-10 border-t border-white/10 flex flex-col md:flex-row justify-between items-center gap-6 text-white/50 text-sm">
            <p>&copy; {{ date('Y') }} SureOwn Company. Tous droits r&eacute;serv&eacute;s.</p>
            <div class="flex gap-8">
                <a href="#" class="hover:text-white transition-colors uppercase font-bold tracking-tighter">Mentions
                    l&eacute;gales</a>
                <a href="#"
                    class="hover:text-white transition-colors uppercase font-bold tracking-tighter">Confidentialit&eacute;</a>
                <a href="#" class="hover:text-white transition-colors uppercase font-bold tracking-tighter">Cookies</a>
            </div>
        </div>
    </div>
</footer>

<script>
    document.addEventListener('DOMContentLoaded', () => {
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

        document.querySelectorAll('footer .animate-on-scroll').forEach(el => {
            observer.observe(el);
        });
    });
</script>