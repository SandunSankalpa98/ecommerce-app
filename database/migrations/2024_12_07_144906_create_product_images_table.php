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
        Schema::create('product_images', function (Blueprint $table) {
            $table->id('image_id');
            $table->unsignedBigInteger('product_id');
            $table->string('image_url', 255);
            $table->string('image_type', 255);
            $table->boolean('is_primary');
            $table->timestamps();
            $table->foreign('product_id') ->references('product_id') ->on('product') ->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_image');
    }
};
