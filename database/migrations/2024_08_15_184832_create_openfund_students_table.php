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
        Schema::create('openfund_students', function (Blueprint $table) {
            $table->id();
            $table->string('qalam_id')->unique();
            $table->string('student_name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('institutions')->nullable();
            $table->string('discipline')->nullable();
            $table->string('contact_no')->nullable();
            $table->text('home_address')->nullable();
            $table->string('scholarship_name')->nullable();
            $table->string('nust_trust_fund_donor_name')->nullable();
            $table->string('province')->nullable();
            $table->string('domicile')->nullable();
            $table->string('gender')->nullable();
            $table->string('program')->nullable();
            $table->string('degree')->nullable();
            $table->year('year_of_admission')->nullable();
            $table->string('father_status')->nullable();
            $table->text('father_profession')->nullable();
            $table->integer('monthly_income')->nullable();
            $table->text('statement_of_purpose')->nullable();
            $table->text('remarks')->nullable();
            $table->string('images')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('openfund_students');
    }
};
