<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses_specializtion', function (Blueprint $table) {
            $table->id();
            $table->string('course_id');
            $table->string('specialization_id');
            $table->string('department_id');
            $table->foreign('course_id')->references('course_id')->on('courses');
            $table->foreign('specialization_id')->references('specialization_id')->on('specializations');
            $table->foreign('department_id')->references('department_id')->on('departments');
            $table->foreignId('level_id')->references('level_id')->on('levels');
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
        Schema::dropIfExists('courses_specializtion');
    }
};
