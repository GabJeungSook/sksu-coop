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
        Schema::create('harvestings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('farmer_id');
            $table->string('pick_ripe')->nullable();
            $table->string('strip_harvesting')->nullable();
            $table->string('both')->nullable();
            $table->string('other')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('harvestings');
    }
};
