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
        Schema::create('payment', function (Blueprint $table) {
            $table->id('payment_id');
            $table->unsignedBigInteger('order_id');
            $table->string('payment_method', 255);
            $table->decimal('amount', 19, 0);
            $table->string('transaction_id', 255);
            $table->string('payment_status', 255);

            $table->timestamps();

            $table->foreign('order_id') ->references('order_id') ->on('order') ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment');
    }
};
