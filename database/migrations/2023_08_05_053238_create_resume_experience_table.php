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
            $table->string('exp_job_title');
            $table->string('exp_company');
            $table->string('exp_start_date');
            $table->string('exp_end_date')->nullable();
            $table->string('exp_job_address');
            
            $table->string('exp_location_type');
            $table->string('exp_employment_type');
            $table->string('exp_job_desc');

            $table->string('exp_still_employed')->nullable();

          
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
