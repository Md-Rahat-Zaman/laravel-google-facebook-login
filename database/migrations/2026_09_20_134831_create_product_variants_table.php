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
        Schema::create('product_variants', function (Blueprint $table) {
                $table->id();

                $table->foreignId('product_id')
                    ->constrained()
                    ->cascadeOnDelete();

                $table->foreignId('color_id')
                    ->nullable()
                    ->constrained()
                    ->nullOnDelete();

                $table->foreignId('size_id')
                    ->nullable()
                    ->constrained()
                    ->nullOnDelete();

                $table->string('sku')->nullable()->unique();
                $table->string('barcode')->nullable()->unique();

                $table->decimal('purchase_price', 12, 2)->default(0);
                $table->decimal('sale_price', 12, 2)->default(0);

                $table->decimal('stock', 12, 2)->default(0);
                $table->decimal('minimum_stock', 12, 2)->default(0);

                $table->boolean('status')->default(1);

                $table->timestamps();

                $table->unique(
                    ['product_id', 'color_id', 'size_id'],
                    'product_variant_unique'
                );
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_variants');
    }
};
