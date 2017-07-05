<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('bets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_id');
            $table->integer('matches_id');
            $table->enum('placeBet',[0,1,2]);  // 0 cho home, 1 cho draw, 3 cho away
            $table->integer('quantity');
            $table->enum('status',[0,1,2])->default(0);//0 cho chua co ket qua, 1 cho win, 2 cho lose
            $table->integer('refund');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('bets');
    }
}
