<!-- Desktop Navigation -->
<header class="sticky top-0 z-50 bg-white/30 backdrop-blur-md border-b border-gray-100 transition-all duration-300 desktop-nav">
    <div class="container mx-auto px-4">
        <nav class="flex items-center justify-between py-3">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex items-center space-x-3 group">
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
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-primary font-medium group relative px-4 py-2 rounded-xl transition-all duration-300 font-body">
                    <span class="flex items-center">
                        <!-- Icône 2: Maison africaine -->
                        <i class="bi bi-house-heart mr-2 text-lg"></i>
                        Accueil
                    </span>
                    <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-0 h-0.5 benin-gradient group-hover:w-3/4 transition-all duration-300"></div>
                </a>
                
                <a href="{{ route('tests') }}" class="text-gray-700 hover:text-primary font-medium group relative px-4 py-2 rounded-xl transition-all duration-300 font-body">
                    <span class="flex items-center">
                        <!-- Icône 3: Tube à essai -->
                        <i class="bi bi-vial mr-2 text-lg"></i>
                        Tests
                    </span>
                    <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-0 h-0.5 benin-gradient group-hover:w-3/4 transition-all duration-300"></div>
                </a>

                <a href="{{ route('equipements') }}" class="text-gray-700 hover:text-primary font-medium group relative px-4 py-2 rounded-xl transition-all duration-300 font-body">
                    <span class="flex items-center">
                        <!-- Icône 4: Équipement médical -->
                        <i class="bi bi-cpu mr-2 text-lg"></i>
                        Équipements
                    </span>
                    <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-0 h-0.5 benin-gradient group-hover:w-3/4 transition-all duration-300"></div>
                </a>
                
                <div class="relative group">
                    <a href="{{ route('analyses') }}" class="text-gray-700 hover:text-primary font-medium group relative px-4 py-2 rounded-xl transition-all duration-300 flex items-center font-body">
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
                
                <a href="{{ route('about') }}" class="text-gray-700 hover:text-primary font-medium group relative px-4 py-2 rounded-xl transition-all duration-300 font-body">
                    <span class="flex items-center">
                        <i class="bi bi-info-circle mr-2 text-lg"></i>
                        À propos
                    </span>
                    <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-0 h-0.5 benin-gradient group-hover:w-3/4 transition-all duration-300"></div>
                </a>
                
                <a href="{{ route('contact') }}" class="text-gray-700 hover:text-primary font-medium group relative px-4 py-2 rounded-xl transition-all duration-300 font-body">
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

<!-- Ajoute cette section avant la navigation mobile -->
<div class="lg:hidden fixed top-0 left-0 right-0 z-40 bg-white/90 backdrop-blur-md border-b border-gray-100 py-3 px-4">
    <div class="flex items-center justify-left">
        <a href="{{ route('home') }}" class="flex items-center space-x-2">
            <div class="w-10 h-10 rounded-xl benin-gradient flex items-center justify-center">
                <i class="bi bi-hexagon text-white text-sm"></i>
            </div>
            <div>
                <span class="text-2xl font-bold text-dark font-heading">Bio<span class="text-transparent benin-gradient bg-clip-text">Quali</span></span>
                <div class="text-xs text-gray-500 -mt-1 font-body">Laboratoire Béninois</div>
            </div>
        </a>
    </div>
</div>

<nav class="mobile-bottom-nav lg:hidden">
    <a href="{{ route('home') }}" class="nav-item active">
        <!-- Icône Accueil: Maison avec cœur -->
        <i class="bi bi-house-heart"></i>
        <span>Accueil</span>
    </a>
    <a href="{{ route('tests') }}" class="nav-item">
        <!-- Icône Tests: Tube à essai -->
        <i class="bi bi-vial"></i>
        <span>Tests</span>
    </a>
    <a href="{{ route('analyses') }}" class="nav-item analyses-btn active">
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
            <a href="{{ route('about') }}" class="flex items-center p-3 rounded-lg hover:bg-gray-50 transition-all duration-300">
                <i class="bi bi-info-circle text-lg text-medical mr-3"></i>
                <span class="font-medium">À propos de BioQuali</span>
            </a>
            <a href="{{ route('contact') }}" class="flex items-center p-3 rounded-lg hover:bg-gray-50 transition-all duration-300">
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