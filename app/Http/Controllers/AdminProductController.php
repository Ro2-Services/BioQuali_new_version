<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminProductController extends Controller {

    public function create() { 
        $categories = Category::all();
        return view('admin.ecommerce.products.create', compact('categories'));

    }
    
    public function index() {
        $products = Product::all();
        $categories = Category::all();
        $totalProducts = $products->count();
        $activeProducts = Product::where('status', 1)->count();
        return view('admin.ecommerce.products.index', compact('products', 'categories','totalProducts', 'activeProducts'));
    }

    public function show(Product $product){
        return view('admin.ecommerce.products.show', compact('product'));
    }

    public function edit(Product $product) { 
        $categories = Category::all();
        return view('admin.ecommerce.products.edit', compact('categories', 'product'));
    }

    
    public function destroy(Product $product) { 
        $product->delete();
        return redirect()->back()->with('success', 'Ce produit a ete supprimer avec succes');
    }

    public function update(Request $request, Product $product) {
        // Validation des données
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'nullable|exists:categories,id',
            'price' => 'required|numeric|min:0|max:99999999999999999999.99',
            'old_price' => 'nullable|numeric|min:0|max:99999999999999999999.99',
            'description' => 'nullable|string',
            'sku' => 'nullable|string|unique:products,sku,' . $product->id,
            'stock' => 'required|integer|min:0',
            'weight' => 'nullable|numeric|min:0|max:99999999.99',
            'unit' => 'nullable|string|max:10|in:kg,g,lb,oz',
            'status' => 'boolean',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120',
            'currency' => 'required|string|max:3|in:XOF,EUR,USD'
        ], [
            'name.required' => 'Le nom du produit est obligatoire.',
            'price.required' => 'Le prix est obligatoire.',
            'price.numeric' => 'Le prix doit être un nombre valide.',
            'price.min' => 'Le prix ne peut pas être négatif.',
            'sku.unique' => 'Ce SKU est déjà utilisé par un autre produit.',
            'stock.required' => 'La quantité en stock est obligatoire.',
            'stock.integer' => 'Le stock doit être un nombre entier.',
            'stock.min' => 'Le stock ne peut pas être négatif.',
            'image.image' => 'Le fichier doit être une image.',
            'image.mimes' => 'L\'image doit être au format JPEG, PNG, JPG, GIF ou WEBP.',
            'image.max' => 'L\'image ne doit pas dépasser 5MB.',
            'category_id.exists' => 'La catégorie sélectionnée n\'existe pas.',
            'unit.in' => 'L\'unité sélectionnée n\'est pas valide.',
            'currency.in' => 'La devise sélectionnée n\'est pas valide.'
        ]);
    
        // Validation supplémentaire pour les prix
        if ($validatedData['old_price'] && $validatedData['old_price'] <= $validatedData['price']) {
            return redirect()->back()
                ->with('error', 'L\'ancien prix doit être supérieur au prix actuel.')
                ->withInput();
        }
    
        try {
            DB::beginTransaction();
    
            // Gestion de l'image
            if ($request->hasFile('image')) {
                // Générer un nom unique pour l'image
                $imageName = 'product_' . time() . '_' . uniqid() . '.' . $request->file('image')->getClientOriginalExtension();
                
                // Stocker la nouvelle image
                $imagePath = $request->file('image')->storeAs('products', $imageName, 'public');
                $validatedData['image'] = $imagePath;
    
                // Supprimer l'ancienne image si elle existe
                if ($product->image && Storage::disk('public')->exists($product->image)) {
                    Storage::disk('public')->delete($product->image);
                }
            } else {
                // Garder l'image existante si aucune nouvelle image n'est uploadée
                $validatedData['image'] = $product->image;
            }
    
            // Gestion du statut (checkbox)
            $validatedData['status'] = $request->has('status') ? 1 : 0;
    
            // Formatage des données décimales
            $validatedData['price'] = number_format($validatedData['price'], 2, '.', '');
            if ($validatedData['old_price']) {
                $validatedData['old_price'] = number_format($validatedData['old_price'], 2, '.', '');
            }
            if ($validatedData['weight']) {
                $validatedData['weight'] = number_format($validatedData['weight'], 2, '.', '');
            }
    
            // Génération automatique du SKU si vide
            if (empty($validatedData['sku'])) {
                $validatedData['sku'] = 'PROD_' . strtoupper(uniqid());
            }
    
            // Mise à jour du produit
            $product->update($validatedData);
    
            DB::commit();
    
            // Message de succès personnalisé
            $message = "Le produit \"{$validatedData['name']}\" a été mis à jour avec succès!";
    
            // Redirection selon l'origine de la requête
            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => $message,
                    'data' => [
                        'product' => $product,
                        'redirect_url' => route('products.show', $product)
                    ]
                ]);
            }
    
            return redirect()->route('products.show', $product)
                ->with('success', $message);
    
        } catch (\Illuminate\Validation\ValidationException $e) {
            DB::rollBack();
            throw $e; // Laravel gère déjà cette exception
    
        } catch (\Exception $e) {
            DB::rollBack();
            
            // Nettoyage en cas d'erreur : supprimer l'image uploadée
            if (isset($imagePath) && Storage::disk('public')->exists($imagePath)) {
                Storage::disk('public')->delete($imagePath);
            }
    
            \Log::error('Erreur lors de la mise à jour du produit', [
                'product_id' => $product->id,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
    
            $errorMessage = "Une erreur est survenue lors de la mise à jour du produit. Veuillez réessayer.";
    
            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => $errorMessage,
                    'error' => config('app.debug') ? $e->getMessage() : null
                ], 500);
            }
    
            return redirect()->back()
                ->with('error', $errorMessage)
                ->withInput();
        }
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'nullable|exists:categories,id',
            'price' => 'required|numeric|min:0',
            'old_price' => 'nullable|numeric|min:0',
            'description' => 'nullable|string',
            'sku' => 'nullable|string|unique:products,sku',
            'stock' => 'required|integer|min:0',
            'weight' => 'nullable|numeric|min:0',
            'unit' => 'nullable|string|max:10',
            'status' => 'boolean',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'currency' => 'required|string|max:3'
        ]);

            // Gestion de l'image
            if ($request->hasFile('image')) {
                $validated['image'] = $request->file('image')->store('products', 'public');
            }

            // Gestion du statut
            $validated['status'] = $request->has('status') ? 1 : 0;

            Product::create($validated);

            return redirect()->route('products.index')
                ->with('success', 'Produit créé avec succès!');

            
    }
}

