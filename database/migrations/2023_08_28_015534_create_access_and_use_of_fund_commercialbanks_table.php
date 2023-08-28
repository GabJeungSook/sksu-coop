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
        Schema::create('access_and_use_of_fund_commercialbanks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('farmer_id');
            $table->string('name')->nullable();
            $table->string('number_of_years_for_payment')->nullable();
            $table->string('interest_rate')->nullable();
            $table->string('amount')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('access_and_use_of_fund_commercialbanks');
    }
};
