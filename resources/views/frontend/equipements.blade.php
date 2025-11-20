@extends("frontend.layouts.master")

@section("title")
Nos Produits - BioQuali
@endsection

@section("content")
<!-- Featured Products -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16 animate-fade-in">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 font-serif">Produits <span class="text-primary">Phares</span></h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">Découvrez nos produits les plus populaires parmi les professionnels de santé.</p>
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
                    <h3 class="text-xl font-bold mb-2">Stéthoscope Littmann</h3>
                    <p class="text-gray-600 mb-4 text-sm">Stéthoscope cardiologique de haute précision</p>
                    <div class="flex items-center justify-between">
                        <span class="text-primary font-bold text-lg">149,90 €</span>
                        <button class="bg-primary text-white p-2 rounded-lg hover:bg-blue-700 transition-colors duration-300">
                            <i class="bi bi-cart-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="bg-light rounded-xl overflow-hidden shadow-soft hover-lift group">
                <div class="h-48 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1579684385127-1ef15d508118?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80')"></div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Tensiomètre Électronique</h3>
                    <p class="text-gray-600 mb-4 text-sm">Tensiomètre bras digital avec détection d'arythmie</p>
                    <div class="flex items-center justify-between">
                        <span class="text-primary font-bold text-lg">79,90 €</span>
                        <button class="bg-primary text-white p-2 rounded-lg hover:bg-blue-700 transition-colors duration-300">
                            <i class="bi bi-cart-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="bg-light rounded-xl overflow-hidden shadow-soft hover-lift group">
                <div class="h-48 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1599045118108-bf9954418b76?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80')"></div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Thermomètre Infrarouge</h3>
                    <p class="text-gray-600 mb-4 text-sm">Thermomètre frontal sans contact, mesure rapide</p>
                    <div class="flex items-center justify-between">
                        <span class="text-primary font-bold text-lg">49,90 €</span>
                        <button class="bg-primary text-white p-2 rounded-lg hover:bg-blue-700 transition-colors duration-300">
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
                    <h3 class="text-xl font-bold mb-2">Oxymètre de Pouls</h3>
                    <p class="text-gray-600 mb-4 text-sm">Mesure SpO2 et fréquence cardiaque, portable</p>
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-primary font-bold text-lg">39,90 €</span>
                            <span class="text-gray-400 text-sm line-through ml-2">59,90 €</span>
                        </div>
                        <button class="bg-primary text-white p-2 rounded-lg hover:bg-blue-700 transition-colors duration-300">
                            <i class="bi bi-cart-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Deuxième ligne - 4 produits -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-light rounded-xl overflow-hidden shadow-soft hover-lift group">
                <div class="h-48 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1584820927498-cfe5211fd8bf?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80')"></div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Table d'Examen</h3>
                    <p class="text-gray-600 mb-4 text-sm">Table d'examen médical réglable en hauteur</p>
                    <div class="flex items-center justify-between">
                        <span class="text-primary font-bold text-lg">899,00 €</span>
                        <button class="bg-primary text-white p-2 rounded-lg hover:bg-blue-700 transition-colors duration-300">
                            <i class="bi bi-cart-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="bg-light rounded-xl overflow-hidden shadow-soft hover-lift group">
                <div class="h-48 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1559757148-5c350d0d3c56?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80')"></div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Otoscope Numérique</h3>
                    <p class="text-gray-600 mb-4 text-sm">Otoscope avec caméra HD et écran LCD</p>
                    <div class="flex items-center justify-between">
                        <span class="text-primary font-bold text-lg">299,00 €</span>
                        <button class="bg-primary text-white p-2 rounded-lg hover:bg-blue-700 transition-colors duration-300">
                            <i class="bi bi-cart-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="bg-light rounded-xl overflow-hidden shadow-soft hover-lift group">
                <div class="h-48 bg-cover bg-center relative" style="background-image: url('https://images.unsplash.com/photo-1584467735871-8db9ac8d55b4?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80')">
                    <div class="absolute top-4 right-4 bg-medical text-white text-sm font-semibold py-1 px-3 rounded-full">
                        Nouveau
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Défibrillateur AED</h3>
                    <p class="text-gray-600 mb-4 text-sm">Défibrillateur automatique externe grand public</p>
                    <div class="flex items-center justify-between">
                        <span class="text-primary font-bold text-lg">1.299,00 €</span>
                        <button class="bg-primary text-white p-2 rounded-lg hover:bg-blue-700 transition-colors duration-300">
                            <i class="bi bi-cart-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="bg-light rounded-xl overflow-hidden shadow-soft hover-lift group">
                <div class="h-48 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1516549655669-df6654e447d9?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80')"></div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Chariot de Soins</h3>
                    <p class="text-gray-600 mb-4 text-sm">Chariot médical à tiroirs avec freins</p>
                    <div class="flex items-center justify-between">
                        <span class="text-primary font-bold text-lg">450,00 €</span>
                        <button class="bg-primary text-white p-2 rounded-lg hover:bg-blue-700 transition-colors duration-300">
                            <i class="bi bi-cart-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-12">
            <a href="#" class="inline-flex items-center bg-primary text-white font-semibold py-3 px-8 rounded-lg hover:bg-blue-700 transition-colors duration-300 hover-lift">
                Voir tous les produits
                <i class="bi bi-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>
@endsection