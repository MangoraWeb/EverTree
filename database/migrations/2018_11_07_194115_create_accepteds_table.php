<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcceptedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accepteds', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('nameSurname');
            $table->string('phoneNumber');
            $table->string('address');
            $table->string('province');
            $table->string('city');
            $table->integer('count');
            $table->integer('paperPrice');
            $table->integer('expense');
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
        Schema::dropIfExists('accepteds');
    }
}
