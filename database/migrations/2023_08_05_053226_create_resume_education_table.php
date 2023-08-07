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
        Schema::create('resume_education', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rsm_id')->constrained('resumes');
            $table->string('Level');
            $table->string('School');
            $table->string('Address');
            $table->string('Degree')->nullable();

            $table->string('StartDate');
            $table->string('EndDate')->nullable();;
            
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
        Schema::dropIfExists('resume_education');
    }
};
