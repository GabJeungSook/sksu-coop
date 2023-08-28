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
        Schema::create('other_projects_given_by_other_agencies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('farmer_id');
            $table->string('name_of_project')->nullable();
            $table->string('amount')->nullable();
            $table->string('name_of_project_2')->nullable();
            $table->string('amount_2')->nullable();
            $table->string('name_of_project_3')->nullable();
            $table->string('amount_3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('other_projects_given_by_other_agencies');
    }
};
