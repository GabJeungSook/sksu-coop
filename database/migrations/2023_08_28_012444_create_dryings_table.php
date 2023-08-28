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
        Schema::create('dryings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('farmer_id');
            $table->string('tarepaulin_or_trapal')->nullable();
            $table->string('commercial_solar_drier')->nullable();
            $table->string('all_weather_drier')->nullable();
            $table->string('raise_bed')->nullable();
            $table->string('other_specify')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dryings');
    }
};
