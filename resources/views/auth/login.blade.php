<!DOCTYPE html>
<html lang="fr" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion Admin - BioQuali</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#008751',
                        secondary: '#fcd116', 
                        accent: '#e8112d',
                        medical: '#00a896',
                        dark: '#1e293b',
                        light: '#f8fafc'
                    },
                    fontFamily: {
                        'heading': ['Montserrat', 'sans-serif'],
                        'body': ['Inter', 'sans-serif']
                    }
                }
            }
        }
    </script>
    
    <style>
        .medical-pattern {
            background-color: #ffffff;
            background-image: 
                radial-gradient(#0087510a 1.5px, transparent 1.5px),
                radial-gradient(#00a8960a 1.5px, transparent 1.5px);
            background-size: 60px 60px;
            background-position: 0 0, 30px 30px;
        }
        
        .benzene-logo {
            background: conic-gradient(from 0deg, #008751, #00a896, #fcd116, #008751);
            -webkit-mask: radial-gradient(circle, transparent 50%, black 51%);
            mask: radial-gradient(circle, transparent 50%, black 51%);
        }
        
        .floating {
            animation: floating 4s ease-in-out infinite;
        }
        
        @keyframes floating {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-10px) rotate(2deg); }
        }
        
        .pulse-ring {
            animation: pulse-ring 3s ease-in-out infinite;
        }
        
        @keyframes pulse-ring {
            0% { transform: scale(0.8); opacity: 0.8; }
            50% { transform: scale(1.1); opacity: 0.4; }
            100% { transform: scale(0.8); opacity: 0.8; }
        }
        
        .slide-in {
            animation: slideIn 0.8s ease-out forwards;
        }
        
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(30px) scale(0.95);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }
        
        .technician-1 {
            animation: technician1 6s ease-in-out infinite;
        }
        
        .technician-2 {
            animation: technician2 7s ease-in-out infinite 1s;
        }
        
        .technician-3 {
            animation: technician3 8s ease-in-out infinite 2s;
        }
        
        @keyframes technician1 {
            0%, 100% { transform: translateX(0px) translateY(0px); }
            25% { transform: translateX(10px) translateY(-5px); }
            50% { transform: translateX(5px) translateY(5px); }
            75% { transform: translateX(-5px) translateY(-3px); }
        }
        
        @keyframes technician2 {
            0%, 100% { transform: translateX(0px) translateY(0px) rotate(0deg); }
            33% { transform: translateX(-8px) translateY(3px) rotate(-2deg); }
            66% { transform: translateX(5px) translateY(-2px) rotate(2deg); }
        }
        
        @keyframes technician3 {
            0%, 100% { transform: translateX(0px) scale(1); }
            50% { transform: translateX(-5px) scale(1.05); }
        }
        
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600&display=swap');
    </style>
</head>
<body class="h-full medical-pattern font-body">
    <!-- Biotechniciens en arrière-plan -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
        <!-- Technicien 1 - Microscope -->
        <div class="absolute top-1/4 left-1/6 technician-1">
            <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center">
                <i class="bi bi-microwave text-primary text-2xl"></i>
            </div>
        </div>
        
        <!-- Technicien 2 - Tube à essai -->
        <div class="absolute top-1/3 right-1/5 technician-2">
            <div class="w-14 h-14 bg-medical/10 rounded-full flex items-center justify-center">
                <i class="bi bi-vial text-medical text-xl"></i>
            </div>
        </div>
        
        <!-- Technicien 3 - Ordinateur -->
        <div class="absolute bottom-1/4 left-1/4 technician-3">
            <div class="w-12 h-12 bg-secondary/10 rounded-full flex items-center justify-center">
                <i class="bi bi-laptop text-secondary text-lg"></i>
            </div>
        </div>
        
        <!-- Équipements supplémentaires -->
        <div class="absolute top-1/6 right-1/4 floating">
            <div class="w-10 h-10 bg-accent/10 rounded-full flex items-center justify-center">
                <i class="bi bi-cpu text-accent text-lg"></i>
            </div>
        </div>
        
        <div class="absolute bottom-1/3 right-1/6 floating" style="animation-delay: 2s;">
            <div class="w-8 h-8 bg-primary/10 rounded-full flex items-center justify-center">
                <i class="bi bi-droplet text-primary text-sm"></i>
            </div>
        </div>
    </div>

    <div class="min-h-full flex items-center justify-center py-8 px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-md w-full space-y-8">
            <!-- En-tête centrée -->
            <div class="text-center slide-in" style="animation-delay: 0.2s;">
                <!-- Logo Benzène
                <div class="flex items-center justify-center mb-6">
                    <div class="relative">
                        <div class="w-10 h-10 bi-hexagon flex items-center justify-center shadow-xl floating">
                            <div class="w-16 h-16 bg-white flex items-center justify-center shadow-inner">
                                <i class="bi bi-hexagon text-primary text-2xl font-bold"></i>
                            </div>
                        </div>
                        <div class="absolute -inset-3 bg-primary/20 rounded-full pulse-ring"></div>
                    </div>
                </div> -->
                
                <!-- Texte du logo -->
                <div class="mt-4">
                    <h1 class="text-4xl font-bold text-dark font-heading">
                        Bio<span class="text-primary">Quali</span>
                    </h1>
                    <p class="text-gray-600 mt-2 text-sm font-body">
                        Laboratoire d'Analyses Médicales | Connexion Administrateur
                    </p>
                </div>
                
                <!-- Titre de connexion -->
                <!-- <div class="mt-6">
                    <h2 class="text-2xl font-semibold text-dark font-heading">
                        Connexion Administrateur
                    </h2>
                    <p class="text-gray-500 mt-2 text-sm font-body">
                        Accédez à votre tableau de bord médical
                    </p>
                </div> -->
            </div>

            <!-- Formulaire de connexion -->
            <form class="mt-8 space-y-6 bg-white rounded-2xl p-8 shadow-lg border border-gray-100 slide-in" 
                  style="animation-delay: 0.4s;" action="/login" method="POST">
                @csrf
                
                <div class="space-y-6">
                    <!-- Champ Email -->
                    <div class="space-y-3">
                        <label for="email" class="block text-sm font-semibold text-gray-700 font-body">
                            <i class="bi bi-envelope mr-2 text-primary"></i>
                            Adresse Email
                        </label>
                        <div class="relative">
                            <input id="email" name="email" type="email" required 
                                   class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all duration-300 text-gray-700 placeholder-gray-400 font-body bg-gray-50/50"
                                   placeholder="admin@bioquali.com" 
                                   value="{{ old('email', 'admin@bioquali.com') }}">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                <i class="bi bi-check-circle-fill text-green-500"></i>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Champ Mot de passe avec toggle -->
                    <div class="space-y-3">
                        <label for="password" class="block text-sm font-semibold text-gray-700 font-body">
                            <i class="bi bi-shield-lock mr-2 text-primary"></i>
                            Mot de passe
                        </label>
                        <div class="relative">
                            <input id="password" name="password" type="password" required 
                                   class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all duration-300 text-gray-700 placeholder-gray-400 pr-12 font-body bg-gray-50/50"
                                   placeholder="Votre mot de passe"
                                   value="{{ old('password', 'admin123') }}">
                            <button type="button" 
                                    class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-primary transition-colors duration-200"
                                    onclick="togglePassword()">
                                <i id="password-icon" class="bi bi-eye"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Options -->
                <div class="flex items-center justify-between pt-4">
                    <div class="flex items-center">
                        <input id="remember_me" name="remember" type="checkbox" 
                               class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded transition-all duration-200">
                        <label for="remember_me" class="ml-2 block text-sm text-gray-700 font-medium font-body">
                            Se souvenir de moi
                        </label>
                    </div>
                    <a href="#" class="text-sm font-medium text-primary hover:text-green-700 transition-colors duration-200 font-body">
                        Mot de passe oublié ?
                    </a>
                </div>

                <!-- Bouton de connexion -->
                <div class="pt-6">
                    <button type="submit" 
                            class="group relative w-full flex justify-center items-center py-3 px-6 border border-transparent text-base font-bold rounded-xl text-white bg-primary hover:bg-green-700 transform hover:scale-105 active:scale-95 transition-all duration-300 shadow-md font-heading">
                        <i class="bi bi-lock-fill mr-2 group-hover:scale-110 transition-transform duration-200"></i>
                        Se connecter
                        <i class="bi bi-arrow-right ml-2 group-hover:translate-x-1 transition-transform duration-200"></i>
                    </button>
                </div>
            </form>

            <!-- Messages d'erreur -->
            @if($errors->any())
                <div class="bg-red-50 border-l-4 border-red-500 p-4 rounded-xl shadow-sm slide-in" style="animation-delay: 0.6s;">
                    <div class="flex items-center">
                        <i class="bi bi-exclamation-triangle text-red-500 text-lg mr-3"></i>
                        <div>
                            <p class="text-red-700 font-medium font-body">Erreur de connexion</p>
                            <p class="text-red-600 text-sm mt-1 font-body">{{ $errors->first() }}</p>
                        </div>
                    </div>
                </div>
            @endif

            @if(session('error'))
                <div class="bg-red-50 border-l-4 border-red-500 p-4 rounded-xl shadow-sm slide-in" style="animation-delay: 0.6s;">
                    <div class="flex items-center">
                        <i class="bi bi-exclamation-triangle text-red-500 text-lg mr-3"></i>
                        <div>
                            <p class="text-red-700 font-medium font-body">Erreur de connexion</p>
                            <p class="text-red-600 text-sm mt-1 font-body">{{ session('error') }}</p>
                        </div>
                    </div>
                </div>
            @endif
            
            <!-- Footer -->
            <div class="text-center pt-6 slide-in" style="animation-delay: 0.8s;">
                <p class="text-gray-500 text-sm font-body">
                    &copy; 2024 BioQuali - Laboratoire d'Analyses Médicales
                </p>
                <p class="text-gray-400 text-xs mt-1 font-body">
                    Système sécurisé conforme aux normes médicales
                </p>
            </div>
        </div>
    </div>

    <script>
        // Fonction pour basculer la visibilité du mot de passe
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const passwordIcon = document.getElementById('password-icon');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                passwordIcon.classList.remove('bi-eye');
                passwordIcon.classList.add('bi-eye-slash');
                passwordIcon.classList.add('text-primary');
            } else {
                passwordInput.type = 'password';
                passwordIcon.classList.remove('bi-eye-slash', 'text-primary');
                passwordIcon.classList.add('bi-eye');
            }
        }
        
        // Animation d'entrée au chargement
        document.addEventListener('DOMContentLoaded', function() {
            // Les éléments avec la classe slide-in s'animent automatiquement
            const elements = document.querySelectorAll('.slide-in');
            elements.forEach(element => {
                element.style.opacity = '0';
            });
            
            setTimeout(() => {
                elements.forEach(element => {
                    element.style.opacity = '1';
                });
            }, 100);
        });
        
        // Effets interactifs pour les inputs
        const inputs = document.querySelectorAll('input[type="email"], input[type="password"]');
        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('ring-2', 'ring-primary/30');
                this.style.background = 'rgba(248, 250, 252, 1)';
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.classList.remove('ring-2', 'ring-primary/30');
                this.style.background = 'rgba(248, 250, 252, 0.5)';
            });
        });
    </script>
</body>
</html>