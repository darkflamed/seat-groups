<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeatgroupShipsAffiliation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ships_seatgroups', function (Blueprint $table) {
            $table->integer('ship_id')->index();
            $table->integer('seatgroup_id')->unsigned()->index();
            $table->foreign('seatgroup_id')->references('id')->on('seatgroups')->onDelete('cascade');
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
        Schema::dropIfExists('ships_seatgroups');
    }
}
