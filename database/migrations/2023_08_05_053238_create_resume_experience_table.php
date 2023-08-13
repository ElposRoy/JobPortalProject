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
        Schema::create('resume_experience', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rsm_id')->constrained('resumes');
            $table->string('JobStarted');
            $table->string('JobEnded')->nullable();
            $table->string('StillEmployed')->nullable();
            $table->string('Company')->nullable();
            $table->string('Position');
            
            $table->string('Location');
            $table->string('LocationType');
            $table->string('EmploymentType');

            $table->string('Description')->nullable();

          
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
        Schema::dropIfExists('resume_experience');
    }
};
