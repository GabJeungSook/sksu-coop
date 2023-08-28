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
        Schema::create('project_interventions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('farmer_id');
            $table->string('production_1')->nullable();
            $table->string('production_2')->nullable();
            $table->string('production_3')->nullable();
            $table->string('production_4')->nullable();
            $table->string('production_5')->nullable();
            $table->string('fundsources_national')->nullable();
            $table->string('fundsources_regional')->nullable();
            $table->string('fundsources_lgu')->nullable();
            $table->string('fundsources_ngo')->nullable();
            $table->string('fundsources_counterpart')->nullable();
            $table->string('postharvest_1')->nullable();
            $table->string('postharvest_2')->nullable();
            $table->string('postharvest_3')->nullable();
            $table->string('postharvest_4')->nullable();
            $table->string('postharvest_5')->nullable();
            $table->string('postharvest_fundsources_national')->nullable();
            $table->string('postharvest_fundsources_regional')->nullable();
            $table->string('postharvest_fundsources_lgu')->nullable();
            $table->string('postharvest_fundsources_ngo')->nullable();
            $table->string('postharvest_fundsources_counterpart')->nullable();
            $table->string('commercial_marketing_1')->nullable();
            $table->string('commercial_marketing_2')->nullable();
            $table->string('commercial_marketing_3')->nullable();
            $table->string('commercial_marketing_4')->nullable();
            $table->string('commercial_marketing_5')->nullable();
            $table->string('commercial_marketing_fundsources_national')->nullable();
            $table->string('commercial_marketing_fundsources_regional')->nullable();
            $table->string('commercial_marketing_fundsources_lgu')->nullable();
            $table->string('commercial_marketing_fundsources_ngo')->nullable();
            $table->string('commercial_marketing_fundsources_counterpart')->nullable();
            $table->string('training_capability_1')->nullable();
            $table->string('training_capability_2')->nullable();
            $table->string('training_capability_3')->nullable();
            $table->string('training_capability_4')->nullable();
            $table->string('training_capability_5')->nullable();
            $table->string('training_capability_fundsources_national')->nullable();
            $table->string('training_capability_fundsources_regional')->nullable();
            $table->string('training_capability_fundsources_lgu')->nullable();
            $table->string('training_capability_fundsources_ngo')->nullable();
            $table->string('training_capability_fundsources_counterpart')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_interventions');
    }
};
