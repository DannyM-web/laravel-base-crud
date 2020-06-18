<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCagnoliniTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('cagnolini', function (Blueprint $table) {
      $table->id();

      $table->string('nome');
      $table->string('tipo');
      $table->smallInteger('peso_kg');
      $table->smallInteger('altezza_cm');

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
    Schema::dropIfExists('cagnolini');
  }
}
