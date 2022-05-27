<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->id();
            $table->foreignId('academic_cicles_id')->references('id')->on('academic_cicles');
            $table->foreignId('student_id')->references('id')->on('users');
            $table->foreignId('secction_id')->references('id')->on('seccions');
            $table->foreignId('course_id')->references('id')->on('courses');
            $table->double('score');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notes');
    }
}
