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
        Schema::create('area_planted_with_other_crops', function (Blueprint $table) {
            $table->id();
            $table->foreignId('farmer_id');
            $table->string('rice')->nullable();
            $table->string('corn')->nullable();
            $table->string('vegetables')->nullable();
            $table->string('fruits')->nullable();
            $table->string('other')->nullable();
            $table->string('total_land_area')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('area_planted_with_other_crops');
    }
};
