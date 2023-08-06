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
        Schema::create('resumes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('Image');
            $table->string('Email')->unique();
            $table->string('FirstName');
            $table->string('LastName');
            $table->string('MiddleName');
            $table->string('Suffix')->nullable();
            $table->tinyInteger('Age');
            $table->string('Gender');
            $table->string('BloodType');
            $table->string('Height');
            $table->string('Weight');

            $table->date('BirthDate');
            $table->string('BirthPlace');
            $table->string('CivilStatus');
            $table->string('Citizenship');
            $table->string('Address');
            $table->string('PhoneNumber');
            $table->string('CareerObjective');
           

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resumes');
    }
};
