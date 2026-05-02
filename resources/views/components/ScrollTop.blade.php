<button id="scrollToTop"
    class="fixed bottom-8 right-8 z-50 p-4 rounded-full bg-primary text-white shadow-2xl opacity-0 translate-y-10 pointer-events-none transition-all duration-500 hover:bg-primary-dark hover:-translate-y-1">
    <x-lucide-chevron-up class="w-5 h-5" />
</button>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const scrollBtn = document.getElementById('scrollToTop');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 400) {
                scrollBtn.classList.remove('opacity-0', 'translate-y-10', 'pointer-events-none');
            } else {
                scrollBtn.classList.add('opacity-0', 'translate-y-10', 'pointer-events-none');
            }
        });

        scrollBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    });
</script>