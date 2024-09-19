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
            $table->string('vehicle_lot_url')->nullable();
            $table->string('vehicle_lot_number')->nullable();
            $table->string('vehicle_retail_value')->nullable();
            $table->string('vehicle_sale_date')->nullable();
            $table->string('vehicle_year')->nullable();
            $table->string('vehicle_make')->nullable();
            $table->string('vehicle_model')->nullable();
            $table->string('vehicle_engine_type')->nullable();
            $table->string('vehicle_cylinders')->nullable();
            $table->string('vehicle_vin')->nullable();
            $table->string('vehicle_title_code')->nullable();
            $table->string('vehicle_odometer')->nullable();
            $table->string('vehicle_odometer_description')->nullable();
            $table->string('vehicle_damage_description')->nullable();
            $table->string('vehicle_current_bid')->nullable();
            $table->string('vehicle_my_bid')->nullable();
            $table->string('vehicle_item_number')->nullable();
            $table->string('vehicle_sale_name')->nullable();
            
           
            $table->timestamps();
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
