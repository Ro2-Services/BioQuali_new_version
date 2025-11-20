@extends("frontend.layouts.master")

@section("title")
Catégories Produits - BioQuali
@endsection

@section("content")

<!-- Categories Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16 animate-fade-in">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 font-serif">Nos <span class="text-primary">Catégories</span></h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">Découvrez notre gamme complète d'équipements médicaux professionnels.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white rounded-xl overflow-hidden shadow-soft hover-lift group">
                <div class="h-48 bg-cover bg-center relative" style="background-image: url('https://images.unsplash.com/photo-1559757148-5c350d0d3c56?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80')">
                    <div class="absolute inset-0 bg-primary opacity-0 group-hover:opacity-70 transition-opacity duration-300 flex items-center justify-center">
                        <span class="text-white font-semibold text-lg">Voir les produits</span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Diagnostic</h3>
                    <p class="text-gray-600 mb-4">Stéthoscopes, tensiomètres, thermomètres, otoscopes...</p>
                    <a href="#" class="text-primary font-semibold flex items-center">
                        Explorer
                        <i class="bi bi-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
            
            <div class="bg-white rounded-xl overflow-hidden shadow-soft hover-lift group">
                <div class="h-48 bg-cover bg-center relative" style="background-image: url('https://images.unsplash.com/photo-1584820927498-cfe5211fd8bf?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80')">
                    <div class="absolute inset-0 bg-medical opacity-0 group-hover:opacity-70 transition-opacity duration-300 flex items-center justify-center">
                        <span class="text-white font-semibold text-lg">Voir les produits</span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Mobilier Médical</h3>
                    <p class="text-gray-600 mb-4">Lits médicalisés, tables d'examen, chariots, sièges...</p>
                    <a href="#" class="text-primary font-semibold flex items-center">
                        Explorer
                        <i class="bi bi-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
            
            <div class="bg-white rounded-xl overflow-hidden shadow-soft hover-lift group">
                <div class="h-48 bg-cover bg-center relative" style="background-image: url('https://images.unsplash.com/photo-1584467735871-8db9ac8d55b4?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80')">
                    <div class="absolute inset-0 bg-secondary opacity-0 group-hover:opacity-70 transition-opacity duration-300 flex items-center justify-center">
                        <span class="text-white font-semibold text-lg">Voir les produits</span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Consommables</h3>
                    <p class="text-gray-600 mb-4">Gants, masques, seringues, compresses, désinfectants...</p>
                    <a href="#" class="text-primary font-semibold flex items-center">
                        Explorer
                        <i class="bi bi-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
            
            <div class="bg-white rounded-xl overflow-hidden shadow-soft hover-lift group">
                <div class="h-48 bg-cover bg-center relative" style="background-image: url('https://images.unsplash.com/photo-1586773860418-d37222d8fce3?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80')">
                    <div class="absolute inset-0 bg-accent opacity-0 group-hover:opacity-70 transition-opacity duration-300 flex items-center justify-center">
                        <span class="text-white font-semibold text-lg">Voir les produits</span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Équipement de Protection</h3>
                    <p class="text-gray-600 mb-4">Blouses, masques FFP2, lunettes, surchaussures...</p>
                    <a href="#" class="text-primary font-semibold flex items-center">
                        Explorer
                        <i class="bi bi-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection