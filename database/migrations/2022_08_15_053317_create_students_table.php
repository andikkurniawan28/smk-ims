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
            $table->id('student_id');
            $table->integer('major_id')->index();
            $table->integer('classroom_id')->index();
            $table->integer('internship_id')->nullable()->index();
            $table->string('student_name');
            $table->string('address')->nullable();
            $table->string('sex')->nullable();
            $table->string('religion')->nullable();
            $table->string('birthplace')->nullable();
            $table->date('birthday')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('email')->nullable();
            $table->string('father')->nullable();
            $table->string('mother')->nullable();
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
