<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVechiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vechicles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('number')->unique();
            $table->integer('mileage')->default("0");
            $table->tinyInteger("status")->default("0")->comment("0-at park/1-on line");
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
        Schema::dropIfExists('vechicles');
    }
}
