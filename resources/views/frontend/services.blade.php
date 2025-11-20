@extends("frontend.layouts.master")

@section("title")
Nos Services - BioQuali
@endsection

@section("content")

<!-- Services Section -->
<section class="py-16 medical-gradient text-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16 animate-fade-in">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 font-serif">Nos <span class="text-white">Services</span></h2>
            <p class="text-lg opacity-90 max-w-2xl mx-auto">Au-delà de la vente d'équipements, nous proposons des services complets pour les professionnels de santé.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="bg-white bg-opacity-10 p-8 rounded-xl backdrop-blur-sm hover-lift">
                <div class="w-16 h-16 rounded-full bg-white bg-opacity-20 flex items-center justify-center mb-6">
                    <i class="bi bi-tools text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-4">Installation & Formation</h3>
                <p class="opacity-90">Nos techniciens installent vos équipements et forment votre personnel à leur utilisation.</p>
            </div>

            <div class="bg-white bg-opacity-10 p-8 rounded-xl backdrop-blur-sm hover-lift">
                <div class="w-16 h-16 rounded-full bg-white bg-opacity-20 flex items-center justify-center mb-6">
                    <i class="bi bi-shield-check text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-4">Maintenance & SAV</h3>
                <p class="opacity-90">Service après-vente réactif et contrats de maintenance pour assurer la longévité de vos équipements.</p>
            </div>
            
            <div class="bg-white bg-opacity-10 p-8 rounded-xl backdrop-blur-sm hover-lift">
                <div class="w-16 h-16 rounded-full bg-white bg-opacity-20 flex items-center justify-center mb-6">
                    <i class="bi bi-calendar-check text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-4">Location d'Équipements</h3>
                <p class="opacity-90">Solution de location pour répondre à vos besoins temporaires ou tester un équipement.</p>
            </div>

            <div class="bg-white bg-opacity-10 p-8 rounded-xl backdrop-blur-sm hover-lift">
                <div class="w-16 h-16 rounded-full bg-white bg-opacity-20 flex items-center justify-center mb-6">
                    <i class="bi bi-graph-up text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-4">Audit & Conseil</h3>
                <p class="opacity-90">Analyse de vos besoins et recommandations pour optimiser votre équipement médical.</p>
            </div>
        </div>
    </div>
</section>

@endsection