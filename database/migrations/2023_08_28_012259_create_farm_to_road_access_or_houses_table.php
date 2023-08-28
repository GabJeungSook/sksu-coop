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
        Schema::create('farm_to_road_access_or_houses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('farmer_id');
            $table->string('farm_animals')->nullable();
            $table->string('farm_animals_with_vehicles')->nullable();
            $table->string('other')->nullable();
            $table->string('other_specify')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('farm_to_road_access_or_houses');
    }
};
