<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('phone_number');
            $table->string('email')->unique();
            $table->string('gender');
            $table->string('identification')->unique();
            $table->string('address');
            $table->integer('school_id')->nullable();
            $table->dateTime('deleted_at')->nullable();
            $table->dateTime('deleted_by')->nullable();
            $table->dateTime('created_at')->nullable();
            $table->dateTime('created_by')->nullable();
            $table->dateTime('updated_at')->nullable();
            $table->dateTime('updated_by')->nullable();
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
}
