<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', "Reny's Birthday Surprise")</title>
    
    <!-- Google Fonts - Load First -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Playfair+Display:wght@700;800;900&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- GSAP Library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
        
        html, body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
        }
        
        .playfair {
            font-family: 'Playfair Display', serif;
        }
        
        /* Smooth animation base */
        body {
            background: linear-gradient(135deg, #fce7f3 0%, #e9d5ff 50%, #dbeafe 100%) !important;
            overflow-x: hidden;
        }
        
        /* Glassmorphism effect */
        .glass {
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.18);
        }
        
        .glass-dark {
            background: rgba(236, 72, 153, 0.1);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border: 1px solid rgba(236, 72, 153, 0.2);
        }
        
        /* Smooth transitions */
        .smooth-fade {
            opacity: 0;
            animation: fadeIn 1s ease-out forwards;
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        
        /* Text shadow for romantic effect */
        .romantic-text {
            text-shadow: 0 2px 10px rgba(236, 72, 153, 0.3);
        }
    </style>
</head>
<body>
    @yield('content')
    
    <!-- Custom JS -->
    <script src="{{ asset('js/animations.js') }}"></script>
    @yield('extra-js')
</body>
</html>
