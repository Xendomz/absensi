<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('role_id')->default(3);
            $table->unsignedBigInteger('class_id')->nullable();
            $table->string('name');
            $table->string('username');
            $table->string('email')->unique();
            $table->text('alamat')->nullable();
            $table->string('jenkel')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->foreign('class_id')->references('id')->on('class')->onDelete('cascade');
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
