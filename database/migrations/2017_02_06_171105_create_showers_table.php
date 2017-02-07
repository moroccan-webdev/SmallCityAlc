<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShowersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('showers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('class');
            $table->string('teacher')->nullable();
            $table->string('image')->default('default.jpg');
            $table->integer('level_id')->unsigned();
            $table->tinyInteger('stars')->unsigned();
            $table->timestamps();

            $table->foreign('level_id')->references('id')->on('levels')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('showers');
    }
}
