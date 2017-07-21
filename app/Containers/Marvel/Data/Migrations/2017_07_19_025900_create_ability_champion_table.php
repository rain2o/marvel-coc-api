<?php
/**
 * Pivot table for Champions and Abilities relations
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbilityChampionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ability_champion', function (Blueprint $table) {
            
            $table->integer('ability_id')->unsigned()->nullable();
            $table->foreign('ability_id')->references('id')
                ->on('abilities')->onDelete('cascade');

            $table->integer('champion_id')->unsigned()->nullable();
            $table->foreign('champion_id')->references('id')
                ->on('champions')->onDelete('cascade');

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
        Schema::dropIfExists('ability_champion');
    }
}
