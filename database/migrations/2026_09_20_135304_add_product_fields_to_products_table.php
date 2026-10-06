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
        Schema::table('products', function (Blueprint $table) {

                // $table->foreignId('category_id')
                //     ->nullable()
                //     ->after('name')
                //     ->constrained('categories')
                //     ->nullOnDelete();

                // $table->foreignId('brand_id')
                //     ->nullable()
                //     ->after('category_id')
                //     ->constrained('brands')
                //     ->nullOnDelete();

                // $table->foreignId('unit_id')
                //     ->nullable()
                //     ->after('brand_id')
                //     ->constrained('units')
                //     ->nullOnDelete();

                // $table->decimal('tax_rate', 5, 2)
                //     ->default(0)
                //     ->after('unit_id');

                // $table->boolean('status')
                //     ->default(1)
                //     ->after('tax_rate');

            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
};
