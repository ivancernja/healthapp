<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKartonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kartoni', function (Blueprint $table) {
          $table->increments('id');
          $table->increments('OIB');
          $table->date('Datumrodjenja');
          $table->varchar('Imeiprezime');
          $table->increment('MBO');
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
        Schema::dropIfExists('kartons');
    }
}
