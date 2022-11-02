<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('password');
            $table->string('firstname');
            $table->string('lastname');
            $table->integer('phone number');
            $table->string('email')->unique();
            $table->string('active');
            $table->dateTime('delete_at')->nullable();
            $table->dateTime('delete_by')->nullable();
            $table->dateTime('create_at')->nullable();
            $table->dateTime('create_by')->nullable();
            $table->dateTime('update_at')->nullable();
            $table->dateTime('update_by')->nullable();
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
}
