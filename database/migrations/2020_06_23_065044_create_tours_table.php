<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('CatID');
            $table->string('Name',100)->unique();
            $table->integer('Duration');
            $table->float('Price');
            $table->string('Content');
            $table->timestamps();
            $table->boolean('Status')->default(0);
            $table->string('Piority');
            $table->unsignedInteger('TagID');


            /*board link*/
            $table->foreign('CatID')->references('id')->on('categories');
            $table->foreign('TagID')->references('id')->on('tags');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tours');
    }
}
