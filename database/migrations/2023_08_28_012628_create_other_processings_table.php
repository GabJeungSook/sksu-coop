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
        Schema::create('other_processings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('farmer_id');
            $table->string('yes_or_no')->nullable();
            $table->string('specify_if_yes')->nullable();
            $table->string('roasting')->nullable();
            $table->string('grading')->nullable();
            $table->string('cupping')->nullable();
            $table->string('specification')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('other_processings');
    }
};
