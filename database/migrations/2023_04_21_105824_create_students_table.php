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
        Schema::create('students', function (Blueprint $table) {
            $table->string('student_id',10);
            $table->primary('student_id');
            $table->string('student_name');
            $table->decimal('current_CGPA', 4, 2);
            $table->string('advisor_id');
            $table->string('department_id');
            $table->string('specialization_id')->nullable();
            $table->foreign('advisor_id')->references('advisor_id')->on('advisors');
            $table->foreign('specialization_id')->references('specialization_id')->on('specializations');
            $table->integer('EL4SCORE')->nullable();
            $table->integer('IELTSSCORE')->nullable();
            $table->foreign('department_id')->references('department_id')->on('departments');
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
        Schema::dropIfExists('students');
    }
};
