<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Dailykeyword extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("dailykeyword",function(Blueprint $table){
            $table->increments('id');
            $table->integer("daily_id")->unsigned();
            $table->integer("keyword_id")->unsigned();
            $table->foreign("daily_id")->references("id")->on("daily")->onDelete('cascade');
            $table->foreign("keyword_id")->references("id")->on("keyword")->onDelete('cascade');
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
        Schema::drop("dailykeyword");
    }
}
