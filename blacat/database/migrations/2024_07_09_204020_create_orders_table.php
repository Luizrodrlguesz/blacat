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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('order_number')->unique();
            $table->string('status')->default('pending');
            $table->decimal('total_amount', 10,2);
            $table->integer('quantity');
            $table->string('payment_method');
            $table->string('payment_status')->default('pending');
            $table->json('shipping_address');
            $table->json('billing_address');
            $table->decimal('shipping_cost', 10, 2)->nullable();
            $table->string('tracking_number')->nullable();
            $table->timestamp('placed_at')->nullable();
            $table->timestamp('paid_at')->nullable();
            $table->timestamp('shipped_at')->nullable();
            $table->timestamp('delivered_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
