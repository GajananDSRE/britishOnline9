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
            $table->bigIncrements('id');
            $table->integer('role_id');
            $table->string('name');
            $table->string('userid')->unique()->nullable();
            $table->string('contact');
            $table->string('password');
            $table->string('token');
            $table->boolean('is_lock_user')->default(false);
            $table->string('site')->nullable();
            $table->string('whatsapp_no');
            $table->string('parents')->nullable();
            $table->bigInteger('balance')->nullable();
            $table->rememberToken();
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
}
