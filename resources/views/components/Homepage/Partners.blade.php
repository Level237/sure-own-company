<section class="py-16 bg-white border-y border-slate-100" id="partners">
    <div class="container mx-auto px-6 md:px-10 max-w-7xl">
        <div class="space-y-10">
            <!-- Header -->
            <div class="text-center animate-on-scroll opacity-0 translate-y-5 transition-all duration-700">
                <span class="text-md font-bold tracking-[0.2em] uppercase text-slate-400">
                    Ils nous font confiance
                </span>
            </div>

            <!-- Logo Grid -->
            <div
                class="flex flex-wrap justify-center items-center max-sm:gap-5 gap-12 md:gap-24 lg:gap-32 animate-on-scroll translate-y-10 transition-all duration-1000 delay-200">
                <!-- Partner 1 -->
                <div class="group flex items-center justify-center">
                    <img src="{{ asset('assets/images/partner1.png') }}" alt="Partner 1"
                        class="h-32 max-sm:h-16 md:h-32 w-auto  transition-all duration-500 transform group-hover:scale-110">
                </div>

                <!-- Partner 2 -->
                <div class="group flex items-center justify-center">
                    <img src="{{ asset('assets/images/partner2.png') }}" alt="Partner 2"
                        class="h-32 max-sm:h-16 md:h-32 w-auto  transition-all duration-500 transform group-hover:scale-110">
                </div>

                <!-- Partner 3 -->
                <div class="group flex items-center justify-center">
                    <img src="{{ asset('assets/images/partner3.png') }}" alt="Partner 3"
                        class="h-32 max-sm:h-16 md:h-32 w-auto transition-all duration-500 transform group-hover:scale-110">
                </div>
            </div>
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
                    entry.target.classList.remove('opacity-0', 'translate-y-5', 'translate-y-10');
                    entry.target.classList.add('opacity-100', 'translate-y-0');
                }
            });
        }, observerOptions);

        document.querySelectorAll('#partners .animate-on-scroll').forEach(el => {
            observer.observe(el);
        });
    });
</script>