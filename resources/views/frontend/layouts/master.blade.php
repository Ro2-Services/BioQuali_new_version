<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BioQuali | Laboratoire de Biotechnologie & Analyses Médicales - Bénin</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Montserrat:wght@400;500;600;700;800&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#008751', // Vert Bénin
                        secondary: '#fcd116', // Jaune Bénin
                        accent: '#e8112d', // Rouge Bénin
                        medical: '#00a896',
                        dark: '#1e293b',
                        light: '#f8fafc',
                        success: '#22c55e',
                        warning: '#f59e0b'
                    },
                    fontFamily: {
                        'sans': ['Roboto', 'sans-serif'],
                        'heading': ['Montserrat', 'sans-serif'],
                        'body': ['Poppins', 'sans-serif']
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.5s ease-in-out',
                        'slide-up': 'slideUp 0.7s ease-out',
                        'pulse-slow': 'pulse 3s infinite',
                        'bounce-slow': 'bounce 2s infinite',
                    }
                }
            }
        }
    </script>
    
    <style>
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @keyframes slideUp {
            from { 
                opacity: 0;
                transform: translateY(20px);
            }
            to { 
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #008751 0%, #00a896 50%, #fcd116 100%);
        }
        
        .medical-gradient {
            background: linear-gradient(135deg, #008751 0%, #00a896 100%);
        }
        
        .shadow-soft {
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .shadow-card {
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
        
        .hover-lift {
            transition: all 0.3s ease;
        }
        
        .hover-lift:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .animation-delay-1000 {
            animation-delay: 1s;
        }
        .animation-delay-2000 {
            animation-delay: 2s;
        }
        .animation-delay-4000 {
            animation-delay: 4s;
        }
        
        .rotate-180 {
            transform: rotate(180deg);
        }

        /* Mobile Bottom Navigation */
        .mobile-bottom-nav {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            background: white;
            border-top: 1px solid #e5e7eb;
            padding: 8px 0;
            display: none;
            box-shadow: 0 -4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        .mobile-bottom-nav.active {
            display: flex;
        }

        .nav-item {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 8px 4px;
            text-decoration: none;
            color: #6b7280;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-item.active {
            color: #008751;
        }

        .nav-item i {
            font-size: 20px;
            margin-bottom: 4px;
        }

        .nav-item span {
            font-size: 11px;
            font-weight: 500;
        }

        .nav-badge {
            position: absolute;
            top: 2px;
            right: 8px;
            background: #e8112d;
            color: white;
            border-radius: 50%;
            width: 16px;
            height: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 10px;
            font-weight: bold;
        }

        /* Style spécial pour le bouton Analyses avec cercle */
        .nav-item.analyses-btn {
            position: relative;
        }

        .nav-item.analyses-btn::before {
            content: '';
            position: absolute;
            top: -8px;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #008751, #00a896);
            border-radius: 50%;
            z-index: -1;
            box-shadow: 0 4px 10px rgba(0, 135, 81, 0.3);
        }

        .nav-item.analyses-btn.active::before {
            background: linear-gradient(135deg, #00a896, #008751);
        }

        .nav-item.analyses-btn i,
        .nav-item.analyses-btn span {
            position: relative;
            z-index: 1;
            color: white;
        }

        @media (max-width: 1024px) {
            .desktop-nav {
                display: none;
            }
            .mobile-bottom-nav {
                display: flex;
            }
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .hero-stats div {
                min-width: 80px;
            }
            .mobile-padding {
                padding-bottom: 80px;
            }
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        
        ::-webkit-scrollbar-thumb {
            background: #c1c1c1;
            border-radius: 10px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: #a8a8a8;
        }

        /* Glass morphism effect */
        .glass {
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.18);
        }

        /* Bénin flag colors animation */
        @keyframes benin-flag {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .benin-gradient {
            background: linear-gradient(-45deg, #008751, #fcd116, #e8112d, #00a896);
            background-size: 400% 400%;
            animation: benin-flag 15s ease infinite;
        }
    </style>
</head>
<body class="font-sans bg-light text-dark mobile-padding">
<!-- ========================= HEADER ========================= -->
    @include('frontend.layouts.header')

<!-- ========================= MAIN CONTENT ========================= -->
<main role="main">
    @yield('content')
</main>

<!-- ========================= FOOTER ========================= -->
    @include('frontend.layouts.footer')

<!-- ========================= SCRIPTS ========================= -->
    @include('frontend.layouts.scripts')

<!-- Additional Scripts -->
    @yield('scripts')
</body>
</html>
