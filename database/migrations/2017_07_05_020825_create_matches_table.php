<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('matches', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('home_team_id');
            $table->integer('away_team_id');
            $table->dateTime('startingTime');
            $table->dateTime('finishingTime');
            $table->dateTime('startingBet');
            $table->dateTime('finishingBet');
            $table->integer('homeRate');
            $table->integer('drawRate');
            $table->integer('awayRate');
            $table->integer('homeScore');
            $table->integer('awayScore');
            $table->enum('result',[0,1,2,3])->default(0);   //0 cho chua co ket qua, 1 cho home, 2 cho draw, 3 cho away
            $table->enum('public',[0,1,2])->default(0);     // 0 cho chua public, 1 cho da public, 2 cho da co ket qua
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
         Schema::dropIfExists('matches');
    }
}
