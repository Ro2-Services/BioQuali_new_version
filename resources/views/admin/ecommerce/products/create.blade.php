<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un produit</title>
    <style>
        .form-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            font-family: Arial, sans-serif;
        }
        
        .form-group {
            margin-bottom: 15px;
        }
        
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        
        input[type="text"],
        input[type="number"],
        textarea,
        select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        
        .is-invalid {
            border-color: #dc3545 !important;
        }
        
        .invalid-feedback {
            color: #dc3545;
            font-size: 14px;
            margin-top: 5px;
            display: block;
        }
        
        .alert {
            padding: 12px;
            border-radius: 4px;
            margin-bottom: 20px;
        }
        
        .alert-success {
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            color: #155724;
        }
        
        .alert-danger {
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            color: #721c24;
        }
        
        textarea {
            height: 100px;
            resize: vertical;
        }
        
        .checkbox-group {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .checkbox-group input[type="checkbox"] {
            width: auto;
        }
        
        .btn-submit {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        
        .btn-submit:hover {
            background-color: #0056b3;
        }
        
        .required {
            color: red;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Ajouter un nouveau produit</h1>
        
        <!-- Affichage des messages de succès -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Affichage des erreurs générales -->
        @if($errors->any())
            <div class="alert alert-danger">
                <ul style="margin: 0; padding-left: 20px;">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <!-- Nom du produit (requis) -->
            <div class="form-group">
                <label for="name">Nom du produit <span class="required">*</span></label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" 
                       class="@error('name') is-invalid @enderror" required>
                @error('name')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            
            <!-- Catégorie -->
            <div class="form-group">
                <label for="category_id">Catégorie</label>
                <select id="category_id" name="category_id" class="@error('category_id') is-invalid @enderror">
                    <option value="">Sélectionnez une catégorie</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            
            <!-- Prix -->
            <div class="form-group">
                <label for="price">Prix (XOF) <span class="required">*</span></label>
                <input type="number" id="price" name="price" step="0.01" min="0" 
                       value="{{ old('price') }}" class="@error('price') is-invalid @enderror" required>
                @error('price')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            
            <!-- Ancien prix -->
            <div class="form-group">
                <label for="old_price">Ancien prix (XOF)</label>
                <input type="number" id="old_price" name="old_price" step="0.01" min="0" 
                       value="{{ old('old_price') }}" class="@error('old_price') is-invalid @enderror">
                @error('old_price')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            
            <!-- Description -->
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" class="@error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                @error('description')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            
            <!-- SKU -->
            <div class="form-group">
                <label for="sku">SKU (Numéro d'identification)</label>
                <input type="text" id="sku" name="sku" value="{{ old('sku') }}" 
                       class="@error('sku') is-invalid @enderror">
                @error('sku')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            
            <!-- Stock -->
            <div class="form-group">
                <label for="stock">Stock</label>
                <input type="number" id="stock" name="stock" min="0" value="{{ old('stock', 0) }}" 
                       class="@error('stock') is-invalid @enderror">
                @error('stock')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            
            <!-- Poids et unité -->
            <div class="form-group" style="display: flex; gap: 10px;">
                <div style="flex: 2;">
                    <label for="weight">Poids</label>
                    <input type="number" id="weight" name="weight" step="0.01" min="0" 
                           value="{{ old('weight') }}" class="@error('weight') is-invalid @enderror">
                    @error('weight')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div style="flex: 1;">
                    <label for="unit">Unité</label>
                    <select id="unit" name="unit" class="@error('unit') is-invalid @enderror">
                        <option value="">Sélectionnez</option>
                        <option value="kg" {{ old('unit') == 'kg' ? 'selected' : '' }}>kg</option>
                        <option value="g" {{ old('unit') == 'g' ? 'selected' : '' }}>g</option>
                        <option value="lb" {{ old('unit') == 'lb' ? 'selected' : '' }}>lb</option>
                        <option value="oz" {{ old('unit') == 'oz' ? 'selected' : '' }}>oz</option>
                    </select>
                    @error('unit')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            
            <!-- Statut -->
            <div class="form-group">
                <div class="checkbox-group">
                    <input type="checkbox" id="status" name="status" value="1" 
                           {{ old('status', true) ? 'checked' : '' }}>
                    <label for="status">Produit actif</label>
                </div>
                @error('status')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            
            <!-- Image -->
            <div class="form-group">
                <label for="image">Image du produit</label>
                <input type="file" id="image" name="image" accept="image/*" 
                       class="@error('image') is-invalid @enderror">
                @error('image')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            
            <!-- Devise -->
            <div class="form-group">
                <label for="currency">Devise</label>
                <select id="currency" name="currency" class="@error('currency') is-invalid @enderror">
                    <option value="XOF" {{ old('currency', 'XOF') == 'XOF' ? 'selected' : '' }}>XOF (Franc CFA)</option>
                    <option value="EUR" {{ old('currency') == 'EUR' ? 'selected' : '' }}>EUR (Euro)</option>
                    <option value="USD" {{ old('currency') == 'USD' ? 'selected' : '' }}>USD (Dollar US)</option>
                </select>
                @error('currency')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            
            <button type="submit" class="btn-submit">Ajouter le produit</button>
        </form>
    </div>
</body>
</html>