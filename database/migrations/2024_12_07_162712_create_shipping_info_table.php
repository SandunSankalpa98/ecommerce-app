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
        Schema::create('shipping_info', function (Blueprint $table) {
            $table->id('shipping_id');
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('address_id');
            $table->string('shipping_method', 255);
            $table->decimal('shipping_cost', 19, 0);
            $table->string('tracking_number', 255);
            $table->date('delivery_date');

            $table->timestamps();

            $table->foreign('order_id') ->references('order_id') ->on('order') ->onDelete('cascade');
            $table->foreign('address_id') ->references('address_id') ->on('shipping_address') ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipping_info');
    }
};
