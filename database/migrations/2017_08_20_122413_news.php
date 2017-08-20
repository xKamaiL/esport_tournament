<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class News extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table){
            $table->increments("id");
            $table->integer('owner_id')->unsigned();
            $table->integer('news_category_id')->unsigned();
            $table->string("title","255");
            $table->string('description','255');
            $table->string("profileImage");
            $table->longText("html");
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
        Schema::dropIfExists('news');
    }
}
