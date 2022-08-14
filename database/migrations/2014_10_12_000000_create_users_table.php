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
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('name');
            $table->string('address')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('email')->nullable();
            $table->string('birthplace')->nullable();
            $table->date('birthday')->nullable();
            $table->string('university')->nullable();
            $table->string('degree')->nullable();
            $table->integer('role_id')->index();
            $table->integer('teacher_id')->index();
            $table->integer('major_id')->index();
            $table->integer('subject_id')->index();
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
        Schema::dropIfExists('users');
    }
};
