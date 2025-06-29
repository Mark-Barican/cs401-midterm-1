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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->comment('Student First Name.');
            $table->string('last_name')->comment('Student Last Name.');
            $table->string('program')->comment('Student program enrolled.');
            $table->string('enrollment_year')->comment('Student first year enrollment.')->max(4);
            $table->date('birthday')->comment('Student birthday.');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
