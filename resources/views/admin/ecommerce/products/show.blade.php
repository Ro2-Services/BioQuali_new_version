<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du Produit - {{ $product->name }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .product-image {
            max-width: 100%;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        .detail-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            margin-bottom: 25px;
            transition: transform 0.2s;
        }
        .detail-card:hover {
            transform: translateY(-2px);
        }
        .price-section {
            background: linear-gradient(135deg, #28a745, #20c997);
            color: white;
            padding: 25px;
            border-radius: 12px;
            text-align: center;
        }
        .info-item {
            border-bottom: 1px solid #f0f0f0;
            padding: 15px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .info-item:last-child {
            border-bottom: none;
        }
        .badge-custom {
            font-size: 0.85em;
            padding: 8px 15px;
            border-radius: 20px;
        }
        .description-box {
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            border-left: 5px solid #007bff;
            padding: 25px;
            border-radius: 0 12px 12px 0;
            line-height: 1.7;
        }
        .action-buttons .btn {
            margin-right: 10px;
            margin-bottom: 10px;
            border-radius: 8px;
            padding: 10px 20px;
        }
        .stat-badge {
            font-size: 0.8em;
            padding: 6px 12px;
            border-radius: 15px;
        }
        .metadata {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            font-size: 0.9em;
        }
        .image-placeholder {
            background: linear-gradient(135deg, #6c757d, #495057);
            color: white;
            border-radius: 10px;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .stock-indicator {
            width: 100%;
            height: 8px;
            background-color: #e9ecef;
            border-radius: 10px;
            overflow: hidden;
            margin-top: 10px;
        }
        .stock-progress {
            height: 100%;
            border-radius: 10px;
            transition: width 0.3s ease;
        }
    </style>
</head>
<body>
    <div class="container-fluid py-4">
        <!-- En-tête avec breadcrumb -->
        <div class="row mb-4">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Produits</a></li>
                        <li class="breadcrumb-item active">Détails</li>
                    </ol>
                </nav>
                
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h1 class="h3 mb-1">Détails du Produit</h1>
                        <p class="text-muted mb-0">Informations complètes sur le produit</p>
                    </div>
                    <div class="action-buttons">
                        <a href="{{ route('products.edit', $product) }}" class="btn btn-primary">
                            <i class="fas fa-edit me-2"></i>Modifier
                        </a>
                        <form action="{{ route('products.destroy', $product) }}" method="POST" class="d-inline" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce produit ?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger">
                                <i class="fas fa-trash me-2"></i>Supprimer
                            </button>
                        </form>
                        <a href="{{ route('products.index') }}" class="btn btn-outline-secondary">
                            <i class="fas fa-arrow-left me-2"></i>Retour
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Messages d'alerte -->
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="fas fa-exclamation-triangle me-2"></i>{{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <div class="row">
            <!-- Colonne Image -->
            <div class="col-lg-5 mb-4">
                <div class="card detail-card">
                    <div class="card-body text-center">
                        @if($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" 
                                 alt="{{ $product->name }}" 
                                 class="product-image">
                        @else
                            <div class="image-placeholder">
                                <div class="text-center">
                                    <i class="fas fa-image fa-5x mb-3 opacity-50"></i>
                                    <p class="mb-0 opacity-75">Aucune image disponible</p>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Statut et métadonnées rapides -->
                <div class="card detail-card">
                    <div class="card-body">
                        <h5 class="card-title mb-3"><i class="fas fa-info-circle me-2 text-primary"></i>Statut</h5>
                        
                        <div class="row text-center">
                            <div class="col-6 mb-3">
                                <div class="p-3 border rounded">
                                    <h6 class="mb-1">Statut</h6>
                                    @if($product->status)
                                        <span class="badge bg-success badge-custom">
                                            <i class="fas fa-check me-1"></i>Actif
                                        </span>
                                    @else
                                        <span class="badge bg-secondary badge-custom">
                                            <i class="fas fa-pause me-1"></i>Inactif
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="p-3 border rounded">
                                    <h6 class="mb-1">Stock</h6>
                                    @if($product->stock > 10)
                                        <span class="badge bg-success badge-custom">
                                            <i class="fas fa-boxes me-1"></i>Disponible
                                        </span>
                                    @elseif($product->stock > 0)
                                        <span class="badge bg-warning badge-custom">
                                            <i class="fas fa-exclamation me-1"></i>Faible
                                        </span>
                                    @else
                                        <span class="badge bg-danger badge-custom">
                                            <i class="fas fa-times me-1"></i>Rupture
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <!-- Indicateur de stock -->
                        @if($product->stock > 0)
                        <div class="mt-3">
                            <div class="d-flex justify-content-between mb-1">
                                <small>Niveau de stock</small>
                                <small>{{ $product->stock }} unités</small>
                            </div>
                            <div class="stock-indicator">
                                @php
                                    $stockPercentage = min(100, ($product->stock / 50) * 100);
                                    $stockColor = $product->stock > 10 ? 'bg-success' : ($product->stock > 0 ? 'bg-warning' : 'bg-danger');
                                @endphp
                                <div class="stock-progress {{ $stockColor }}" style="width: {{ $stockPercentage }}%"></div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Colonne Informations détaillées -->
            <div class="col-lg-7">
                <!-- Informations principales -->
                <div class="card detail-card">
                    <div class="card-body">
                        <h2 class="card-title text-primary mb-3">{{ $product->name }}</h2>
                        
                        <div class="row mb-4">
                            <div class="col-md-6 mb-3">
                                <div class="price-section">
                                    <h3 class="mb-2">{{ number_format($product->price, 0, ',', ' ') }} {{ $product->currency }}</h3>
                                    @if($product->old_price && $product->old_price > $product->price)
                                        <h5 class="mb-0 opacity-75">
                                            <s>{{ number_format($product->old_price, 0, ',', ' ') }} {{ $product->currency }}</s>
                                        </h5>
                                        @php
                                            $discount = (($product->old_price - $product->price) / $product->old_price) * 100;
                                        @endphp
                                        <span class="badge bg-warning stat-badge mt-2">
                                            -{{ number_format($discount, 0) }}%
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="text-center p-4 border rounded h-100">
                                    <h4 class="text-success mb-1">{{ $product->stock }}</h4>
                                    <p class="text-muted mb-2">Unités en stock</p>
                                    @if($product->stock == 0)
                                        <span class="badge bg-danger">Rupture de stock</span>
                                    @elseif($product->stock <= 5)
                                        <span class="badge bg-warning">Stock faible</span>
                                    @else
                                        <span class="badge bg-success">Stock suffisant</span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <!-- Détails techniques -->
                        <div class="info-grid">
                            <div class="info-item">
                                <strong><i class="fas fa-barcode me-2 text-muted"></i>SKU:</strong>
                                <span class="badge bg-light text-dark">{{ $product->sku ?? 'Non défini' }}</span>
                            </div>
                            
                            <div class="info-item">
                                <strong><i class="fas fa-tags me-2 text-muted"></i>Catégorie:</strong>
                                <span>
                                    @if($product->category)
                                        <span class="badge bg-primary">{{ $product->category->name }}</span>
                                    @else
                                        <span class="text-muted">Aucune catégorie</span>
                                    @endif
                                </span>
                            </div>
                            
                            <div class="info-item">
                                <strong><i class="fas fa-weight-hanging me-2 text-muted"></i>Poids:</strong>
                                <span>
                                    @if($product->weight)
                                        <span class="badge bg-info text-white">{{ $product->weight }} {{ $product->unit ?? 'g' }}</span>
                                    @else
                                        <span class="text-muted">Non spécifié</span>
                                    @endif
                                </span>
                            </div>
                            
                            <div class="info-item">
                                <strong><i class="fas fa-money-bill-wave me-2 text-muted"></i>Devise:</strong>
                                <span class="badge bg-secondary">{{ $product->currency }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Description -->
                <div class="card detail-card">
                    <div class="card-body">
                        <h5 class="card-title mb-3">
                            <i class="fas fa-file-alt me-2 text-primary"></i>Description
                        </h5>
                        <div class="description-box">
                            @if($product->description)
                                <p class="mb-0">{{ $product->description }}</p>
                            @else
                                <p class="text-muted mb-0 italic">Aucune description disponible pour ce produit.</p>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Métadonnées -->
                <div class="card detail-card">
                    <div class="card-body">
                        <h5 class="card-title mb-3">
                            <i class="fas fa-history me-2 text-muted"></i>Historique
                        </h5>
                        <div class="metadata">
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <i class="fas fa-calendar-plus me-2 text-primary"></i>
                                    <strong>Créé le:</strong><br>
                                    <span class="text-muted">{{ $product->created_at->format('d/m/Y à H:i') }}</span>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <i class="fas fa-calendar-check me-2 text-success"></i>
                                    <strong>Modifié le:</strong><br>
                                    <span class="text-muted">{{ $product->updated_at->format('d/m/Y à H:i') }}</span>
                                </div>
                            </div>
                            @if($product->created_at != $product->updated_at)
                            <div class="row mt-2">
                                <div class="col-12">
                                    <small class="text-info">
                                        <i class="fas fa-info-circle me-1"></i>
                                        Dernière modification il y a {{ $product->updated_at->diffForHumans() }}
                                    </small>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Actions rapides -->
                <div class="card detail-card">
                    <div class="card-body">
                        <h5 class="card-title mb-3">
                            <i class="fas fa-bolt me-2 text-warning"></i>Actions Rapides
                        </h5>
                        <div class="row">
                            <div class="col-md-4 mb-2">
                                <a href="{{ route('products.edit', $product) }}" class="btn btn-outline-primary w-100">
                                    <i class="fas fa-edit me-1"></i>Éditer
                                </a>
                            </div>
                            <div class="col-md-4 mb-2">
                                <button class="btn btn-outline-success w-100" onclick="duplicateProduct({{ $product->id }})">
                                    <i class="fas fa-copy me-1"></i>Dupliquer
                                </button>
                            </div>
                            <div class="col-md-4 mb-2">
                                <form action="{{ route('products.destroy', $product) }}" method="POST" class="d-inline w-100">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger w-100" onclick="return confirm('Êtes-vous sûr ?')">
                                        <i class="fas fa-trash me-1"></i>Supprimer
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Fonction pour dupliquer un produit
        function duplicateProduct(productId) {
            if (confirm('Voulez-vous dupliquer ce produit ?')) {
                // Simuler une requête AJAX de duplication
                fetch(`/admin/ecommerce/products/${productId}/duplicate`, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json',
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('Produit dupliqué avec succès !');
                        window.location.href = data.redirect_url;
                    } else {
                        alert('Erreur lors de la duplication : ' + data.message);
                    }
                })
                .catch(error => {
                    console.error('Erreur:', error);
                    alert('Erreur lors de la duplication du produit');
                });
            }
        }

        // Auto-dismiss alerts after 5 seconds
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(function() {
                const alerts = document.querySelectorAll('.alert');
                alerts.forEach(function(alert) {
                    const bsAlert = new bootstrap.Alert(alert);
                    bsAlert.close();
                });
            }, 5000);
        });
    </script>
</body>
</html>