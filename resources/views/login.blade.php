<!DOCTYPE html>
<html lang="fr" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion Admin - BioQuali</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        .benin-gradient {
            background: linear-gradient(-45deg, #008751, #fcd116, #e8112d, #00a896);
            background-size: 400% 400%;
            animation: benin-flag 15s ease infinite;
        }
        
        @keyframes benin-flag {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        .glass {
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.18);
        }
    </style>
</head>
<body class="h-full bg-gradient-to-br from-green-50 to-yellow-50">
    <div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <!-- En-tête -->
            <div class="text-center">
                <div class="mx-auto h-20 w-20 rounded-full benin-gradient flex items-center justify-center shadow-lg">
                    <i class="bi bi-hexagon text-white text-2xl"></i>
                </div>
                <h2 class="mt-6 text-3xl font-bold text-gray-900">
                    Bio<span class="text-transparent benin-gradient bg-clip-text">Quali</span>
                </h2>
                <p class="mt-2 text-sm text-gray-600">
                    Panel d'administration
                </p>
            </div>
            
            <!-- Messages d'erreur -->
            @if($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg">
                    <i class="bi bi-exclamation-triangle mr-2"></i>
                    {{ $errors->first() }}
                </div>
            @endif

            @if(session('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg">
                    <i class="bi bi-exclamation-triangle mr-2"></i>
                    {{ session('error') }}
                </div>
            @endif

            <!-- Formulaire de connexion -->
            <form class="mt-8 space-y-6 glass rounded-2xl p-8" action="/login" method="POST">
                @csrf
                
                <div class="space-y-4">
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input id="email" name="email" type="email" required 
                               class="appearance-none relative block w-full px-3 py-3 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 sm:text-sm"
                               placeholder="admin@bioquali.com" 
                               value="{{ old('email', 'admin@bioquali.com') }}">
                    </div>
                    
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Mot de passe</label>
                        <input id="password" name="password" type="password" required 
                               class="appearance-none relative block w-full px-3 py-3 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 sm:text-sm"
                               placeholder="Votre mot de passe"
                               value="{{ old('password', 'admin123') }}">
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember_me" name="remember" type="checkbox" class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded">
                        <label for="remember_me" class="ml-2 block text-sm text-gray-700">
                            Se souvenir de moi
                        </label>
                    </div>
                </div>

                <div>
                    <button type="submit" 
                            class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-lg text-white benin-gradient hover:shadow-lg transform hover:scale-105 transition-all duration-200">
                        <i class="bi bi-lock-fill mr-2"></i>
                        Se connecter
                    </button>
                </div>
                
                <div class="text-center">
                    <p class="text-xs text-gray-500">
                        Identifiants pré-remplis pour faciliter le test
                    </p>
                </div>
            </form>
            
            <!-- Informations de test -->
            <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                <h3 class="text-sm font-medium text-blue-800 mb-2">
                    <i class="bi bi-info-circle mr-1"></i>
                    Informations de test
                </h3>
                <div class="text-xs text-blue-700 space-y-1">
                    <p><strong>Email:</strong> admin@bioquali.com</p>
                    <p><strong>Mot de passe:</strong> admin123</p>
                    <p><strong>Rôle:</strong> Administrateur</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>