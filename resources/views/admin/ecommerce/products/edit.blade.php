<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier le Produit - Administration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .form-container {
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            padding: 30px;
        }
        .form-section {
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }
        .form-section:last-child {
            border-bottom: none;
        }
        .section-title {
            color: #2c3e50;
            font-weight: 600;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #3498db;
        }
        .image-preview {
            max-width: 200px;
            max-height: 200px;
            border: 2px dashed #ddd;
            border-radius: 8px;
            padding: 10px;
            display: none;
        }
        .image-preview img {
            max-width: 100%;
            max-height: 180px;
            border-radius: 5px;
        }
        .required::after {
            content: " *";
            color: #e74c3c;
        }
        .form-control:focus, .form-select:focus {
            border-color: #3498db;
            box-shadow: 0 0 0 0.2rem rgba(52, 152, 219, 0.25);
        }
        .btn-custom {
            padding: 10px 25px;
            border-radius: 6px;
            font-weight: 500;
        }
        .price-input-group {
            position: relative;
        }
        .price-input-group .form-control {
            padding-left: 40px;
        }
        .price-input-group::before {
            content: "FCFA";
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: #7f8c8d;
            font-weight: 500;
            z-index: 10;
        }
        .stock-indicator {
            height: 6px;
            background: #ecf0f1;
            border-radius: 3px;
            margin-top: 5px;
            overflow: hidden;
        }
        .stock-progress {
            height: 100%;
            border-radius: 3px;
            transition: width 0.3s ease;
        }
    </style>
</head>
<body>
    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <!-- En-tête -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Produits</a></li>
                                <li class="breadcrumb-item active">Modifier le produit</li>
                            </ol>
                        </nav>
                        <h1 class="h3 mb-0"><i class="fas fa-edit text-primary me-2"></i>Modifier le Produit</h1>
                    </div>
                    <div>
                        <a href="{{ route('products.show', $product) }}" class="btn btn-outline-secondary btn-custom">
                            <i class="fas fa-eye me-1"></i>Voir le produit
                        </a>
                        <a href="{{ route('products.index') }}" class="btn btn-light btn-custom">
                            <i class="fas fa-arrow-left me-1"></i>Retour
                        </a>
                    </div>
                </div>

                <!-- Messages d'alerte -->
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="fas fa-exclamation-triangle me-2"></i>
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                <div class="form-container">
                    <form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data" id="productForm">
                        @csrf
                        @method('PUT')

                        <!-- Section Informations de base -->
                        <div class="form-section">
                            <h3 class="section-title"><i class="fas fa-info-circle me-2"></i>Informations de base</h3>
                            
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="mb-3">
                                        <label for="name" class="form-label required">Nom du produit</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                               id="name" name="name" value="{{ old('name', $product->name) }}" required>
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="category_id" class="form-label">Catégorie</label>
                                        <select class="form-select @error('category_id') is-invalid @enderror" 
                                                id="category_id" name="category_id">
                                            <option value="">Sélectionnez une catégorie</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}" 
                                                    {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" 
                                          id="description" name="description" rows="4">{{ old('description', $product->description) }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <div class="form-text">Décrivez brièvement votre produit.</div>
                            </div>
                        </div>

                        <!-- Section Prix et Stock -->
                        <div class="form-section">
                            <h3 class="section-title"><i class="fas fa-tag me-2"></i>Prix et Stock</h3>
                            
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="price" class="form-label required">Prix actuel</label>
                                        <div class="price-input-group">
                                            <input type="number" class="form-control @error('price') is-invalid @enderror" 
                                                   id="price" name="price" step="0.01" min="0" 
                                                   value="{{ old('price', $product->price) }}" required>
                                        </div>
                                        @error('price')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="old_price" class="form-label">Ancien prix</label>
                                        <div class="price-input-group">
                                            <input type="number" class="form-control @error('old_price') is-invalid @enderror" 
                                                   id="old_price" name="old_price" step="0.01" min="0" 
                                                   value="{{ old('old_price', $product->old_price) }}">
                                        </div>
                                        @error('old_price')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <div class="form-text">Laissez vide si pas de promotion.</div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="currency" class="form-label required">Devise</label>
                                        <select class="form-select @error('currency') is-invalid @enderror" 
                                                id="currency" name="currency" required>
                                            <option value="XOF" {{ old('currency', $product->currency) == 'XOF' ? 'selected' : '' }}>XOF (Franc CFA)</option>
                                            <option value="EUR" {{ old('currency', $product->currency) == 'EUR' ? 'selected' : '' }}>EUR (Euro)</option>
                                            <option value="USD" {{ old('currency', $product->currency) == 'USD' ? 'selected' : '' }}>USD (Dollar US)</option>
                                        </select>
                                        @error('currency')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="sku" class="form-label">SKU</label>
                                        <input type="text" class="form-control @error('sku') is-invalid @enderror" 
                                               id="sku" name="sku" value="{{ old('sku', $product->sku) }}">
                                        @error('sku')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <div class="form-text">Numéro d'identification unique du produit.</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="stock" class="form-label required">Stock</label>
                                        <input type="number" class="form-control @error('stock') is-invalid @enderror" 
                                               id="stock" name="stock" min="0" 
                                               value="{{ old('stock', $product->stock) }}" required>
                                        @error('stock')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <div class="stock-indicator">
                                            @php
                                                $stockPercentage = min(100, ($product->stock / 100) * 100);
                                                $stockColor = $product->stock > 20 ? 'bg-success' : ($product->stock > 0 ? 'bg-warning' : 'bg-danger');
                                            @endphp
                                            <div class="stock-progress {{ $stockColor }}" style="width: {{ $stockPercentage }}%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Section Poids et Dimensions -->
                        <div class="form-section">
                            <h3 class="section-title"><i class="fas fa-weight-hanging me-2"></i>Poids et Dimensions</h3>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="weight" class="form-label">Poids</label>
                                        <input type="number" class="form-control @error('weight') is-invalid @enderror" 
                                               id="weight" name="weight" step="0.01" min="0" 
                                               value="{{ old('weight', $product->weight) }}">
                                        @error('weight')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="unit" class="form-label">Unité</label>
                                        <select class="form-select @error('unit') is-invalid @enderror" 
                                                id="unit" name="unit">
                                            <option value="">Sélectionnez une unité</option>
                                            <option value="kg" {{ old('unit', $product->unit) == 'kg' ? 'selected' : '' }}>Kilogramme (kg)</option>
                                            <option value="g" {{ old('unit', $product->unit) == 'g' ? 'selected' : '' }}>Gramme (g)</option>
                                            <option value="lb" {{ old('unit', $product->unit) == 'lb' ? 'selected' : '' }}>Livre (lb)</option>
                                            <option value="oz" {{ old('unit', $product->unit) == 'oz' ? 'selected' : '' }}>Once (oz)</option>
                                        </select>
                                        @error('unit')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Section Image -->
                        <div class="form-section">
                            <h3 class="section-title"><i class="fas fa-image me-2"></i>Image du produit</h3>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="image" class="form-label">Image du produit</label>
                                        <input type="file" class="form-control @error('image') is-invalid @enderror" 
                                               id="image" name="image" accept="image/*">
                                        @error('image')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <div class="form-text">
                                            Formats acceptés: JPEG, PNG, GIF, SVG. Taille max: 2MB.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Aperçu de l'image</label>
                                        <div class="image-preview" id="imagePreview">
                                            @if($product->image)
                                                <img src="{{ asset('storage/' . $product->image) }}" alt="Image actuelle">
                                                <div class="mt-2">
                                                    <small class="text-muted">Image actuelle</small>
                                                </div>
                                            @else
                                                <div class="text-center text-muted">
                                                    <i class="fas fa-image fa-3x mb-2"></i>
                                                    <p class="mb-0">Aucune image</p>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Section Statut -->
                        <div class="form-section">
                            <h3 class="section-title"><i class="fas fa-toggle-on me-2"></i>Statut</h3>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-check form-switch mb-3">
                                        <input class="form-check-input" type="checkbox" id="status" name="status" value="1"
                                            {{ old('status', $product->status) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="status">
                                            Produit actif
                                        </label>
                                        <div class="form-text">
                                            Désactivez cette option pour masquer le produit du catalogue.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Boutons d'action -->
                        <div class="d-flex justify-content-between align-items-center pt-4 border-top">
                            <div>
                                <a href="{{ route('products.show', $product) }}" class="btn btn-outline-secondary">
                                    <i class="fas fa-times me-1"></i>Annuler
                                </a>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save me-1"></i>Mettre à jour le produit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Aperçu de l'image
        document.getElementById('image').addEventListener('change', function(e) {
            const preview = document.getElementById('imagePreview');
            const file = e.target.files[0];
            
            if (file) {
                const reader = new FileReader();
                
                reader.onload = function(e) {
                    preview.innerHTML = `<img src="${e.target.result}" alt="Aperçu de l'image">`;
                    preview.style.display = 'block';
                }
                
                reader.readAsDataURL(file);
            } else {
                preview.style.display = 'none';
            }
        });

        // Calcul automatique de la réduction
        document.getElementById('price').addEventListener('input', updateDiscount);
        document.getElementById('old_price').addEventListener('input', updateDiscount);

        function updateDiscount() {
            const price = parseFloat(document.getElementById('price').value) || 0;
            const oldPrice = parseFloat(document.getElementById('old_price').value) || 0;
            
            if (oldPrice > price && oldPrice > 0) {
                const discount = ((oldPrice - price) / oldPrice * 100).toFixed(1);
                // Vous pouvez afficher le pourcentage de réduction si nécessaire
                console.log(`Réduction: ${discount}%`);
            }
        }

        // Mise à jour de l'indicateur de stock
        document.getElementById('stock').addEventListener('input', function() {
            const stock = parseInt(this.value) || 0;
            const indicator = this.nextElement.nextElement;
            const progress = indicator.querySelector('.stock-progress');
            
            const percentage = Math.min(100, (stock / 100) * 100);
            let color = 'bg-danger';
            
            if (stock > 20) color = 'bg-success';
            else if (stock > 0) color = 'bg-warning';
            
            progress.className = `stock-progress ${color}`;
            progress.style.width = `${percentage}%`;
        });

        // Validation du formulaire
        document.getElementById('productForm').addEventListener('submit', function(e) {
            const price = parseFloat(document.getElementById('price').value);
            const oldPrice = parseFloat(document.getElementById('old_price').value);
            
            if (oldPrice > 0 && oldPrice <= price) {
                e.preventDefault();
                alert('L\'ancien prix doit être supérieur au prix actuel pour une promotion.');
                document.getElementById('old_price').focus();
            }
        });

        // Afficher l'aperçu de l'image actuelle
        document.addEventListener('DOMContentLoaded', function() {
            const preview = document.getElementById('imagePreview');
            if (preview.innerHTML.trim() !== '') {
                preview.style.display = 'block';
            }
        });
    </script>
</body>
</html>