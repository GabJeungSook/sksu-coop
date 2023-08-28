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
        Schema::create('consumers_coffee_preferences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('farmer_id');
            $table->string('newly_roasted')->nullable();
            $table->string('readily_available')->nullable();
            $table->string('other_type')->nullable();
            $table->string('stick')->nullable();
            $table->string('sachet')->nullable();
            $table->string('tea_bag')->nullable();
            $table->string('glass')->nullable();
            $table->string('labelled')->nullable();
            $table->string('grams_250')->nullable();
            $table->string('grams_500')->nullable();
            $table->string('kilo_1')->nullable();
            $table->string('other_volume')->nullable();
            $table->string('habit_pleasure')->nullable();
            $table->string('social')->nullable();
            $table->string('therapeutic')->nullable();
            $table->string('other_purpose')->nullable();
            $table->string('native')->nullable();
            $table->string('nescafe_stick')->nullable();
            $table->string('etc_1')->nullable();
            $table->string('etc_2')->nullable();
            $table->string('etc_3')->nullable();
            $table->string('etc_4')->nullable();
            $table->string('consumption_per_day')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consumers_coffee_preferences');
    }
};
