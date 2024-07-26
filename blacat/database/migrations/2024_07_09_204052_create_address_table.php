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
        Schema::create('address', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('address_line1');
            $table->string('address_line2')->nullable();
            $table->string('neighborhood');
            $table->string('city');
            $table->string('state');
            $table->string('cep');
            $table->string('country');
            $table->string('address_type')->default('house');
            $table->string('complement')->nullable();
            $table->boolean('is_primary')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('address');
    }
};
