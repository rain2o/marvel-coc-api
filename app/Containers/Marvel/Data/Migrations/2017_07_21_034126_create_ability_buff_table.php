<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbilityBuffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ability_buff', function (Blueprint $table) {

            $table->integer('ability_id')->unsigned()->nullable();
            $table->foreign('ability_id')->references('id')
                ->on('abilities')->onDelete('cascade');

            $table->integer('buff_id')->unsigned()->nullable();
            $table->foreign('buff_id')->references('id')
                ->on('buffs')->onDelete('cascade');

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
        Schema::dropIfExists('ability_buff');
    }
}
