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
        Schema::create('level_of_technologies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('farmer_id');
            $table->string('using_of_planting_materials')->nullable();
            $table->string('planting')->nullable();
            $table->string('sources_of_water')->nullable();
            $table->string('fertilizer')->nullable();
            $table->string('pesticides')->nullable();
            $table->string('pruning')->nullable();
            $table->string('harvesting')->nullable();
            $table->string('postharvest_handling')->nullable();
            $table->string('drying')->nullable();
            $table->string('others')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('level_of_technologies');
    }
};
