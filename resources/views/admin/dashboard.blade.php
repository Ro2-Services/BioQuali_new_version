<!DOCTYPE html>
<html lang="fr" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - BioQuali</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: '#008751',
                        secondary: '#fcd116', 
                        accent: '#e8112d',
                        medical: '#00a896',
                        dark: {
                            50: '#f8fafc',
                            100: '#f1f5f9',
                            200: '#e2e8f0',
                            300: '#cbd5e1',
                            400: '#94a3b8',
                            500: '#64748b',
                            600: '#475569',
                            700: '#334155',
                            800: '#1e293b',
                            900: '#0f172a',
                        }
                    },
                    fontFamily: {
                        'sans': ['Inter', 'system-ui', 'sans-serif'],
                        'heading': ['Montserrat', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    
    <style>
        .sidebar {
            background: linear-gradient(135deg, #1e293b 0%, #334155 100%);
        }
        
        .dark .sidebar {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
        }
        
        .stats-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
            transition: all 0.3s ease;
        }
        
        .dark .stats-card {
            background: #1e293b;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.3), 0 1px 2px 0 rgba(0, 0, 0, 0.2);
        }
        
        .stats-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .dark .stats-card:hover {
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.3), 0 10px 10px -5px rgba(0, 0, 0, 0.2);
        }
        
        .nav-item {
            transition: all 0.3s ease;
        }
        
        .nav-item.active {
            background: rgba(0, 135, 81, 0.1);
            border-left: 4px solid #008751;
        }
        
        .dark .nav-item.active {
            background: rgba(0, 135, 81, 0.2);
        }
        
        .status-badge {
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 500;
        }
        
        .status-en-cours {
            background-color: #fef3c7;
            color: #d97706;
        }
        
        .dark .status-en-cours {
            background-color: #5a4a1a;
            color: #fbbf24;
        }
        
        .status-termine {
            background-color: #d1fae5;
            color: #065f46;
        }
        
        .dark .status-termine {
            background-color: #064e3b;
            color: #34d399;
        }
        
        .status-rejete {
            background-color: #fee2e2;
            color: #dc2626;
        }
        
        .dark .status-rejete {
            background-color: #7f1d1d;
            color: #f87171;
        }
        
        .status-en-attente {
            background-color: #e0e7ff;
            color: #3730a3;
        }
        
        .dark .status-en-attente {
            background-color: #312e81;
            color: #a5b4fc;
        }
        
        /* Mobile Menu */
        .mobile-menu {
            transform: translateX(-100%);
            transition: transform 0.3s ease;
        }
        
        .mobile-menu.open {
            transform: translateX(0);
        }
        
        .overlay {
            background: rgba(0, 0, 0, 0.5);
        }
        
        /* Header responsive amélioré */
        .header-content {
            display: flex;
            align-items: flex-start;
            gap: 12px;
        }
        
        @media (min-width: 1024px) {
            .header-content {
                align-items: center;
            }
        }
        
        .header-title-container {
            flex: 1;
            min-width: 0; /* Permet le truncate */
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .stats-grid {
                grid-template-columns: 1fr;
            }
            
            .main-grid {
                grid-template-columns: 1fr;
            }
        }
        
        /* Scrollbar personnalisé */
        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }
        
        .custom-scrollbar::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }
        
        .dark .custom-scrollbar::-webkit-scrollbar-track {
            background: #334155;
        }
        
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #c1c1c1;
            border-radius: 10px;
        }
        
        .dark .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #64748b;
        }
        
        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: #a8a8a8;
        }
        
        .dark .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }
        
        /* Animation pour le mode sombre */
        .dark-mode-transition * {
            transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease;
        }
    </style>
</head>
<body class="h-full bg-gray-50 font-sans dark:bg-gray-900 dark-mode-transition">
    <!-- Mobile Menu Button - Position améliorée -->
    <div class="lg:hidden fixed top-4 left-4 z-50">
        <button id="mobileMenuButton" class="p-2 bg-white dark:bg-gray-800 rounded-lg shadow-lg">
            <i class="bi bi-list text-gray-700 dark:text-gray-300 text-xl"></i>
        </button>
    </div>

    <!-- Mobile Menu Overlay -->
    <div id="mobileOverlay" class="lg:hidden fixed inset-0 bg-black bg-opacity-50 z-40 hidden"></div>

    <div class="flex h-screen">
        <!-- Sidebar Desktop -->
        <div class="sidebar w-64 text-white flex-col hidden lg:flex">
            <!-- Logo -->
            <div class="p-6 border-b border-gray-700">
                <div class="flex items-center space-x-3">
                    <div class="w-8 h-8 rounded-lg bg-primary flex items-center justify-center">
                        <i class="bi bi-hexagon text-white text-sm"></i>
                    </div>
                    <div>
                        <h1 class="text-lg font-bold">BioQuali</h1>
                        <p class="text-xs text-gray-400">Admin Panel</p>
                    </div>
                </div>
            </div>
            
            <!-- Navigation -->
            <nav class="flex-1 p-4 space-y-2 custom-scrollbar overflow-y-auto">
                <a href="/admin/dashboard" class="nav-item active flex items-center space-x-3 p-3 rounded-lg text-white hover:bg-gray-700">
                    <i class="bi bi-speedometer2"></i>
                    <span>Dashboard</span>
                </a>
                
                <a href="/admin/analyses" class="nav-item flex items-center space-x-3 p-3 rounded-lg text-gray-300 hover:bg-gray-700 hover:text-white">
                    <i class="bi bi-clipboard2-pulse"></i>
                    <span>Analyses Médicales</span>
                    <span class="ml-auto bg-primary text-xs rounded-full px-2 py-1">24</span>
                </a>
                
                <a href="/admin/tests" class="nav-item flex items-center space-x-3 p-3 rounded-lg text-gray-300 hover:bg-gray-700 hover:text-white">
                    <i class="bi bi-vial"></i>
                    <span>Tests Biologiques</span>
                </a>
                
                <a href="/admin/equipements" class="nav-item flex items-center space-x-3 p-3 rounded-lg text-gray-300 hover:bg-gray-700 hover:text-white">
                    <i class="bi bi-cpu"></i>
                    <span>Équipements</span>
                </a>
                
                <a href="/admin/commandes" class="nav-item flex items-center space-x-3 p-3 rounded-lg text-gray-300 hover:bg-gray-700 hover:text-white">
                    <i class="bi bi-cart3"></i>
                    <span>Commandes</span>
                    <span class="ml-auto bg-accent text-xs rounded-full px-2 py-1">8</span>
                </a>
                
                <a href="/admin/livraisons" class="nav-item flex items-center space-x-3 p-3 rounded-lg text-gray-300 hover:bg-gray-700 hover:text-white">
                    <i class="bi bi-truck"></i>
                    <span>Livraisons</span>
                </a>
                
                <a href="/admin/clients" class="nav-item flex items-center space-x-3 p-3 rounded-lg text-gray-300 hover:bg-gray-700 hover:text-white">
                    <i class="bi bi-people"></i>
                    <span>Clients</span>
                </a>
                
                <a href="/admin/rapports" class="nav-item flex items-center space-x-3 p-3 rounded-lg text-gray-300 hover:bg-gray-700 hover:text-white">
                    <i class="bi bi-graph-up"></i>
                    <span>Rapports</span>
                </a>
                
                <a href="/admin/parametres" class="nav-item flex items-center space-x-3 p-3 rounded-lg text-gray-300 hover:bg-gray-700 hover:text-white">
                    <i class="bi bi-gear"></i>
                    <span>Paramètres</span>
                </a>
            </nav>
            
            <!-- User Profile -->
            <div class="p-4 border-t border-gray-700">
                <div class="flex items-center space-x-3">
                    <div class="w-8 h-8 bg-primary rounded-full flex items-center justify-center">
                        <span class="text-white text-sm font-bold">A</span>
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium text-white truncate">Admin BioQuali</p>
                        <p class="text-xs text-gray-400 truncate">Administrateur</p>
                    </div>
                    <form method="POST" action="/logout">
                        @csrf
                        <button type="submit" class="text-gray-400 hover:text-white">
                            <i class="bi bi-box-arrow-right"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Mobile Sidebar -->
        <div id="mobileMenu" class="mobile-menu lg:hidden fixed top-0 left-0 w-64 h-full sidebar text-white z-50">
            <div class="p-4 border-b border-gray-700 flex justify-between items-center">
                <div class="flex items-center space-x-3">
                    <div class="w-8 h-8 rounded-lg bg-primary flex items-center justify-center">
                        <i class="bi bi-hexagon text-white text-sm"></i>
                    </div>
                    <div>
                        <h1 class="text-lg font-bold">BioQuali</h1>
                        <p class="text-xs text-gray-400">Admin Panel</p>
                    </div>
                </div>
                <button id="closeMobileMenu" class="text-gray-400 hover:text-white">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>
            
            <nav class="p-4 space-y-2 custom-scrollbar overflow-y-auto h-[calc(100%-80px)]">
                <!-- Navigation complète pour mobile -->
                <a href="/admin/dashboard" class="nav-item active flex items-center space-x-3 p-3 rounded-lg text-white hover:bg-gray-700">
                    <i class="bi bi-speedometer2"></i>
                    <span>Dashboard</span>
                </a>
                
                <a href="/admin/analyses" class="nav-item flex items-center space-x-3 p-3 rounded-lg text-gray-300 hover:bg-gray-700 hover:text-white">
                    <i class="bi bi-clipboard2-pulse"></i>
                    <span>Analyses Médicales</span>
                    <span class="ml-auto bg-primary text-xs rounded-full px-2 py-1">24</span>
                </a>
                
                <a href="/admin/tests" class="nav-item flex items-center space-x-3 p-3 rounded-lg text-gray-300 hover:bg-gray-700 hover:text-white">
                    <i class="bi bi-vial"></i>
                    <span>Tests Biologiques</span>
                </a>
                
                <a href="/admin/equipements" class="nav-item flex items-center space-x-3 p-3 rounded-lg text-gray-300 hover:bg-gray-700 hover:text-white">
                    <i class="bi bi-cpu"></i>
                    <span>Équipements</span>
                </a>
                
                <a href="/admin/commandes" class="nav-item flex items-center space-x-3 p-3 rounded-lg text-gray-300 hover:bg-gray-700 hover:text-white">
                    <i class="bi bi-cart3"></i>
                    <span>Commandes</span>
                    <span class="ml-auto bg-accent text-xs rounded-full px-2 py-1">8</span>
                </a>
                
                <a href="/admin/livraisons" class="nav-item flex items-center space-x-3 p-3 rounded-lg text-gray-300 hover:bg-gray-700 hover:text-white">
                    <i class="bi bi-truck"></i>
                    <span>Livraisons</span>
                </a>
                
                <a href="/admin/clients" class="nav-item flex items-center space-x-3 p-3 rounded-lg text-gray-300 hover:bg-gray-700 hover:text-white">
                    <i class="bi bi-people"></i>
                    <span>Clients</span>
                </a>
                
                <a href="/admin/rapports" class="nav-item flex items-center space-x-3 p-3 rounded-lg text-gray-300 hover:bg-gray-700 hover:text-white">
                    <i class="bi bi-graph-up"></i>
                    <span>Rapports</span>
                </a>
                
                <a href="/admin/parametres" class="nav-item flex items-center space-x-3 p-3 rounded-lg text-gray-300 hover:bg-gray-700 hover:text-white">
                    <i class="bi bi-gear"></i>
                    <span>Paramètres</span>
                </a>
                
                <!-- Bouton de déconnexion dans le menu mobile -->
                <div class="pt-4 mt-4 border-t border-gray-700">
                    <form method="POST" action="/logout">
                        @csrf
                        <button type="submit" class="nav-item flex items-center space-x-3 p-3 rounded-lg text-gray-300 hover:bg-gray-700 hover:text-white w-full text-left">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Déconnexion</span>
                        </button>
                    </form>
                </div>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden lg:ml-0">
            <!-- Header - Structure améliorée -->
            <header class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                <div class="p-4 lg:p-6">
                    <!-- Structure flexible pour aligner correctement le bouton et le titre -->
                    <div class="header-content">
                        <!-- Espace pour le bouton menu mobile (invisible sur desktop) -->
                        <div class="w-10 h-10 lg:w-0 lg:h-0 flex-shrink-0"></div>
                        
                        <!-- Conteneur du titre avec gestion d'espace améliorée -->
                        <div class="header-title-container">
                            <h1 class="text-xl lg:text-2xl font-bold text-gray-900 dark:text-white">Dashboard BioQuali</h1>
                            <p class="text-gray-600 dark:text-gray-300 text-sm lg:text-base mt-1">Tableau de bord médical et gestion des équipements</p>
                        </div>
                        
                        <!-- Conteneur des actions utilisateur -->
                        <div class="flex items-center space-x-4 flex-shrink-0">
                            <div class="hidden lg:flex items-center space-x-2 bg-gray-100 dark:bg-gray-700 rounded-lg px-3 py-2">
                                <i class="bi bi-calendar3 text-gray-600 dark:text-gray-300"></i>
                                <span class="text-sm text-gray-700 dark:text-gray-300">{{ date('d M Y') }}</span>
                            </div>
                            
                            <!-- Bouton de basculement du mode sombre -->
                            <button id="themeToggle" class="p-2 text-gray-400 hover:text-gray-600 dark:hover:text-gray-300">
                                <i id="themeIcon" class="bi bi-moon text-xl"></i>
                            </button>
                            
                            <button class="p-2 text-gray-400 hover:text-gray-600 dark:hover:text-gray-300 relative">
                                <i class="bi bi-bell text-xl"></i>
                                <span class="absolute top-0 right-0 w-2 h-2 bg-red-500 rounded-full"></span>
                            </button>
                            
                            <!-- Profil utilisateur avec menu déroulant -->
                            <div class="relative">
                                <button id="userMenuButton" class="flex items-center space-x-2 text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">
                                    <div class="w-8 h-8 bg-primary rounded-full flex items-center justify-center">
                                        <span class="text-white text-sm font-bold">A</span>
                                    </div>
                                    <span class="hidden md:block">Admin BioQuali</span>
                                    <i class="bi bi-chevron-down"></i>
                                </button>
                                
                                <!-- Menu déroulant utilisateur -->
                                <div id="userMenu" class="absolute right-0 mt-2 w-48 bg-white dark:bg-gray-800 rounded-lg shadow-lg py-2 z-50 hidden">
                                    <a href="/admin/profile" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
                                        <i class="bi bi-person mr-2"></i>Mon profil
                                    </a>
                                    <a href="/admin/parametres" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
                                        <i class="bi bi-gear mr-2"></i>Paramètres
                                    </a>
                                    <div class="border-t border-gray-200 dark:border-gray-600 my-1"></div>
                                    <form method="POST" action="/logout">
                                        @csrf
                                        <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-red-600 dark:text-red-400 hover:bg-gray-100 dark:hover:bg-gray-700">
                                            <i class="bi bi-box-arrow-right mr-2"></i>Déconnexion
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Main Content -->
            <main class="flex-1 overflow-y-auto p-4 lg:p-6 custom-scrollbar">
                <!-- Stats Grid - Analyses et Tests -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-6 mb-6 lg:mb-8">
                    <!-- Analyses en Cours -->
                    <div class="stats-card p-4 lg:p-6">
                        <div class="flex items-center justify-between mb-3 lg:mb-4">
                            <h3 class="text-sm font-medium text-gray-600 dark:text-gray-300">Analyses en Cours</h3>
                            <div class="w-8 h-8 bg-yellow-100 dark:bg-yellow-900 rounded-lg flex items-center justify-center">
                                <i class="bi bi-clock-history text-yellow-600 dark:text-yellow-400"></i>
                            </div>
                        </div>
                        <div class="flex items-baseline justify-between">
                            <p class="text-xl lg:text-2xl font-bold text-gray-900 dark:text-white">18</p>
                            <span class="text-sm text-green-600 dark:text-green-400 flex items-center">
                                <i class="bi bi-arrow-up-right mr-1"></i>
                                12%
                            </span>
                        </div>
                        <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Cette semaine</p>
                    </div>

                    <!-- Analyses Terminées -->
                    <div class="stats-card p-4 lg:p-6">
                        <div class="flex items-center justify-between mb-3 lg:mb-4">
                            <h3 class="text-sm font-medium text-gray-600 dark:text-gray-300">Analyses Terminées</h3>
                            <div class="w-8 h-8 bg-green-100 dark:bg-green-900 rounded-lg flex items-center justify-center">
                                <i class="bi bi-check-circle text-green-600 dark:text-green-400"></i>
                            </div>
                        </div>
                        <div class="flex items-baseline justify-between">
                            <p class="text-xl lg:text-2xl font-bold text-gray-900 dark:text-white">42</p>
                            <span class="text-sm text-green-600 dark:text-green-400 flex items-center">
                                <i class="bi bi-arrow-up-right mr-1"></i>
                                8%
                            </span>
                        </div>
                        <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Cette semaine</p>
                    </div>

                    <!-- Analyses Rejetées -->
                    <div class="stats-card p-4 lg:p-6">
                        <div class="flex items-center justify-between mb-3 lg:mb-4">
                            <h3 class="text-sm font-medium text-gray-600 dark:text-gray-300">Analyses Rejetées</h3>
                            <div class="w-8 h-8 bg-red-100 dark:bg-red-900 rounded-lg flex items-center justify-center">
                                <i class="bi bi-x-circle text-red-600 dark:text-red-400"></i>
                            </div>
                        </div>
                        <div class="flex items-baseline justify-between">
                            <p class="text-xl lg:text-2xl font-bold text-gray-900 dark:text-white">3</p>
                            <span class="text-sm text-red-600 dark:text-red-400 flex items-center">
                                <i class="bi bi-arrow-down-right mr-1"></i>
                                2%
                            </span>
                        </div>
                        <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Cette semaine</p>
                    </div>

                    <!-- Ventes Équipements -->
                    <div class="stats-card p-4 lg:p-6">
                        <div class="flex items-center justify-between mb-3 lg:mb-4">
                            <h3 class="text-sm font-medium text-gray-600 dark:text-gray-300">Ventes Équipements</h3>
                            <div class="w-8 h-8 bg-blue-100 dark:bg-blue-900 rounded-lg flex items-center justify-center">
                                <i class="bi bi-cpu text-blue-600 dark:text-blue-400"></i>
                            </div>
                        </div>
                        <div class="flex items-baseline justify-between">
                            <p class="text-xl lg:text-2xl font-bold text-gray-900 dark:text-white">24</p>
                            <span class="text-sm text-green-600 dark:text-green-400 flex items-center">
                                <i class="bi bi-arrow-up-right mr-1"></i>
                                15%
                            </span>
                        </div>
                        <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Ce mois</p>
                    </div>
                </div>

                <!-- Second Row -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
                    <!-- Liste des Analyses Récentes -->
                    <div class="stats-card p-6">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Analyses Récentes</h3>
                            <a href="/admin/analyses" class="text-primary text-sm font-medium hover:text-green-700 dark:hover:text-green-400">
                                Voir tout
                            </a>
                        </div>
                        <div class="space-y-4">
                            @foreach([
                                ['id' => 'A-2024-001', 'patient' => 'Jean Dupont', 'type' => 'PCR COVID-19', 'status' => 'termine', 'date' => '15 Nov 2024'],
                                ['id' => 'A-2024-002', 'patient' => 'Marie Koné', 'type' => 'Biochimie Sanguine', 'status' => 'en-cours', 'date' => '15 Nov 2024'],
                                ['id' => 'A-2024-003', 'patient' => 'Paul Akpakpa', 'type' => 'Hématologie', 'status' => 'en-attente', 'date' => '14 Nov 2024'],
                                ['id' => 'A-2024-004', 'patient' => 'Alice Sossa', 'type' => 'Test VIH', 'status' => 'rejete', 'date' => '14 Nov 2024'],
                                ['id' => 'A-2024-005', 'patient' => 'Marc Adéoti', 'type' => 'Sérologie', 'status' => 'termine', 'date' => '13 Nov 2024']
                            ] as $analysis)
                            <div class="flex items-center justify-between p-3 border border-gray-200 dark:border-gray-700 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800">
                                <div class="flex-1 min-w-0">
                                    <div class="flex items-center space-x-3">
                                        <span class="status-badge status-{{ $analysis['status'] }}">
                                            {{ ucfirst($analysis['status']) }}
                                        </span>
                                        <div>
                                            <p class="text-sm font-medium text-gray-900 dark:text-white">{{ $analysis['id'] }}</p>
                                            <p class="text-xs text-gray-500 dark:text-gray-400">{{ $analysis['patient'] }}</p>
                                        </div>
                                    </div>
                                    <p class="text-sm text-gray-600 dark:text-gray-300 mt-1">{{ $analysis['type'] }}</p>
                                </div>
                                <div class="text-right">
                                    <p class="text-xs text-gray-500 dark:text-gray-400">{{ $analysis['date'] }}</p>
                                    <div class="flex space-x-2 mt-2">
                                        <button class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300" title="Modifier">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        @if($analysis['status'] === 'en-cours' || $analysis['status'] === 'en-attente')
                                        <button class="text-red-600 hover:text-red-800 dark:text-red-400 dark:hover:text-red-300" title="Rejeter">
                                            <i class="bi bi-x-circle"></i>
                                        </button>
                                        @endif
                                        <button class="text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-300" title="Supprimer">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Commandes et Livraisons -->
                    <div class="stats-card p-6">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Commandes & Livraisons</h3>
                            <a href="/admin/commandes" class="text-primary text-sm font-medium hover:text-green-700 dark:hover:text-green-400">
                                Voir tout
                            </a>
                        </div>
                        <div class="space-y-4">
                            @foreach([
                                ['id' => 'CMD-001', 'client' => 'CHU Cotonou', 'produit' => 'Microscope Professionnel', 'status' => 'livre', 'montant' => '1 200€'],
                                ['id' => 'CMD-002', 'client' => 'Labo BioTech', 'produit' => 'Centrifugeuse', 'status' => 'en-cours', 'montant' => '850€'],
                                ['id' => 'CMD-003', 'client' => 'Hôpital Parakou', 'produit' => 'Automate d\'Analyses', 'status' => 'en-attente', 'montant' => '4 500€'],
                                ['id' => 'CMD-004', 'client' => 'Clinique St Jean', 'produit' => 'Équipement PCR', 'status' => 'rejete', 'montant' => '3 200€']
                            ] as $order)
                            <div class="flex items-center justify-between p-3 border border-gray-200 dark:border-gray-700 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800">
                                <div class="flex-1 min-w-0">
                                    <div class="flex items-center space-x-3">
                                        <span class="status-badge status-{{ $order['status'] }}">
                                            {{ ucfirst($order['status']) }}
                                        </span>
                                        <div>
                                            <p class="text-sm font-medium text-gray-900 dark:text-white">{{ $order['id'] }}</p>
                                            <p class="text-xs text-gray-500 dark:text-gray-400">{{ $order['client'] }}</p>
                                        </div>
                                    </div>
                                    <p class="text-sm text-gray-600 dark:text-gray-300 mt-1">{{ $order['produit'] }}</p>
                                    <p class="text-sm font-semibold text-primary dark:text-green-400 mt-1">{{ $order['montant'] }}</p>
                                </div>
                                <div class="text-right">
                                    <div class="flex space-x-2">
                                        <button class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300" title="Modifier">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        @if($order['status'] === 'en-cours' || $order['status'] === 'en-attente')
                                        <button class="text-red-600 hover:text-red-800 dark:text-red-400 dark:hover:text-red-300" title="Rejeter">
                                            <i class="bi bi-x-circle"></i>
                                        </button>
                                        @endif
                                        <button class="text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-300" title="Supprimer">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Third Row - Actions Rapides et Graphique -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <!-- Actions Rapides -->
                    <div class="stats-card p-6">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Actions Rapides</h3>
                        <div class="grid grid-cols-2 gap-4">
                            <button class="p-4 border-2 border-dashed border-gray-300 dark:border-gray-600 rounded-lg hover:border-primary hover:bg-green-50 dark:hover:bg-green-900/20 transition-colors text-center group">
                                <i class="bi bi-plus-lg text-gray-400 dark:text-gray-500 text-xl mb-2 block group-hover:text-primary"></i>
                                <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Nouvelle Analyse</span>
                            </button>
                            <button class="p-4 border-2 border-dashed border-gray-300 dark:border-gray-600 rounded-lg hover:border-primary hover:bg-green-50 dark:hover:bg-green-900/20 transition-colors text-center group">
                                <i class="bi bi-vial text-gray-400 dark:text-gray-500 text-xl mb-2 block group-hover:text-primary"></i>
                                <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Ajouter Test</span>
                            </button>
                            <button class="p-4 border-2 border-dashed border-gray-300 dark:border-gray-600 rounded-lg hover:border-primary hover:bg-green-50 dark:hover:bg-green-900/20 transition-colors text-center group">
                                <i class="bi bi-cpu text-gray-400 dark:text-gray-500 text-xl mb-2 block group-hover:text-primary"></i>
                                <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Nouvel Équipement</span>
                            </button>
                            <button class="p-4 border-2 border-dashed border-gray-300 dark:border-gray-600 rounded-lg hover:border-primary hover:bg-green-50 dark:hover:bg-green-900/20 transition-colors text-center group">
                                <i class="bi bi-cart-plus text-gray-400 dark:text-gray-500 text-xl mb-2 block group-hover:text-primary"></i>
                                <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Nouvelle Commande</span>
                            </button>
                        </div>
                    </div>

                    <!-- Statistiques des Analyses -->
                    <div class="stats-card p-6 lg:col-span-2">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Statistiques des Analyses</h3>
                            <select class="text-sm border border-gray-300 dark:border-gray-600 rounded-lg px-3 py-1 bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300">
                                <option>7 jours</option>
                                <option>30 jours</option>
                                <option>3 mois</option>
                            </select>
                        </div>
                        <div class="h-64">
                            <canvas id="analyticsChart"></canvas>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        // Mobile Menu Functionality
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobileMenuButton');
            const closeMobileMenu = document.getElementById('closeMobileMenu');
            const mobileMenu = document.getElementById('mobileMenu');
            const mobileOverlay = document.getElementById('mobileOverlay');

            function openMobileMenu() {
                mobileMenu.classList.add('open');
                mobileOverlay.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            }

            function closeMobileMenuFunc() {
                mobileMenu.classList.remove('open');
                mobileOverlay.classList.add('hidden');
                document.body.style.overflow = 'auto';
            }

            mobileMenuButton.addEventListener('click', openMobileMenu);
            closeMobileMenu.addEventListener('click', closeMobileMenuFunc);
            mobileOverlay.addEventListener('click', closeMobileMenuFunc);

            // Navigation active state
            const navItems = document.querySelectorAll('.nav-item');
            
            navItems.forEach(item => {
                item.addEventListener('click', function() {
                    navItems.forEach(i => i.classList.remove('active'));
                    this.classList.add('active');
                    closeMobileMenuFunc(); // Close mobile menu after click
                });
            });

            // Gestion du mode sombre
            const themeToggle = document.getElementById('themeToggle');
            const themeIcon = document.getElementById('themeIcon');
            
            // Vérifier le mode stocké ou la préférence système
            if (localStorage.getItem('dark-mode') === 'true' || 
                (!localStorage.getItem('dark-mode') && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark');
                themeIcon.classList.remove('bi-moon');
                themeIcon.classList.add('bi-sun');
            }
            
            themeToggle.addEventListener('click', function() {
                document.documentElement.classList.toggle('dark');
                
                if (document.documentElement.classList.contains('dark')) {
                    localStorage.setItem('dark-mode', 'true');
                    themeIcon.classList.remove('bi-moon');
                    themeIcon.classList.add('bi-sun');
                } else {
                    localStorage.setItem('dark-mode', 'false');
                    themeIcon.classList.remove('bi-sun');
                    themeIcon.classList.add('bi-moon');
                }
            });

            // Menu déroulant utilisateur
            const userMenuButton = document.getElementById('userMenuButton');
            const userMenu = document.getElementById('userMenu');
            
            userMenuButton.addEventListener('click', function() {
                userMenu.classList.toggle('hidden');
            });
            
            // Fermer le menu utilisateur en cliquant ailleurs
            document.addEventListener('click', function(event) {
                if (!userMenuButton.contains(event.target) && !userMenu.contains(event.target)) {
                    userMenu.classList.add('hidden');
                }
            });
        });

        // Analytics Chart
        const analyticsChart = new Chart(
            document.getElementById('analyticsChart'),
            {
                type: 'bar',
                data: {
                    labels: ['PCR', 'Biochimie', 'Hématologie', 'Sérologie', 'Microbiologie', 'Tests Rapides'],
                    datasets: [
                        {
                            label: 'Analyses Terminées',
                            data: [45, 38, 29, 32, 25, 40],
                            backgroundColor: '#008751',
                            borderRadius: 4
                        },
                        {
                            label: 'Analyses en Cours',
                            data: [12, 15, 8, 10, 6, 14],
                            backgroundColor: '#fcd116',
                            borderRadius: 4
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'top',
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                drawBorder: false
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    }
                }
            }
        );
    </script>
</body>
</html>