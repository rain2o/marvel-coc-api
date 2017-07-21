<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuffNodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buff_node', function (Blueprint $table) {

            $table->integer('buff_id')->unsigned()->nullable();
            $table->foreign('buff_id')->references('id')
                ->on('buffs')->onDelete('cascade');

            $table->integer('node_id')->unsigned()->nullable();
            $table->foreign('node_id')->references('id')
                ->on('nodes')->onDelete('cascade');

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
        Schema::dropIfExists('buff_node');
    }
}
