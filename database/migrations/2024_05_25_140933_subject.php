<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Subject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('subjects', function (Blueprint $table){
            $table ->id();
            $table  ->integer('student_id');
            $table ->string('subject_code');
            $table ->string('name');
            $table ->string('description');
            $table ->string('instructor');
            $table ->string('schedule');
            $table ->double('prelim');
            $table ->double('midterm');
            $table ->double('prefinal');
            $table ->double('final');
            $table ->double('average_grade')->nullable();
            $table ->string('date_taken');
            $table ->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        schema::dropIfExists('subjects');
    }
}
