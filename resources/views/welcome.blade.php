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

<!-- Desktop Navigation -->
<header class="sticky top-0 z-50 bg-white/90 backdrop-blur-md border-b border-gray-100 transition-all duration-300 desktop-nav">
    <div class="container mx-auto px-4">
        <nav class="flex items-center justify-between py-3">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="#" class="flex items-center space-x-3 group">
                    <div class="relative">
                        <div class="w-12 h-12 rounded-2xl benin-gradient flex items-center justify-center shadow-lg group-hover:shadow-xl transition-all duration-300 group-hover:scale-105">
                            <!-- Icône 1: Symbole médical africain -->
                            <i class="bi bi-hexagon text-white text-xl"></i>
                        </div>
                        <div class="absolute -inset-1 benin-gradient rounded-2xl blur opacity-30 group-hover:opacity-50 transition-opacity duration-300"></div>
                    </div>
                    <div>
                        <span class="text-2xl font-bold text-dark font-heading">Bio<span class="text-transparent benin-gradient bg-clip-text">Quali</span></span>
                        <div class="text-xs text-gray-500 -mt-1 font-body">Laboratoire Béninois</div>
                    </div>
                </a>
            </div>
            
            <!-- Desktop Menu -->
            <div class="hidden lg:flex items-center space-x-1">
                <a href="#" class="text-gray-700 hover:text-primary font-medium group relative px-4 py-2 rounded-xl transition-all duration-300 font-body">
                    <span class="flex items-center">
                        <!-- Icône 2: Maison africaine -->
                        <i class="bi bi-house-heart mr-2 text-lg"></i>
                        Accueil
                    </span>
                    <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-0 h-0.5 benin-gradient group-hover:w-3/4 transition-all duration-300"></div>
                </a>
                
                <a href="#" class="text-gray-700 hover:text-primary font-medium group relative px-4 py-2 rounded-xl transition-all duration-300 font-body">
                    <span class="flex items-center">
                        <!-- Icône 3: Tube à essai -->
                        <i class="bi bi-vial mr-2 text-lg"></i>
                        Tests
                    </span>
                    <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-0 h-0.5 benin-gradient group-hover:w-3/4 transition-all duration-300"></div>
                </a>

                <a href="#" class="text-gray-700 hover:text-primary font-medium group relative px-4 py-2 rounded-xl transition-all duration-300 font-body">
                    <span class="flex items-center">
                        <!-- Icône 4: Équipement médical -->
                        <i class="bi bi-cpu mr-2 text-lg"></i>
                        Équipements
                    </span>
                    <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-0 h-0.5 benin-gradient group-hover:w-3/4 transition-all duration-300"></div>
                </a>
                
                <div class="relative group">
                    <a href="#" class="text-gray-700 hover:text-primary font-medium group relative px-4 py-2 rounded-xl transition-all duration-300 flex items-center font-body">
                        <i class="bi bi-clipboard2-pulse mr-2 text-lg"></i>
                        Analyses
                        <i class="bi bi-chevron-down ml-1 text-sm transition-transform duration-300 group-hover:rotate-180"></i>
                    </a>
                    <div class="absolute left-1/2 transform -translate-x-1/2 mt-2 w-56 bg-white/95 backdrop-blur-md rounded-2xl shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:translate-y-0 translate-y-4 border border-gray-100 overflow-hidden">
                        <div class="p-2">
                            <a href="#" class="flex items-center px-4 py-3 rounded-xl hover:bg-green-50 transition-all duration-300 group">
                                <div class="w-8 h-8 bg-green-100 rounded-lg flex items-center justify-center mr-3">
                                    <i class="bi bi-dna text-primary"></i>
                                </div>
                                <div>
                                    <div class="font-medium text-dark font-body">Biologie Moléculaire</div>
                                    <div class="text-xs text-gray-500">PCR, séquençage...</div>
                                </div>
                            </a>
                            <a href="#" class="flex items-center px-4 py-3 rounded-xl hover:bg-green-50 transition-all duration-300 group">
                                <div class="w-8 h-8 bg-green-100 rounded-lg flex items-center justify-center mr-3">
                                    <i class="bi bi-droplet text-medical"></i>
                                </div>
                                <div>
                                    <div class="font-medium text-dark font-body">Biochimie</div>
                                    <div class="text-xs text-gray-500">Marqueurs sanguins...</div>
                                </div>
                            </a>
                            <a href="#" class="flex items-center px-4 py-3 rounded-xl hover:bg-purple-50 transition-all duration-300 group">
                                <div class="w-8 h-8 bg-purple-100 rounded-lg flex items-center justify-center mr-3">
                                    <i class="bi bi-microscope text-purple-500"></i>
                                </div>
                                <div>
                                    <div class="font-medium text-dark font-body">Microbiologie</div>
                                    <div class="text-xs text-gray-500">Bactériologie, virologie...</div>
                                </div>
                            </a>
                            <a href="#" class="flex items-center px-4 py-3 rounded-xl hover:bg-orange-50 transition-all duration-300 group">
                                <div class="w-8 h-8 bg-orange-100 rounded-lg flex items-center justify-center mr-3">
                                    <i class="bi bi-lightning-charge text-orange-500"></i>
                                </div>
                                <div>
                                    <div class="font-medium text-dark font-body">Tests Rapides</div>
                                    <div class="text-xs text-gray-500">Diagnostics immédiats...</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                
                <a href="#" class="text-gray-700 hover:text-primary font-medium group relative px-4 py-2 rounded-xl transition-all duration-300 font-body">
                    <span class="flex items-center">
                        <i class="bi bi-info-circle mr-2 text-lg"></i>
                        À propos
                    </span>
                    <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-0 h-0.5 benin-gradient group-hover:w-3/4 transition-all duration-300"></div>
                </a>
                
                <a href="#" class="text-gray-700 hover:text-primary font-medium group relative px-4 py-2 rounded-xl transition-all duration-300 font-body">
                    <span class="flex items-center">
                        <i class="bi bi-telephone mr-2 text-lg"></i>
                        Contact
                    </span>
                    <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-0 h-0.5 benin-gradient group-hover:w-3/4 transition-all duration-300"></div>
                </a>
            </div>
            
            <!-- User Actions -->
            <div class="hidden lg:flex items-center space-x-2">
                <button class="group relative p-3 rounded-xl transition-all duration-300 hover:shadow-md">
                    <i class="bi bi-search text-xl text-gray-600 group-hover:text-primary"></i>
                    <div class="absolute inset-0 bg-gradient-to-br from-primary/10 to-medical/10 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </button>
                
                <button class="group relative p-3 rounded-xl transition-all duration-300 hover:shadow-md">
                    <i class="bi bi-person text-xl text-gray-600 group-hover:text-primary"></i>
                    <div class="absolute inset-0 bg-gradient-to-br from-primary/10 to-medical/10 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </button>
                
                <button class="group relative p-3 rounded-xl transition-all duration-300 hover:shadow-md">
                    <i class="bi bi-heart text-xl text-gray-600 group-hover:text-primary"></i>
                    <div class="absolute inset-0 bg-gradient-to-br from-primary/10 to-medical/10 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </button>
                
                <button class="group relative p-3 rounded-xl transition-all duration-300 hover:shadow-md">
                    <div class="relative">
                        <i class="bi bi-cart3 text-xl text-gray-600 group-hover:text-primary"></i>
                        <span class="absolute -top-2 -right-2 benin-gradient text-white text-xs rounded-full w-5 h-5 flex items-center justify-center font-bold shadow-lg">3</span>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-br from-primary/10 to-medical/10 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </button>
            </div>
        </nav>
    </div>
</header>

<!-- Mobile Bottom Navigation -->
<nav class="mobile-bottom-nav lg:hidden">
    <a href="#" class="nav-item active">
        <!-- Icône Accueil: Maison avec cœur -->
        <i class="bi bi-house-heart"></i>
        <span>Accueil</span>
    </a>
    <a href="#" class="nav-item">
        <!-- Icône Tests: Tube à essai -->
        <i class="bi bi-vial"></i>
        <span>Tests</span>
    </a>
    <a href="#" class="nav-item analyses-btn active">
        <!-- Icône Analyses: Graphique médical -->
        <i class="bi bi-clipboard2-pulse"></i>
        <span>Analyses</span>
    </a>
    <a href="#" class="nav-item">
        <!-- Icône Compte: Personne -->
        <i class="bi bi-person-circle"></i>
        <span>Compte</span>
    </a>
    <a href="#" class="nav-item" id="mobile-more-btn">
        <!-- Icône Plus: Trois points -->
        <i class="bi bi-three-dots"></i>
        <span>Plus</span>
        <span class="nav-badge">3</span>
    </a>
</nav>

<!-- Mobile More Menu -->
<div id="mobile-more-menu" class="fixed bottom-20 left-4 right-4 bg-white rounded-2xl shadow-2xl border border-gray-100 z-50 transform translate-y-10 opacity-0 invisible transition-all duration-300">
    <div class="p-4">
        <h3 class="font-bold text-dark mb-3 font-heading">Menu BioQuali</h3>
        <div class="grid grid-cols-3 gap-3 mb-4">
            <a href="#" class="flex flex-col items-center p-3 rounded-xl hover:bg-green-50 transition-all duration-300">
                <i class="bi bi-cpu text-2xl text-primary mb-2"></i>
                <span class="text-sm font-medium text-center">Équipements</span>
            </a>
            <a href="#" class="flex flex-col items-center p-3 rounded-xl hover:bg-yellow-50 transition-all duration-300">
                <i class="bi bi-heart text-2xl text-accent mb-2"></i>
                <span class="text-sm font-medium text-center">Favoris</span>
            </a>
            <a href="#" class="flex flex-col items-center p-3 rounded-xl hover:bg-blue-50 transition-all duration-300">
                <i class="bi bi-clock text-2xl text-secondary mb-2"></i>
                <span class="text-sm font-medium text-center">Historique</span>
            </a>
        </div>
        <div class="space-y-2">
            <a href="#" class="flex items-center p-3 rounded-lg hover:bg-gray-50 transition-all duration-300">
                <i class="bi bi-info-circle text-lg text-medical mr-3"></i>
                <span class="font-medium">À propos de BioQuali</span>
            </a>
            <a href="#" class="flex items-center p-3 rounded-lg hover:bg-gray-50 transition-all duration-300">
                <i class="bi bi-telephone text-lg text-primary mr-3"></i>
                <span class="font-medium">Nous contacter</span>
            </a>
            <a href="#" class="flex items-center p-3 rounded-lg hover:bg-gray-50 transition-all duration-300">
                <i class="bi bi-shield-check text-lg text-success mr-3"></i>
                <span class="font-medium">Confidentialité</span>
            </a>
        </div>
    </div>
</div>

<!-- Hero Section -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-br from-green-50 to-yellow-50 pt-20 lg:pt-0">
    <!-- Background Elements -->
    <div class="absolute inset-0">
        <!-- Animated Circles -->
        <div class="absolute top-10 left-10 w-72 h-72 bg-green-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse-slow"></div>
        <div class="absolute top-40 right-10 w-96 h-96 bg-yellow-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse-slow animation-delay-2000"></div>
        <div class="absolute bottom-20 left-1/3 w-80 h-80 bg-red-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse-slow animation-delay-4000"></div>
        
        <!-- Medical Icons Floating -->
        <div class="absolute top-1/4 right-1/4 text-green-300 text-6xl opacity-20 animate-bounce-slow">
            <i class="bi bi-hexagon"></i>
        </div>
        <div class="absolute bottom-1/3 left-1/4 text-yellow-300 text-4xl opacity-30 animate-bounce-slow animation-delay-1000">
            <i class="bi bi-dna"></i>
        </div>
        <div class="absolute top-1/3 left-1/2 text-red-300 text-5xl opacity-25 animate-bounce-slow animation-delay-2000">
            <i class="bi bi-microscope"></i>
        </div>
    </div>

    <!-- Main Content -->
    <div class="relative z-10 container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Image Content - LEFT -->
            <div class="relative order-2 lg:order-1 animate-slide-up">
                <div class="relative z-10">
                    <!-- Main Hero Image -->
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                        <img 
                            src="https://images.unsplash.com/photo-1586773860418-d37222d8fce3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                            alt="Laboratoire de biotechnologie BioQuali Bénin" 
                            class="w-full h-[400px] lg:h-[500px] object-cover"
                        >
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                    </div>
                    
                    <!-- Floating Cards -->
                    <div class="absolute -bottom-4 -left-4 bg-white rounded-xl p-3 sm:p-4 shadow-2xl hover-lift" style="max-width: calc(100vw - 2rem);">
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-green-100 rounded-lg flex items-center justify-center">
                                <i class="bi bi-award-fill text-primary text-lg"></i>
                            </div>
                            <div>
                                <div class="font-bold text-dark text-sm font-body">Expertise Certifiée</div>
                                <div class="text-xs text-gray-600 font-body">Normes internationales</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="absolute -top-4 -right-4 bg-white rounded-xl p-3 sm:p-4 shadow-2xl hover-lift" style="max-width: calc(100vw - 2rem);">
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 bg-yellow-100 rounded-lg flex items-center justify-center">
                                <i class="bi bi-lightning-charge-fill text-secondary text-lg"></i>
                            </div>
                            <div>
                                <div class="font-bold text-dark text-sm font-body">Résultats Rapides</div>
                                <div class="text-xs text-gray-600 font-body">Sous 24-48h</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Background Decoration -->
                <div class="absolute -z-10 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-full h-full">
                    <div class="absolute top-10 left-10 w-24 h-24 bg-primary/10 rounded-full animate-pulse"></div>
                    <div class="absolute bottom-10 right-10 w-20 h-20 bg-secondary/10 rounded-full animate-pulse animation-delay-1000"></div>
                </div>
            </div>

            <!-- Text Content - RIGHT -->
            <div class="text-center lg:text-left order-1 lg:order-2 animate-slide-up">
                <div class="inline-flex items-center bg-white/80 backdrop-blur-sm rounded-full px-4 py-2 mb-6 lg:mb-8 shadow-soft">
                    <span class="w-2 h-2 bg-primary rounded-full mr-2 animate-ping"></span>
                    <span class="text-sm font-semibold text-primary font-body">Laboratoire certifié Bénin</span>
                </div>
                
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 font-heading leading-tight">
                    <span class="text-dark">Excellence</span>
                    <span class="block text-transparent benin-gradient bg-clip-text">Médicale</span>
                    <span class="text-dark">Béninoise</span>
                </h1>
                
                <p class="text-lg md:text-xl text-gray-600 mb-8 leading-relaxed max-w-2xl mx-auto lg:mx-0 font-body">
                    Premier laboratoire de référence pour les <span class="font-semibold text-primary">analyses médicales spécialisées au Bénin</span>. 
                    Des tests innovants, des résultats fiables.
                </p>

                <!-- Stats -->
                <div class="flex flex-wrap gap-4 sm:gap-6 mb-8 justify-center lg:justify-start hero-stats">
                    <div class="text-center min-w-[80px]">
                        <div class="text-xl sm:text-2xl font-bold text-primary font-heading">150+</div>
                        <div class="text-xs sm:text-sm text-gray-600 font-body">Tests Disponibles</div>
                    </div>
                    <div class="text-center min-w-[80px]">
                        <div class="text-xl sm:text-2xl font-bold text-secondary font-heading">25K+</div>
                        <div class="text-xs sm:text-sm text-gray-600 font-body">Analyses Réalisées</div>
                    </div>
                    <div class="text-center min-w-[80px]">
                        <div class="text-xl sm:text-2xl font-bold text-accent font-heading">12+</div>
                        <div class="text-xs sm:text-sm text-gray-600 font-body">Ans d'expertise</div>
                    </div>
                </div>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 justify-center lg:justify-start">
                    <a href="#" class="group relative benin-gradient text-white font-semibold py-3 sm:py-4 px-6 sm:px-8 rounded-xl text-sm sm:text-base hover-lift transition-all duration-300 shadow-lg hover:shadow-xl w-full sm:w-auto text-center font-body">
                        <span class="relative z-10 flex items-center justify-center">
                            Découvrir nos tests
                            <i class="bi bi-arrow-right ml-2 group-hover:translate-x-1 transition-transform duration-300"></i>
                        </span>
                        <div class="absolute inset-0 bg-gradient-to-r from-secondary to-primary rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </a>
                    
                    <a href="#" class="group bg-white/80 backdrop-blur-sm text-primary font-semibold py-3 sm:py-4 px-6 sm:px-8 rounded-xl border-2 border-primary/20 hover:border-primary transition-all duration-300 hover-lift flex items-center justify-center w-full sm:w-auto text-center font-body">
                        <i class="bi bi-play-circle mr-2"></i>
                        Visiter le labo
                    </a>
                </div>

                <!-- Trust Badges -->
                <div class="mt-8 flex flex-wrap items-center justify-center lg:justify-start gap-4 text-xs sm:text-sm">
                    <div class="flex items-center text-gray-600 font-body">
                        <i class="bi bi-shield-check text-primary mr-1"></i>
                        <span>Certifié OMS</span>
                    </div>
                    <div class="flex items-center text-gray-600 font-body">
                        <i class="bi bi-truck text-secondary mr-1"></i>
                        <span>Livraison Partout</span>
                    </div>
                    <div class="flex items-center text-gray-600 font-body">
                        <i class="bi bi-headset text-accent mr-1"></i>
                        <span>Support 7j/7</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-20 lg:bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <div class="w-6 h-10 border-2 border-primary rounded-full flex justify-center">
            <div class="w-1 h-3 bg-primary rounded-full mt-2"></div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 lg:mb-16 animate-fade-in">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 font-heading">Pourquoi choisir <span class="text-primary">BioQuali</span> ?</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto font-body">Nous réalisons des analyses biotechnologiques de haute précision avec une expertise reconnue au Bénin.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">
            <div class="bg-light p-6 lg:p-8 rounded-xl hover-lift text-center">
                <div class="w-14 h-14 lg:w-16 lg:h-16 rounded-full bg-primary flex items-center justify-center mx-auto mb-4 lg:mb-6">
                    <i class="bi bi-shield-check text-white text-xl lg:text-2xl"></i>
                </div>
                <h3 class="text-lg lg:text-xl font-bold mb-3 lg:mb-4 font-heading">Qualité Certifiée</h3>
                <p class="text-gray-600 text-sm lg:text-base font-body">Tous nos tests respectent les normes internationales les plus strictes.</p>
            </div>
            
            <div class="bg-light p-6 lg:p-8 rounded-xl hover-lift text-center">
                <div class="w-14 h-14 lg:w-16 lg:h-16 rounded-full bg-secondary flex items-center justify-center mx-auto mb-4 lg:mb-6">
                    <i class="bi bi-speedometer2 text-white text-xl lg:text-2xl"></i>
                </div>
                <h3 class="text-lg lg:text-xl font-bold mb-3 lg:mb-4 font-heading">Résultats Rapides</h3>
                <p class="text-gray-600 text-sm lg:text-base font-body">Délais d'analyse optimisés pour une prise en charge efficace.</p>
            </div>
            
            <div class="bg-light p-6 lg:p-8 rounded-xl hover-lift text-center">
                <div class="w-14 h-14 lg:w-16 lg:h-16 rounded-full bg-accent flex items-center justify-center mx-auto mb-4 lg:mb-6">
                    <i class="bi bi-people text-white text-xl lg:text-2xl"></i>
                </div>
                <h3 class="text-lg lg:text-xl font-bold mb-3 lg:mb-4 font-heading">Experts Locaux</h3>
                <p class="text-gray-600 text-sm lg:text-base font-body">Équipe de biologistes béninois formés aux dernières technologies.</p>
            </div>

            <div class="bg-light p-6 lg:p-8 rounded-xl hover-lift text-center">
                <div class="w-14 h-14 lg:w-16 lg:h-16 rounded-full bg-medical flex items-center justify-center mx-auto mb-4 lg:mb-6">
                    <i class="bi bi-geo-alt text-white text-xl lg:text-2xl"></i>
                </div>
                <h3 class="text-lg lg:text-xl font-bold mb-3 lg:mb-4 font-heading">Couverture Nationale</h3>
                <p class="text-gray-600 text-sm lg:text-base font-body">Services disponibles dans toutes les régions du Bénin.</p>
            </div>
        </div>
    </div>
</section>

<!-- Equipment Section -->
<section class="py-16 bg-gradient-to-r from-green-50 to-yellow-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 lg:mb-16 animate-fade-in">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 font-heading">Équipements <span class="text-primary">Professionnels</span></h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto font-body">Découvrez notre gamme d'équipements de laboratoire et matériel médical de haute qualité.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white rounded-xl overflow-hidden shadow-card hover-lift group">
                <div class="h-48 bg-cover bg-center relative" style="background-image: url('https://images.unsplash.com/photo-1582719471384-894fbb16e074?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80')">
                    <div class="absolute inset-0 bg-primary opacity-0 group-hover:opacity-70 transition-opacity duration-300 flex items-center justify-center">
                        <span class="text-white font-semibold text-lg">Voir les produits</span>
                    </div>
                    <div class="absolute top-4 right-4 bg-success text-white text-sm font-semibold py-1 px-3 rounded-full">
                        En stock
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2 font-heading">Microscopes Professionnels</h3>
                    <p class="text-gray-600 mb-4 font-body">Microscopes électroniques et optiques pour laboratoire</p>
                    <div class="flex items-center justify-between">
                        <span class="text-primary font-bold text-lg">À partir de 1.200€</span>
                        <button class="bg-primary text-white p-2 rounded-lg hover:bg-green-700 transition-colors duration-300">
                            <i class="bi bi-cart-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="bg-white rounded-xl overflow-hidden shadow-card hover-lift group">
                <div class="h-48 bg-cover bg-center relative" style="background-image: url('https://images.unsplash.com/photo-1586773860418-d37222d8fce3?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80')">
                    <div class="absolute inset-0 bg-medical opacity-0 group-hover:opacity-70 transition-opacity duration-300 flex items-center justify-center">
                        <span class="text-white font-semibold text-lg">Voir les produits</span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2 font-heading">Centrifugeuses</h3>
                    <p class="text-gray-600 mb-4 font-body">Centrifugeuses de laboratoire haute performance</p>
                    <div class="flex items-center justify-between">
                        <span class="text-primary font-bold text-lg">À partir de 850€</span>
                        <button class="bg-primary text-white p-2 rounded-lg hover:bg-green-700 transition-colors duration-300">
                            <i class="bi bi-cart-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="bg-white rounded-xl overflow-hidden shadow-card hover-lift group">
                <div class="h-48 bg-cover bg-center relative" style="background-image: url('https://images.unsplash.com/photo-1559757175-0eb30cd8c063?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80')">
                    <div class="absolute inset-0 bg-secondary opacity-0 group-hover:opacity-70 transition-opacity duration-300 flex items-center justify-center">
                        <span class="text-white font-semibold text-lg">Voir les produits</span>
                    </div>
                    <div class="absolute top-4 right-4 bg-warning text-white text-sm font-semibold py-1 px-3 rounded-full">
                        Promo
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2 font-heading">Automates d'Analyses</h3>
                    <p class="text-gray-600 mb-4 font-body">Systèmes automatisés pour analyses biologiques</p>
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-primary font-bold text-lg">4.500€</span>
                            <span class="text-gray-400 text-sm line-through ml-2">5.200€</span>
                        </div>
                        <button class="bg-primary text-white p-2 rounded-lg hover:bg-green-700 transition-colors duration-300">
                            <i class="bi bi-cart-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="bg-white rounded-xl overflow-hidden shadow-card hover-lift group">
                <div class="h-48 bg-cover bg-center relative" style="background-image: url('https://images.unsplash.com/photo-1579684385127-1ef15d508118?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80')">
                    <div class="absolute inset-0 bg-accent opacity-0 group-hover:opacity-70 transition-opacity duration-300 flex items-center justify-center">
                        <span class="text-white font-semibold text-lg">Voir les produits</span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2 font-heading">Équipements PCR</h3>
                    <p class="text-gray-600 mb-4 font-body">Thermocycleurs et matériel pour biologie moléculaire</p>
                    <div class="flex items-center justify-between">
                        <span class="text-primary font-bold text-lg">À partir de 3.200€</span>
                        <button class="bg-primary text-white p-2 rounded-lg hover:bg-green-700 transition-colors duration-300">
                            <i class="bi bi-cart-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-12">
            <a href="#" class="inline-flex items-center bg-primary text-white font-semibold py-3 px-8 rounded-lg hover:bg-green-700 transition-colors duration-300 hover-lift font-body">
                Voir tous les équipements
                <i class="bi bi-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- Categories Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 lg:mb-16 animate-fade-in">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 font-heading">Nos <span class="text-primary">Domaines d'Expertise</span></h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto font-body">Découvrez notre gamme complète d'analyses biotechnologiques spécialisées.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white rounded-xl overflow-hidden shadow-soft hover-lift group">
                <div class="h-48 bg-cover bg-center relative" style="background-image: url('https://images.unsplash.com/photo-1559757148-5c350d0d3c56?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80')">
                    <div class="absolute inset-0 bg-primary opacity-0 group-hover:opacity-70 transition-opacity duration-300 flex items-center justify-center">
                        <span class="text-white font-semibold text-lg">Voir les analyses</span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2 font-heading">Biologie Moléculaire</h3>
                    <p class="text-gray-600 mb-4 font-body">PCR, séquençage ADN, tests génétiques, diagnostics moléculaires...</p>
                    <a href="#" class="text-primary font-semibold flex items-center font-body">
                        Explorer
                        <i class="bi bi-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
            
            <div class="bg-white rounded-xl overflow-hidden shadow-soft hover-lift group">
                <div class="h-48 bg-cover bg-center relative" style="background-image: url('https://images.unsplash.com/photo-1584820927498-cfe5211fd8bf?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80')">
                    <div class="absolute inset-0 bg-medical opacity-0 group-hover:opacity-70 transition-opacity duration-300 flex items-center justify-center">
                        <span class="text-white font-semibold text-lg">Voir les analyses</span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2 font-heading">Biochimie Clinique</h3>
                    <p class="text-gray-600 mb-4 font-body">Marqueurs sanguins, enzymes, hormones, métabolites spécialisés...</p>
                    <a href="#" class="text-primary font-semibold flex items-center font-body">
                        Explorer
                        <i class="bi bi-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
            
            <div class="bg-white rounded-xl overflow-hidden shadow-soft hover-lift group">
                <div class="h-48 bg-cover bg-center relative" style="background-image: url('https://images.unsplash.com/photo-1584467735871-8db9ac8d55b4?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80')">
                    <div class="absolute inset-0 bg-secondary opacity-0 group-hover:opacity-70 transition-opacity duration-300 flex items-center justify-center">
                        <span class="text-white font-semibold text-lg">Voir les analyses</span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2 font-heading">Microbiologie</h3>
                    <p class="text-gray-600 mb-4 font-body">Bactériologie, virologie, parasitologie, antibiogrammes...</p>
                    <a href="#" class="text-primary font-semibold flex items-center font-body">
                        Explorer
                        <i class="bi bi-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
            
            <div class="bg-white rounded-xl overflow-hidden shadow-soft hover-lift group">
                <div class="h-48 bg-cover bg-center relative" style="background-image: url('https://images.unsplash.com/photo-1586773860418-d37222d8fce3?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80')">
                    <div class="absolute inset-0 bg-accent opacity-0 group-hover:opacity-70 transition-opacity duration-300 flex items-center justify-center">
                        <span class="text-white font-semibold text-lg">Voir les analyses</span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2 font-heading">Tests Rapides</h3>
                    <p class="text-gray-600 mb-4 font-body">Diagnostics immédiats, tests antigéniques, dépistages rapides...</p>
                    <a href="#" class="text-primary font-semibold flex items-center font-body">
                        Explorer
                        <i class="bi bi-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Products -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 lg:mb-16 animate-fade-in">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 font-heading">Tests <span class="text-primary">Spécialisés</span></h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto font-body">Découvrez nos analyses les plus demandées par les professionnels de santé.</p>
        </div>
        
        <!-- Première ligne - 4 produits -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-light rounded-xl overflow-hidden shadow-soft hover-lift group">
                <div class="h-48 bg-cover bg-center relative" style="background-image: url('https://images.unsplash.com/photo-1559757175-0eb30cd8c063?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80')">
                    <div class="absolute top-4 right-4 bg-medical text-white text-sm font-semibold py-1 px-3 rounded-full">
                        Nouveau
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2 font-heading">PCR Quantitative</h3>
                    <p class="text-gray-600 mb-4 text-sm font-body">Détection et quantification d'ADN/ARN viral</p>
                    <div class="flex items-center justify-between">
                        <span class="text-primary font-bold text-lg">À partir de 25.000 FCFA</span>
                        <button class="bg-primary text-white p-2 rounded-lg hover:bg-green-700 transition-colors duration-300">
                            <i class="bi bi-cart-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="bg-light rounded-xl overflow-hidden shadow-soft hover-lift group">
                <div class="h-48 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1579684385127-1ef15d508118?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80')"></div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2 font-heading">Séquençage Génétique</h3>
                    <p class="text-gray-600 mb-4 text-sm font-body">Séquençage nouvelle génération (NGS) complet</p>
                    <div class="flex items-center justify-between">
                        <span class="text-primary font-bold text-lg">À partir de 150.000 FCFA</span>
                        <button class="bg-primary text-white p-2 rounded-lg hover:bg-green-700 transition-colors duration-300">
                            <i class="bi bi-cart-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="bg-light rounded-xl overflow-hidden shadow-soft hover-lift group">
                <div class="h-48 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1599045118108-bf9954418b76?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80')"></div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2 font-heading">Panel Biochimique</h3>
                    <p class="text-gray-600 mb-4 text-sm font-body">20 paramètres biochimiques sanguins complets</p>
                    <div class="flex items-center justify-between">
                        <span class="text-primary font-bold text-lg">À partir de 15.000 FCFA</span>
                        <button class="bg-primary text-white p-2 rounded-lg hover:bg-green-700 transition-colors duration-300">
                            <i class="bi bi-cart-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="bg-light rounded-xl overflow-hidden shadow-soft hover-lift group">
                <div class="h-48 bg-cover bg-center relative" style="background-image: url('https://images.unsplash.com/photo-1516549655669-df6654e447d9?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80')">
                    <div class="absolute top-4 right-4 bg-red-500 text-white text-sm font-semibold py-1 px-3 rounded-full">
                        Promo
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2 font-heading">Test Antigénique</h3>
                    <p class="text-gray-600 mb-4 text-sm font-body">Détection rapide d'antigènes viraux</p>
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-primary font-bold text-lg">5.000 FCFA</span>
                            <span class="text-gray-400 text-sm line-through ml-2">7.000 FCFA</span>
                        </div>
                        <button class="bg-primary text-white p-2 rounded-lg hover:bg-green-700 transition-colors duration-300">
                            <i class="bi bi-cart-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-12">
            <a href="#" class="inline-flex items-center bg-primary text-white font-semibold py-3 px-8 rounded-lg hover:bg-green-700 transition-colors duration-300 hover-lift font-body">
                Voir tous les tests
                <i class="bi bi-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="py-16 medical-gradient text-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 lg:mb-16 animate-fade-in">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 font-heading">Nos <span class="text-white">Services</span></h2>
            <p class="text-lg opacity-90 max-w-2xl mx-auto font-body">Au-delà des analyses, nous proposons des services complets pour les professionnels de santé.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">
            <div class="glass p-6 lg:p-8 rounded-xl hover-lift">
                <div class="w-14 h-14 lg:w-16 lg:h-16 rounded-full bg-white bg-opacity-20 flex items-center justify-center mb-4 lg:mb-6">
                    <i class="bi bi-clipboard-data text-white text-xl lg:text-2xl"></i>
                </div>
                <h3 class="text-lg lg:text-xl font-bold mb-3 lg:mb-4 font-heading">Interprétation des Résultats</h3>
                <p class="opacity-90 text-sm lg:text-base font-body">Nos biologistes médicaux interprètent vos résultats et fournissent des recommandations cliniques.</p>
            </div>

            <div class="glass p-6 lg:p-8 rounded-xl hover-lift">
                <div class="w-14 h-14 lg:w-16 lg:h-16 rounded-full bg-white bg-opacity-20 flex items-center justify-center mb-4 lg:mb-6">
                    <i class="bi bi-shield-check text-white text-xl lg:text-2xl"></i>
                </div>
                <h3 class="text-lg lg:text-xl font-bold mb-3 lg:mb-4 font-heading">Contrôle Qualité</h3>
                <p class="opacity-90 text-sm lg:text-base font-body">Programmes de contrôle qualité internes et externes pour garantir la fiabilité des résultats.</p>
            </div>
            
            <div class="glass p-6 lg:p-8 rounded-xl hover-lift">
                <div class="w-14 h-14 lg:w-16 lg:h-16 rounded-full bg-white bg-opacity-20 flex items-center justify-center mb-4 lg:mb-6">
                    <i class="bi bi-calendar-check text-white text-xl lg:text-2xl"></i>
                </div>
                <h3 class="text-lg lg:text-xl font-bold mb-3 lg:mb-4 font-heading">Prélèvements à Domicile</h3>
                <p class="opacity-90 text-sm lg:text-base font-body">Service de prélèvement à domicile pour plus de confort et d'accessibilité.</p>
            </div>

            <div class="glass p-6 lg:p-8 rounded-xl hover-lift">
                <div class="w-14 h-14 lg:w-16 lg:h-16 rounded-full bg-white bg-opacity-20 flex items-center justify-center mb-4 lg:mb-6">
                    <i class="bi bi-graph-up text-white text-xl lg:text-2xl"></i>
                </div>
                <h3 class="text-lg lg:text-xl font-bold mb-3 lg:mb-4 font-heading">Suivi Biomédical</h3>
                <p class="opacity-90 text-sm lg:text-base font-body">Suivi longitudinal des paramètres biologiques pour un monitoring optimal.</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 lg:mb-16 animate-fade-in">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 font-heading">Ils nous <span class="text-primary">font confiance</span></h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto font-body">Découvrez les retours d'expérience des professionnels de santé qui utilisent nos services.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-light p-6 lg:p-8 rounded-xl hover-lift">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 rounded-full bg-primary flex items-center justify-center text-white font-bold mr-4">
                        DR
                    </div>
                    <div>
                        <h4 class="font-bold font-heading">Dr. Martin Adéoti</h4>
                        <p class="text-gray-600 text-sm font-body">Médecin Généraliste, Cotonou</p>
                    </div>
                </div>
                <p class="text-gray-600 italic text-sm lg:text-base font-body">"La précision des analyses de BioQuali est remarquable. Leur expertise en interprétation des résultats est inestimable pour ma pratique."</p>
                <div class="flex text-yellow-400 mt-4">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
            </div>
            
            <div class="bg-light p-6 lg:p-8 rounded-xl hover-lift">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 rounded-full bg-medical flex items-center justify-center text-white font-bold mr-4">
                        CH
                    </div>
                    <div>
                        <h4 class="font-bold font-heading">CHU de Cotonou</h4>
                        <p class="text-gray-600 text-sm font-body">Service de biologie médicale</p>
                    </div>
                </div>
                <p class="text-gray-600 italic text-sm lg:text-base font-body">"Nous confions nos analyses spécialisées à BioQuali depuis 3 ans. La fiabilité et les délais respectés sont exceptionnels."</p>
                <div class="flex text-yellow-400 mt-4">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                </div>
            </div>
            
            <div class="bg-light p-6 lg:p-8 rounded-xl hover-lift">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 rounded-full bg-secondary flex items-center justify-center text-white font-bold mr-4">
                        ID
                    </div>
                    <div>
                        <h4 class="font-bold font-heading">Inf. Delphine Zinsou</h4>
                        <p class="text-gray-600 text-sm font-body">Centre de santé, Porto-Novo</p>
                    </div>
                </div>
                <p class="text-gray-600 italic text-sm lg:text-base font-body">"Résultats rapides, interprétation claire et service client réactif. BioQuali est notre laboratoire de référence."</p>
                <div class="flex text-yellow-400 mt-4">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
            </div>

            <div class="bg-light p-6 lg:p-8 rounded-xl hover-lift">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 rounded-full bg-accent flex items-center justify-center text-white font-bold mr-4">
                        CP
                    </div>
                    <div>
                        <h4 class="font-bold font-heading">Dr. Sophie Bello</h4>
                        <p class="text-gray-600 text-sm font-body">Biologiste, Abomey-Calavi</p>
                    </div>
                </div>
                <p class="text-gray-600 italic text-sm lg:text-base font-body">"Un service impeccable et des analyses de grande qualité. BioQuali comprend les besoins des professionnels de santé."</p>
                <div class="flex text-yellow-400 mt-4">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter -->
<section class="py-16 bg-primary text-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 font-heading">Restez <span class="text-secondary">informé</span></h2>
            <p class="text-lg mb-8 opacity-90 font-body">Inscrivez-vous à notre newsletter pour recevoir nos nouveautés, offres spéciales et conseils d'experts.</p>
            
            <form class="flex flex-col sm:flex-row gap-4 max-w-xl mx-auto">
                <input type="email" placeholder="Votre adresse email" class="flex-grow py-3 px-4 rounded-lg text-dark focus:outline-none focus:ring-2 focus:ring-secondary font-body">
                <button type="submit" class="bg-secondary text-dark font-semibold py-3 px-6 rounded-lg hover:bg-yellow-400 transition-colors duration-300 whitespace-nowrap font-body">
                    S'inscrire
                </button>
            </form>
            
            <p class="text-sm mt-4 opacity-70 font-body">En vous inscrivant, vous acceptez notre politique de confidentialité. Vous pouvez vous désinscrire à tout moment.</p>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white py-12">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div>
                <div class="flex items-center space-x-2 mb-6">
                    <div class="w-10 h-10 rounded-full bg-primary flex items-center justify-center">
                        <i class="bi bi-hexagon text-white text-xl"></i>
                    </div>
                    <span class="text-xl font-bold text-white font-heading">Bio<span class="text-secondary">Quali</span></span>
                </div>
                <p class="text-gray-400 mb-6 text-sm lg:text-base font-body">Votre laboratoire de référence en biotechnologie et analyses médicales spécialisées au Bénin depuis 2012.</p>
                <div class="flex space-x-4">
                    <a href="#" class="w-10 h-10 rounded-full bg-gray-700 flex items-center justify-center hover:bg-primary transition-colors duration-300">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-gray-700 flex items-center justify-center hover:bg-primary transition-colors duration-300">
                        <i class="bi bi-twitter"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-gray-700 flex items-center justify-center hover:bg-primary transition-colors duration-300">
                        <i class="bi bi-linkedin"></i>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-gray-700 flex items-center justify-center hover:bg-primary transition-colors duration-300">
                        <i class="bi bi-instagram"></i>
                    </a>
                </div>
            </div>
            
            <div>
                <h3 class="text-lg font-bold mb-6 font-heading">Liens rapides</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-300 text-sm lg:text-base font-body">Accueil</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-300 text-sm lg:text-base font-body">Tests</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-300 text-sm lg:text-base font-body">Équipements</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-300 text-sm lg:text-base font-body">Analyses</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-300 text-sm lg:text-base font-body">Services</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-300 text-sm lg:text-base font-body">Contact</a></li>
                </ul>
            </div>
            
            <div>
                <h3 class="text-lg font-bold mb-6 font-heading">Domaines d'expertise</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-300 text-sm lg:text-base font-body">Biologie Moléculaire</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-300 text-sm lg:text-base font-body">Biochimie Clinique</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-300 text-sm lg:text-base font-body">Microbiologie</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-300 text-sm lg:text-base font-body">Tests Rapides</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-300 text-sm lg:text-base font-body">Génétique Médicale</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-300 text-sm lg:text-base font-body">Immunologie</a></li>
                </ul>
            </div>
            
            <div>
                <h3 class="text-lg font-bold mb-6 font-heading">Contact</h3>
                <ul class="space-y-4">
                    <li class="flex items-start">
                        <i class="bi bi-geo-alt text-secondary mr-3 mt-1"></i>
                        <span class="text-gray-400 text-sm lg:text-base font-body">Avenue de la Biotechnologie<br>Cotonou, Bénin</span>
                    </li>
                    <li class="flex items-center">
                        <i class="bi bi-telephone text-secondary mr-3"></i>
                        <span class="text-gray-400 text-sm lg:text-base font-body">+229 21 30 45 60</span>
                    </li>
                    <li class="flex items-center">
                        <i class="bi bi-envelope text-secondary mr-3"></i>
                        <span class="text-gray-400 text-sm lg:text-base font-body">contact@bioquali.bj</span>
                    </li>
                    <li class="flex items-center">
                        <i class="bi bi-clock text-secondary mr-3"></i>
                        <span class="text-gray-400 text-sm lg:text-base font-body">Lun-Ven: 7h-19h<br>Sam: 8h-14h</span>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="border-t border-gray-700 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center">
            <p class="text-gray-400 text-sm mb-4 md:mb-0 font-body">© 2024 BioQuali Bénin. Tous droits réservés.</p>
            <div class="flex space-x-6">
                <a href="#" class="text-gray-400 hover:text-white text-sm transition-colors duration-300 font-body">Mentions légales</a>
                <a href="#" class="text-gray-400 hover:text-white text-sm transition-colors duration-300 font-body">Politique de confidentialité</a>
                <a href="#" class="text-gray-400 hover:text-white text-sm transition-colors duration-300 font-body">CGV</a>
            </div>
        </div>
    </div>
</footer>

<!-- JavaScript -->
<script>
    // Mobile bottom navigation active state
    document.addEventListener('DOMContentLoaded', function() {
        const navItems = document.querySelectorAll('.nav-item');
        const moreBtn = document.getElementById('mobile-more-btn');
        const moreMenu = document.getElementById('mobile-more-menu');
        
        navItems.forEach(item => {
            item.addEventListener('click', function(e) {
                if (!this.classList.contains('analyses-btn') && this.id !== 'mobile-more-btn') {
                    navItems.forEach(i => i.classList.remove('active'));
                    this.classList.add('active');
                    moreMenu.classList.remove('opacity-100', 'visible', 'translate-y-0');
                    moreMenu.classList.add('opacity-0', 'invisible', 'translate-y-10');
                }
            });
        });

        // More menu toggle
        moreBtn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            if (moreMenu.classList.contains('invisible')) {
                moreMenu.classList.remove('opacity-0', 'invisible', 'translate-y-10');
                moreMenu.classList.add('opacity-100', 'visible', 'translate-y-0');
            } else {
                moreMenu.classList.remove('opacity-100', 'visible', 'translate-y-0');
                moreMenu.classList.add('opacity-0', 'invisible', 'translate-y-10');
            }
        });

        // Close more menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!moreMenu.contains(e.target) && e.target !== moreBtn) {
                moreMenu.classList.remove('opacity-100', 'visible', 'translate-y-0');
                moreMenu.classList.add('opacity-0', 'invisible', 'translate-y-10');
            }
        });

        // Animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in');
                }
            });
        }, observerOptions);
        
        // Observe elements for animation
        document.querySelectorAll('section h2, section p, .bg-light, .glass').forEach(el => {
            observer.observe(el);
        });
    });
</script>
</body>
</html>