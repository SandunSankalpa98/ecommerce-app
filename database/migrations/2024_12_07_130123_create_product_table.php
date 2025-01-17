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
        Schema::create('product', function (Blueprint $table) {
            $table->id('product_id');
            $table->string('product_name', 255);
            $table->string('product_code', 255);
            $table->string('product_description', 255);
            $table->decimal('Product_Entity', 10, 2);
            $table->decimal('discount_price', 10, 2);
            $table->string('manufacturer', 255);
            $table->string('brand', 255);
            $table->boolean('isActive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
