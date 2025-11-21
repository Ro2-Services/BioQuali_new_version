@extends("frontend.layouts.master")
@section("title")
BioQuali | Laboratoire de Biotechnologie & Analyses Médicales - Bénin
@endsection
@section("content")
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

   {{-- {{ $product->name }}
    {{ $product->price }}
    {{ $product->description }}
    {{ $product->category->name }} --}}



    <!-- Main Content -->
    <div class="relative z-10 container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Image Content - LEFT -->
            <div class="relative order-2 lg:order-1 animate-slide-up">
                <div class="relative z-10">
                    <!-- Main Hero Image -->
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                        <img 
                            src="{{ asset('images/biolab.jpg') }}"
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
                    <span class="text-dark">Excellence Médicale</span>
                    <span class="block text-transparent benin-gradient bg-clip-text">Béninoise</span>
                    <span class="text-dark">BioQuali</span>
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
<section class="py-16 bg-dark text-white">
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
<!-- <section class="py-16 bg-primary text-white">
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
</section> -->
@endsection