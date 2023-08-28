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
        Schema::create('plantings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('farmer_id');
            $table->string('sources_of_planting_material_own_from_seeds')->nullable();
            $table->string('sources_of_planting_material_from_nursery_anywhere')->nullable();
            $table->string('sources_of_planting_material_from_accredited_nursery')->nullable();
            $table->string('other_sources_of_planting_material')->nullable();
            $table->string('planting')->nullable();
            $table->string('other_planting')->nullable();
            $table->string('distance')->nullable();
            $table->string('source_of_water_irrigation')->nullable();
            $table->string('source_of_water_rainfed')->nullable();
            $table->string('other_source_of_water')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plantings');
    }
};
