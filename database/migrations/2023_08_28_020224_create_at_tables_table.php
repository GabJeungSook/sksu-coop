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
        Schema::create('at_tables', function (Blueprint $table) {
            $table->id();
            $table->foreignId('farmer_id');
            $table->string('first')->nullable();
            $table->string('second')->nullable();
            $table->string('third')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('at_tables');
    }
};
