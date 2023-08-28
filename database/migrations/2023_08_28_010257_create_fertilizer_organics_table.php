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
        Schema::create('fertilizer_organics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('farmer_id');
            $table->string('name')->nullable();
            $table->string('number_of_bags')->nullable();
            $table->string('frequency_of_application_per_year')->nullable();
            $table->string('amount_per_bag')->nullable();
            $table->string('other')->nullable();
            $table->string('number_of_bags_2')->nullable();
            $table->string('frequency_of_application_per_year_2')->nullable();
            $table->string('amount_per_gram')->nullable();
            $table->string('other_2')->nullable();
            $table->string('number_of_bags_3')->nullable();
            $table->string('frequency_of_application_per_year_3')->nullable();
            $table->string('amount_per_gram_2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fertilizer_organics');
    }
};
