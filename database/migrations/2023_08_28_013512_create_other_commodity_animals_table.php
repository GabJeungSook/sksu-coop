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
        Schema::create('other_commodity_animals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('farmer_id');
            $table->string('number_of_heads_cow')->nullable();
            $table->string('number_of_heads_carabao')->nullable();
            $table->string('number_of_heads_goat')->nullable();
            $table->string('number_of_heads_pig')->nullable();
            $table->string('number_of_heads_duck')->nullable();
            $table->string('number_of_heads_chicken')->nullable();
            $table->string('other')->nullable();
            $table->string('number_of_heads_other')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('other_commodity_animals');
    }
};
