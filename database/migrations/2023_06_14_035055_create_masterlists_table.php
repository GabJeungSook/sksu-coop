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
        Schema::create('masterlists', function (Blueprint $table) {
            $table->id();
            $table->integer('member_id');
            $table->string('last_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('first_name')->nullable();
            $table->string('tin_number')->nullable();
            $table->text('address')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->integer('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('civil_status')->nullable();
            $table->string('educational_attainment')->nullable();
            $table->string('occupation')->nullable();
            $table->string('dependent_number')->nullable();
            $table->string('religion')->nullable();
            $table->string('income')->nullable();
            $table->date('date_accepted')->nullable();
            $table->integer('bod_number')->nullable();
            $table->string('membership_type')->nullable();
            $table->integer('number_of_shares')->nullable();
            $table->string('amount_subscribed')->nullable();
            $table->string('initial_paid_up')->nullable();
            $table->string('bod_resolution')->nullable();
            $table->date('date_created')->nullable();
            $table->string('image_path')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('masterlists');
    }
};
