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
        Schema::create('cart_item', function (Blueprint $table) {
            $table->id('cart_item_id');
            $table->unsignedBigInteger('cart_id');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('variation_id');
            $table->integer('quantity');
            $table->decimal('unit_price', 19, 0);
            $table->timestamp('added_at')->useCurrent();
            $table->timestamps();

            $table->foreign('cart_id') ->references('cart_id') ->on('cart') ->onDelete('cascade');
            $table->foreign('product_id') ->references('product_id') ->on('product') ->onDelete('cascade');
            $table->foreign('variation_id') ->references('variation_id') ->on('product_variation') ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart_item');
    }
};
