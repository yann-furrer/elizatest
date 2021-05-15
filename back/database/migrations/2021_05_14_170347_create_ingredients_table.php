<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredients', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_meal')->unsigned();
            $table->string('ing1');
            $table->string('ing2');
            $table->string('ing3');
            $table->string('ing4');
            $table->string('ing5');
            $table->string('ing6');
            $table->string('ing7');
            $table->string('ing8');
            $table->timestamps();
            $table->foreign('id_meal')->references('id')->on('meals')->onDelete('cascade');
            

           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingredients');
    }
}
