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
        Schema::create('farmer_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('farmer_id');
            $table->string('name')->nullable();
            $table->string('organization_name')->nullable();
            $table->string('years_of_establishment')->nullable();
            $table->string('resource_available')->nullable();
            $table->string('sponsoring_agent')->nullable();
            $table->string('amount')->nullable();
            $table->string('sponsoring_agent_2')->nullable();
            $table->string('amount_2')->nullable();
            $table->string('sponsoring_agent_3')->nullable();
            $table->string('amount_3')->nullable();
            $table->string('sponsoring_agent_4')->nullable();
            $table->string('amount_4')->nullable();
            $table->string('sponsoring_agent_5')->nullable();
            $table->string('amount_5')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('farmer_details');
    }
};
