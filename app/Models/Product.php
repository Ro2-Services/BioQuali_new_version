<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
// use Spatie\MediaLibrary\MediaCollections\Models\Media;
// use Spatie\MediaLibrary\HasMedia;
// use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Support\Str;
// use Spatie\Image\Enums\Fit;

class Product extends Model {
    use HasFactory;

    protected $fillable = [
        'category_id', 'sku', 'name', 'description',
        'price', 'old_price', 'currency', 'stock',
        'type', 'weight', 'unit', 'status', 'image','meta_title',
    ];


    protected $casts = [
        'status' => 'boolean',
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }


    public function skus() {
        return $this->hasMany(ProductSku::class);
    }
}
