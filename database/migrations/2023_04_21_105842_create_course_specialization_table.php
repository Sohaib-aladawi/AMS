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
        Schema::create('course_specialization', function (Blueprint $table) {
            $table->id();
            $table->string('course_id');
            $table->string('course_type');
            $table->string('type');
            $table->string('specialization_id');
            $table->string('semester');
            $table->foreign('course_id')->references('course_id')->on('courses');
            $table->foreign('specialization_id')->references('specialization_id')->on('specializations');
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
