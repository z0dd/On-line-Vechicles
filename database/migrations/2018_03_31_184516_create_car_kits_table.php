<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarKitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_kits', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('car_id');
            $table->integer('kit_id');
            $table->tinyInteger('availability')->default("0");
            $table->index(['car_id','kit_id']);
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
        Schema::dropIfExists('car_kits');
    }
}
