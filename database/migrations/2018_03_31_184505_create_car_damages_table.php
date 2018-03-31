<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarDamagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_damages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('car_id');
            $table->integer('damage_id');
            $table->tinyInteger('damage_type');
            $table->index(['car_id','damage_id']);
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
        Schema::dropIfExists('car_damages');
    }
}
