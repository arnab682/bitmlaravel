<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fistname', 50);
            $table->string('lastname')->nullable();
            $table->string('gander')->default('Male');
            $table->integer('age');
            $table->string('date');
            $table->string('religion');
            $table->string('hobby')->nullable();
            $table->string('preferred_languages');//json
            $table->string('address_line');
            $table->string('zipcode');
            $table->string('city');
            $table->string('country');
            $table->text('about_me');
            $table->string('resume');
            $table->string('file');
            $table->string('picture');
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
        Schema::dropIfExists('student');
    }
}
