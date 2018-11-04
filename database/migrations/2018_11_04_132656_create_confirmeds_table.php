<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfirmedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('confirmeds', function (Blueprint $table) {
            $table->increments('id');

            //Main info
           $table->integer('user_id');

            //Confirmed by admin
            $table->integer('admin_id')->default(0); //Who confirmed
            $table->integer('kilo')->default(0);
            $table->integer('etc')->default(0);
            $table->string('box')->default(0);
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
        Schema::dropIfExists('confirmeds');
    }
}
