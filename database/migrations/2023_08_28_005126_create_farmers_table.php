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
        Schema::create('farmers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('province')->nullable();
            $table->string('municipality')->nullable();
            $table->string('residential_address')->nullable();
            $table->string('birthplace')->nullable();
            $table->string('birthplace_code')->nullable();
            $table->string('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('civil_status')->nullable();
            $table->string('ethno_linguistic_ilonggo')->nullable();
            $table->string('ethno_linguistic_cebuano')->nullable();
            $table->string('ethno_linguistic_tausog')->nullable();
            $table->string('ethno_linguistic_tboli')->nullable();
            $table->string('ethno_linguistic_tagalog')->nullable();
            $table->string('ethno_linguistic_ilocano')->nullable();
            $table->string('ethno_linguistic_maguindanaon')->nullable();
            $table->string('ethno_linguistic_blaan')->nullable();
            $table->string('ethno_linguistic_tenduray')->nullable();
            $table->string('ethno_linguistic_other')->nullable();
            $table->string('educational_attainment')->nullable();
            $table->string('other_educational_attainment')->nullable();
            $table->string('number_of_household_members')->nullable();
            $table->string('membership_in_organization')->nullable();
            $table->string('organization_name')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('farmers');
    }
};
