<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleplayWorksheetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('roleplay_worksheet', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('roleplay_id')->unsigned()->nullable()->index();
          $table->integer('worksheet_id')->unsigned()->nullable()->index();
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
         Schema::dropIfExists('roleplay_worksheet');
    }
}
