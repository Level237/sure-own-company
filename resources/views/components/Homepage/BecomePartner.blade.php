<section class="py-24 max-sm:py-12 bg-white overflow-hidden" id="become-partner">
    <div class="container mx-auto px-6 md:px-10 max-w-7xl">
        <!-- Header Section -->
        <div
            class="text-center max-w-3xl mx-auto mb-16 animate-on-scroll opacity-0 translate-y-10 transition-all duration-1000">
            <h2 class="text-4xl md:text-5xl font-extrabold leading-tight text-slate-900 mb-6">
                Devenez notre partenaire de confiance
            </h2>
            <p class="text-lg text-slate-600 leading-relaxed">
                Rejoignez un réseau de partenaires engagés et bénéficiez d’opportunités de collaboration durables dans
                le transport de carburant et l’approvisionnement industriel. Nous construisons des relations solides
                basées sur la fiabilité, la performance et la transparence.
            </p>
        </div>
    </div>

    <!-- Infinite Scroll Gallery -->
    <div
        class="relative w-full overflow-hidden py-10 group/gallery animate-on-scroll opacity-0 translate-y-10 transition-all duration-1000 delay-300">
        <!-- Overlay gradients for smooth fade -->


        <div class="flex whitespace-nowrap">
            <!-- First set of images -->
            <div
                class="flex animate-infinite-scroll gap-8 pr-8 group-hover/gallery:[animation-play-state:paused] md:group-hover/gallery:[animation-duration:80s]">
                @php
                    $images = [
                        'assets/images/about1.png',
                        'assets/images/about2.png',
                        'assets/images/become-partener.png',
                        'assets/images/slider1.png',
                        'assets/images/slider2.png',
                        'assets/images/img.png'
                    ];
                @endphp
                @foreach(array_merge($images, $images) as $image)
                    <div
                        class="flex-none w-[300px] md:w-[450px] aspect-[16/10] rounded-3xl overflow-hidden shadow-lg border-4 border-slate-50 transition-all duration-500 hover:scale-105 hover:shadow-2xl hover:border-primary/20">
                        <img src="{{ asset($image) }}" alt="SureOwn Presentation"
                            class="w-full h-full object-cover grayscale-[20%] hover:grayscale-0 transition-all duration-500">
                    </div>
                @endforeach
            </div>
            <!-- Second set for seamless loop (handled by array_merge above if moving 100%, but here we use a simpler double-flex approach) -->
            <div class="flex animate-infinite-scroll gap-8 pr-8 group-hover/gallery:[animation-play-state:paused] md:group-hover/gallery:[animation-duration:80s]"
                aria-hidden="true">
                @foreach(array_merge($images, $images) as $image)
                    <div
                        class="flex-none w-[300px] md:w-[450px] aspect-[16/10] rounded-3xl overflow-hidden shadow-lg border-4 border-slate-50 transition-all duration-500 hover:scale-105 hover:shadow-2xl hover:border-primary/20">
                        <img src="{{ asset($image) }}" alt="SureOwn Presentation"
                            class="w-full h-full object-cover grayscale-[20%] hover:grayscale-0 transition-all duration-500">
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div
        class="container mx-auto px-6 text-center mt-16 animate-on-scroll opacity-0 translate-y-10 transition-all duration-1000 delay-500">
        <a href="/devenir-partenaire"
            class="inline-flex items-center gap-3 max-sm:px-6  max-sm:py-3  px-12 py-5 rounded-full bg-primary text-white font-bold max-sm:text-sm text-lg hover:bg-slate-900 transition-all duration-300 hover:shadow-2xl hover:shadow-primary/20 group">
            Devenir partenaire
            <svg class="w-6 h-6 group-hover:translate-x-2 transition-transform duration-300" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3">
                </path>
            </svg>
        </a>
    </div>

    <style>
        @keyframes infiniteScroll {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-100%);
            }
        }

        .animate-infinite-scroll {
            animation: infiniteScroll 40s linear infinite;
            will-change: transform;
        }

        /* Slow down instead of pause if on desktop */
        @media (min-width: 768px) {
            .group\/gallery:hover .animate-infinite-scroll {
                animation-duration: 120s !important;
                /* Slows down by 3x */
            }
        }
    </style>
</section>

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

        document.querySelectorAll('#become-partner .animate-on-scroll').forEach(el => {
            observer.observe(el);
        });
    });
</script>