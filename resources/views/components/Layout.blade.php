@props([
    'headerWhite' => false,
    'isHomepage' => false,
    'title' => 'SureOwnCompany - Transport de Carburant & Logistique Industrielle',
    'description' => 'SureOwnCompany révolutionne le transport de carburant et la logistique industrielle. Flotte moderne, sécurité maximale et traçabilité pour les entreprises exigeantes.',
    'keywords' => 'transport de carburant, logistique industrielle, livraison sécurisée, flotte moderne, approvisionnement industriel',
    'image' => asset('assets/images/logo.png')
])
<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">

<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/svg+xml" href={{ asset('assets/images/logo.png') }} />
    <!-- Primary Meta Tags -->
    <title>{{ $title }}</title>
    <meta name="title" content="{{ $title }}">
    <meta name="description" content="{{ $description }}">
    <meta name="keywords" content="{{ $keywords }}">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $title }}">
    <meta property="og:description" content="{{ $description }}">
    <meta property="og:image" content="{{ $image }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="{{ $title }}">
    <meta property="twitter:description" content="{{ $description }}">
    <meta property="twitter:image" content="{{ $image }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="canonical" href="@yield('canonical', request()->url())" />
<link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&family=Playball&display=swap"
        rel="stylesheet">

    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

        
</head>

<body class="bg-black text-white font-sans selection:bg-primary selection:text-white">
    <x-Loader />
    <x-Homepage.Header :isWhite="$headerWhite" :isHomepage="$isHomepage" />

    <main>
        {{ $slot }}
    </main>

    <x-ScrollTop />

</body>

</html>