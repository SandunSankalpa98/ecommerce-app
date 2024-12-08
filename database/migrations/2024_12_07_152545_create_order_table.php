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
        Schema::create('order', function (Blueprint $table) {
            $table->id('order_id');
            $table->unsignedBigInteger('user_id');
            $table->string('order_number', 255);
            $table->decimal('subtotal', 19, 0);
            $table->float('shipping_cost', 10);
            $table->decimal('total_amount', 19, 0);
            $table->string('order_status', 255);
            $table->date('delivery_date');
            $table->timestamps();

            $table->foreign('user_id') ->references('user_id') ->on('users') ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};
