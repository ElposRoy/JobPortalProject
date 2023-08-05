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
            $table->string('rsm_pfp');
            $table->string('rsm_email')->unique();
            $table->string('rsm_fname');
            $table->string('rsm_lname');
            $table->string('rsm_mname');
            $table->string('rsm_suffix')->nullable();
            $table->tinyInteger('rsm_age');
            $table->string('rsm_gender');
            $table->string('rsm_bloodtype');
            $table->string('rsm_height');
            $table->string('rsm_weight');

            $table->date('rsm_birthday');
            $table->string('rsm_birthplace');
            $table->string('rsm_civilstatus');
            $table->string('rsm_citizenship');
            $table->string('rsm_address');
            $table->string('rsm_phone');
            $table->string('rsm_careerobj');
           

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
