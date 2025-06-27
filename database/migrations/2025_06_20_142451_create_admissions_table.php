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
        Schema::create('admissions', function (Blueprint $table) {
        $table->id();
        $table->string('student_name');
        $table->date('dob');
        $table->string('gender');
        $table->string('father_name');
        $table->string('mother_name');
        $table->string('parent_occupation')->nullable();
        $table->string('phone');
        $table->string('email');
        $table->text('address');
        $table->string('class');
        $table->string('section')->nullable();
        $table->string('previous_school')->nullable();
        $table->string('aadhar')->nullable();
        $table->string('nationality')->nullable();
        $table->string('blood_group')->nullable();
        $table->string('emergency_contact_name')->nullable();
        $table->string('emergency_contact_phone')->nullable();
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admissions');
    }
};
