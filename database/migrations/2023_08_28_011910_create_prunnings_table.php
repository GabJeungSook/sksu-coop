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
        Schema::create('prunnings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('farmer_id');
            $table->string('yes')->nullable();
            $table->string('no')->nullable();
            $table->string('how_often')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prunnings');
    }
};
