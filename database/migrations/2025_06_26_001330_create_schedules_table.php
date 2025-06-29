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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->string('day_of_week')->comment('Day of the week course will offer.')->max(10);
            $table->dateTime('time_slot')->comment('Course time slot.');
            $table->string('room')->comment('Course room to use.')->max(20);
            $table->integer('term')->comment('Term when course will offer.');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
