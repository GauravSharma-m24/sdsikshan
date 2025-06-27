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
        Schema::create('student', function (Blueprint $table) {
            $table->id();  // Primary key
            $table->string('name');
            $table->string('fatherName');
            $table->date('dob')->nullable();
            $table->string('email')->unique();
            $table->string('password'); // Store hashed password
            $table->string('phone')->nullable();
            $table->string('class')->nullable();
            $table->string('section')->nullable();
            $table->timestamps(); // created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student');
    }
};
