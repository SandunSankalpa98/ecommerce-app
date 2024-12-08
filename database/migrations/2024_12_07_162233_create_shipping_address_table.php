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
        Schema::create('shipping_address', function (Blueprint $table) {
            $table->id('address_id');
            $table->unsignedBigInteger('user_id');
            $table->string('address_type', 255);
            $table->string('recipient_name', 255);
            $table->string('street_address', 255);
            $table->string('apartment_unit', 255)->nullable();
            $table->string('city', 255);
            $table->string('state', 255);
            $table->string('postal_code', 255);
            $table->string('country', 255);
            $table->boolean('is_default');
            $table->timestamps();

            $table->foreign('user_id') ->references('user_id') ->on('users') ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipping_address');
    }
};
