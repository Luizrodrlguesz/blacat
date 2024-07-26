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
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->decimal('price', 10,2);
            $table->integer('quantity');
            $table->foreignId('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('brands_id')->references('id')->on('brands')->onDelete('cascade');
            $table->foreignId('category_id')->references('id')->on('category')->onDelete('cascade');
            $table->foreignId('sub_category_id')->references('id')->on('sub_category')->onDelete('cascade');
            $table->foreignId('orders_id')->references('id')->on('orders')->onDelete('cascade');
            $table->foreignId('size_id')->references('id')->on('size')->onDelete('cascade');
            $table->foreignId('product_image_id')->references('id')->on('product_image')->onDelete('cascade');
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
