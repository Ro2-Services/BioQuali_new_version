<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('meta_title')->nullable();
            $table->foreignId('category_id')->nullable()->constrained('categories')->nullOnDelete();
            $table->decimal('price', 30,2)->default(0);
            $table->decimal('old_price', 30,2)->nullable();
            $table->text('description')->nullable();
            $table->string('sku')->nullable()->unique(); //num d'identification du produit
            $table->integer('stock')->default(0);
            $table->decimal('weight', 10,2)->nullable();
            $table->string('unit')->nullable();
            $table->boolean('status')->default(1);
            $table->string('image')->nullable();
            $table->string('currency')->default('XOF');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
