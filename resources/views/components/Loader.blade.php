<div id="page-loader"
    class="fixed inset-0 z-[10000] flex flex-col items-center justify-center bg-slate-50 transition-all duration-1000 ease-[cubic-bezier(0.74,0,0.24,1)]">

    <!-- Subtle background pattern -->
    <div class="absolute inset-0 bg-[#e5e7eb_1px,transparent_1px)] [background-size:16px_16px] opacity-50"></div>

    <div class="relative z-10 flex flex-col items-center justify-center">
        <!-- Logo container with 3D-like float and spinning rings -->
        <div class="relative w-32 h-32 mb-10 animate-float flex items-center justify-center">
            <!-- Glow effect behind -->
            <div class="absolute inset-0 bg-primary/20 blur-2xl rounded-full animate-pulse-gentle"></div>

            <!-- Outer spinning ring -->
            <div
                class="absolute inset-0 rounded-full border-t-2 border-r-2 border-primary border-b-transparent border-l-transparent animate-spin-slow">
            </div>
            <!-- Inner spinning ring (reverse) -->
            <div
                class="absolute inset-2 rounded-full border-b-2 border-l-2 border-black/80 border-t-transparent border-r-transparent animate-spin-reverse">
            </div>

            <!-- Center Logo -->
            <div
                class="absolute inset-4 rounded-full bg-white shadow-2xl flex items-center justify-center overflow-hidden z-20 border border-gray-100">
                <img src="{{ asset('assets/images/logo.png') }}" alt="Loading"
                    class="w-16 h-16 object-contain animate-pulse-subtle">
            </div>
        </div>

        <!-- Typography / Loading text -->
        <div class="flex flex-col items-center space-y-3">
            <h2 class="text-sm font-bold text-gray-800 tracking-[0.3em] uppercase flex gap-[2px]">
                <span class="animate-bounce-char" style="animation-delay: 0s">L</span>
                <span class="animate-bounce-char" style="animation-delay: 0.1s">o</span>
                <span class="animate-bounce-char" style="animation-delay: 0.2s">a</span>
                <span class="animate-bounce-char" style="animation-delay: 0.3s">d</span>
                <span class="animate-bounce-char" style="animation-delay: 0.4s">i</span>
                <span class="animate-bounce-char" style="animation-delay: 0.5s">n</span>
                <span class="animate-bounce-char" style="animation-delay: 0.6s">g</span>
            </h2>

            <!-- Modern continuous progress line -->
            <div class="w-40 h-[2px] bg-gray-200 overflow-hidden relative rounded-full">
                <div class="absolute top-0 left-0 h-full bg-primary w-1/3 animate-progress-slide rounded-full"></div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Premium Animations */
    @keyframes float {

        0%,
        100% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-12px);
        }
    }

    @keyframes spin-slow {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    @keyframes spin-reverse {
        0% {
            transform: rotate(360deg);
        }

        100% {
            transform: rotate(0deg);
        }
    }

    @keyframes progress-slide {
        0% {
            transform: translateX(-100%);
        }

        100% {
            transform: translateX(300%);
        }
    }

    @keyframes pulse-subtle {

        0%,
        100% {
            opacity: 1;
            transform: scale(1);
        }

        50% {
            opacity: 0.7;
            transform: scale(0.92);
        }
    }

    @keyframes bounce-char {

        0%,
        100% {
            transform: translateY(0);
            opacity: 0.5;
        }

        50% {
            transform: translateY(-4px);
            opacity: 1;
        }
    }

    .animate-float {
        animation: float 4s ease-in-out infinite;
    }

    .animate-spin-slow {
        animation: spin-slow 3s linear infinite;
    }

    .animate-spin-reverse {
        animation: spin-reverse 2.5s linear infinite;
    }

    .animate-progress-slide {
        animation: progress-slide 1.5s ease-in-out infinite;
    }

    .animate-pulse-subtle {
        animation: pulse-subtle 2.5s ease-in-out infinite;
    }

    .animate-pulse-gentle {
        animation: pulse-subtle 3s ease-in-out infinite;
    }

    .animate-bounce-char {
        animation: bounce-char 1.5s ease-in-out infinite;
    }

    /* Reveal animation for loader exit: Smooth upward slide like a curtain */
    #page-loader.loader-hidden {
        transform: translateY(-100%);
        border-bottom-left-radius: 50% 10%;
        border-bottom-right-radius: 50% 10%;
        opacity: 0.9;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Prevent scrolling while loading
        document.body.style.overflow = 'hidden';
    });

    window.addEventListener('load', () => {
        const loader = document.getElementById('page-loader');

        // Ensure a minimum display time for the animation (e.g., 600ms) to avoid flashes
        setTimeout(() => {
            if (loader) {
                loader.classList.add('loader-hidden');
                document.body.style.overflow = ''; // Restore scrolling

                // Remove from DOM after transition
                setTimeout(() => {
                    loader.style.display = 'none';
                }, 1000); // Wait for the translateY transition
            }
        }, 600);
    });

    // Fallback if load event fails or takes forever
    setTimeout(() => {
        const loader = document.getElementById('page-loader');
        if (loader && !loader.classList.contains('loader-hidden')) {
            loader.classList.add('loader-hidden');
            document.body.style.overflow = '';
            setTimeout(() => {
                loader.style.display = 'none';
            }, 1000);
        }
    }, 5000);
</script>