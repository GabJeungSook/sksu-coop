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
        Schema::create('problems_encountered_in_the_chain_of_coffees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('farmer_id');
            $table->string('production_1')->nullable();
            $table->string('production_2')->nullable();
            $table->string('production_3')->nullable();
            $table->string('production_4')->nullable();
            $table->string('production_5')->nullable();
            $table->string('postharvest_1')->nullable();
            $table->string('postharvest_2')->nullable();
            $table->string('postharvest_3')->nullable();
            $table->string('postharvest_4')->nullable();
            $table->string('postharvest_5')->nullable();
            $table->string('commercial_marketing_1')->nullable();
            $table->string('commercial_marketing_2')->nullable();
            $table->string('commercial_marketing_3')->nullable();
            $table->string('commercial_marketing_4')->nullable();
            $table->string('commercial_marketing_5')->nullable();
            $table->string('postharvest_2_1')->nullable();
            $table->string('postharvest_2_2')->nullable();
            $table->string('postharvest_2_3')->nullable();
            $table->string('postharvest_2_4')->nullable();
            $table->string('postharvest_2_5')->nullable();
            $table->string('commercial_2_marketing_1')->nullable();
            $table->string('commercial_2_marketing_2')->nullable();
            $table->string('commercial_2_marketing_3')->nullable();
            $table->string('commercial_2_marketing_4')->nullable();
            $table->string('commercial_2_marketing_5')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('problems_encountered_in_the_chain_of_coffees');
    }
};
