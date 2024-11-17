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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('url')->nullable();
            $table->string('vin')->nullable();
            $table->string('lot_number')->nullable();
            $table->string('auction')->nullable();
            $table->string('country')->nullable();
            $table->string('sale_branch')->nullable();
            $table->string('seller')->nullable();
            $table->string('auction_date')->nullable();
            $table->string('vehicle_type')->nullable();
            $table->integer('year')->nullable();
            $table->string('make')->nullable();
            $table->string('model')->nullable();
            $table->string('color')->nullable();
            $table->string('bodytype')->nullable();
            $table->string('drive')->nullable();
            $table->string('fuel')->nullable();
            $table->string('engine')->nullable();
            $table->string('transmission')->nullable();
            $table->json('images')->nullable(); // Storing images as JSON
            $table->boolean('is_verified')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
