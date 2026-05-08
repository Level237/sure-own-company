<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Demande Reçue | SureOwnCompany</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body class="bg-white font-sans selection:bg-primary selection:text-white min-h-screen flex flex-col">

    <!-- Short Full-Width Header Banner -->
    <x-Loader />
    <x-Homepage.Header />
    <section class="relative h-[35vh] w-full overflow-hidden bg-black">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-cover bg-center"
                style="background-image: url('{{ asset('assets/images/why-choose-us.png') }}');"></div>
            <!-- Primary (Orangey) Overlay -->
            <div class="absolute inset-0 bg-primary/80 mix-blend-multiply"></div>
            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-primary/20 to-black/80"></div>
        </div>

        <!-- Content -->
        <div
            class="relative z-10 container mx-auto px-6 md:px-10 h-full flex flex-col items-center justify-center text-center max-w-7xl">
            <div class="space-y-6">
                <h1 class="text-4xl md:text-7xl font-extrabold text-white animate-fade-in-up">
                    Espace Commande</span>
                </h1>
                <div class="w-24 h-1.5 bg-white mx-auto rounded-full animate-width-grow"></div>

            </div>
        </div>
    </section>

    <main class="flex-1 flex flex-col items-center justify-center py-20 px-6">
        <div class="relative z-10 max-w-2xl w-full text-center space-y-10">
            <!-- Success Icon -->
            <div class="relative inline-block">
                <div
                    class="w-24 h-24 bg-primary/10 rounded-full flex items-center justify-center text-primary transform scale-0 animate-pop-in">
                    <x-lucide-check-circle-2 class="w-12 h-12" />
                </div>
            </div>

            <!-- Content -->
            <div class="space-y-4">
                <h2 class="text-4xl md:text-5xl font-black text-slate-900 leading-tight animate-slide-up">
                    Demande <span class="text-primary">enregistrée</span> !
                </h2>
                <p class="text-slate-500 text-lg font-medium leading-relaxed animate-slide-up delay-200">
                    Nous avons bien reçu vos informations. Un expert de l'équipe SureOwn Logistics prendra contact avec
                    vous très prochainement.
                </p>
            </div>

            <!-- CTA -->
            <div class="pt-6 animate-slide-up delay-400">
                <a href="/"
                    class="group inline-flex items-center gap-4 px-10 py-4 rounded-xl bg-slate-900 text-white font-black text-sm uppercase tracking-widest hover:bg-primary transition-all duration-500 shadow-xl shadow-slate-900/10">
                    Retour au site
                    <x-lucide-home class="w-5 h-5 group-hover:scale-110 transition-transform" />
                </a>
            </div>
        </div>
    </main>

    <style>
        body {
            font-family: 'Outfit', sans-serif;
        }

        @keyframes popIn {
            0% {
                transform: scale(0);
                opacity: 0;
            }

            70% {
                transform: scale(1.1);
                opacity: 1;
            }

            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        @keyframes slideUp {
            from {
                transform: translateY(30px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .animate-pop-in {
            animation: popIn 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards;
        }

        .animate-slide-up {
            transform: translateY(30px);
            opacity: 0;
            animation: slideUp 0.8s ease-out forwards;
        }

        .delay-200 {
            animation-delay: 0.2s;
        }

        .delay-400 {
            animation-delay: 0.4s;
        }
    </style>
</body>

</html>