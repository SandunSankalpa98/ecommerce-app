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
        Schema::create('inventory', function (Blueprint $table) {
            $table->id('inventory_id');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('variation_id');
            $table->integer('total_quantity');
            $table->integer('reserved_quantity');
            $table->integer('available_quantity');
            $table->timestamps();

            $table->foreign('product_id') ->references('product_id') ->on('product') ->onDelete('cascade');
            $table->foreign('variation_id') ->references('variation_id') ->on('product_variation') ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory');
    }
};
