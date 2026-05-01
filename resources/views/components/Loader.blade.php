<div id="page-loader" class="fixed inset-0 z-[10000] flex items-center justify-center bg-white transition-all duration-700 ease-in-out">
    <!-- Top Progress Bar -->
    <div class="absolute top-0 left-0 h-1 bg-primary transition-all duration-1000 ease-out" id="loader-progress" style="width: 0%"></div>
    
    <div class="relative flex flex-col items-center gap-6">
        <!-- Animated Logo -->
        <div class="relative w-24 h-24 md:w-32 md:h-32 animate-pulse-gentle">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Loading..." class="w-full h-full object-contain">
        </div>
        
        <!-- Loading Text/Subtle Indicator -->
        <div class="flex items-center gap-2">
            <span class="w-1.5 h-1.5 rounded-full bg-primary animate-bounce"></span>
            <span class="w-1.5 h-1.5 rounded-full bg-primary animate-bounce delay-150"></span>
            <span class="w-1.5 h-1.5 rounded-full bg-primary animate-bounce delay-300"></span>
        </div>
    </div>
</div>

<style>
    @keyframes pulse-gentle {
        0%, 100% { transform: scale(1); opacity: 1; }
        50% { transform: scale(1.05); opacity: 0.8; }
    }
    .animate-pulse-gentle {
        animation: pulse-gentle 2s ease-in-out infinite;
    }
    
    #page-loader.loader-hidden {
        opacity: 0;
        visibility: hidden;
        transform: scale(1.1);
    }
</style>

<script>
    window.addEventListener('load', () => {
        const loader = document.getElementById('page-loader');
        const progress = document.getElementById('loader-progress');
        
        // Simulate progress for visual polish
        if (progress) {
            progress.style.width = '100%';
        }
        
        // Small delay to ensure the 100% width is seen
        setTimeout(() => {
            if (loader) {
                loader.classList.add('loader-hidden');
                
                // Remove from DOM after transition to free up resources
                setTimeout(() => {
                    loader.style.display = 'none';
                }, 700);
            }
        }, 500);
    });

    // Fallback if load event takes too long
    setTimeout(() => {
        const loader = document.getElementById('page-loader');
        if (loader && !loader.classList.contains('loader-hidden')) {
            loader.classList.add('loader-hidden');
        }
    }, 5000);
</script>
