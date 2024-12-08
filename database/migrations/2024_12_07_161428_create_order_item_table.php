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
        Schema::create('order_item', function (Blueprint $table) {
            $table->id('order_item_id');
            $table->unsignedBigInteger('order_id');
            $table->integer('qty');
            $table->decimal('unit_price', 19, 0);
            $table->decimal('total_price', 19, 0);
            $table->unsignedBigInteger('product_id');
            $table->decimal('variation_id', 19, 0);
            $table->timestamps();

            $table->foreign('order_id') ->references('order_id') ->on('order') ->onDelete('cascade'); 
            $table->foreign('product_id') ->references('product_id') ->on('product') ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_item');
    }
};
