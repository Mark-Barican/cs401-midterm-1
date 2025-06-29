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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->comment('Teacher First Name.');
            $table->string('last_name')->comment('Teacher Last Name.');
            $table->string('email')->comment('Teacher email address.')->max(50);
            $table->string('department')->comment('Teacher department belongs.')->max(10);
            $table->date('birthday')->comment('Student birthday.');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
