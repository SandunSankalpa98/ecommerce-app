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
        Schema::create('product_category', function (Blueprint $table) {
            $table->id('category_id');
            $table->string('category_name', 255);
            $table->string('category_description', 255);
            $table->boolean('is_visible');
            $table->unsignedBigInteger('product_id');
            $table->timestamps();

            $table->foreign('product_id') ->references('product_id') ->on('product') ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_category');
    }
};
