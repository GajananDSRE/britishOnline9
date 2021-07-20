<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExchangeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exchanges', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('url');
            $table->string('demo_id');
            $table->string('password');
            $table->string('sport');
            $table->string('balance');
            $table->string('logo');
            $table->boolean('is_lock_id')->default(false);
            $table->string('token');
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
        Schema::dropIfExists('exchange');
    }
}
