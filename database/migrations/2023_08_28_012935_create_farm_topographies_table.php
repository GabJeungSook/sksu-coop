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
        Schema::create('farm_topographies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('farmer_id');
            $table->string('name')->nullable();
            $table->string('land_tenure_status')->nullable();
            $table->string('other_tenure_status')->nullable();
            $table->string('number_of_years_in_coffee_farming')->nullable();
            $table->string('area_planted_for_coffee')->nullable();
            $table->string('number_of_planting_materials')->nullable();
            $table->string('yield')->nullable();
            $table->string('years_maturity_of_the_coffee')->nullable();
            $table->string('variety_of_coffee')->nullable();
            $table->string('area_of_expansion')->nullable();
            $table->string('diverse_with_other_crop')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('farm_topographies');
    }
};
