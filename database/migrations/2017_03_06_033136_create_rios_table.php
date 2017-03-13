<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rios', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nama',100);
          $table->string('type',30);
          $table->string('lokasi',100);
          $table->string('link',30);
          $table->string('status',30);
          $table->string('noserial',30);
          $table->string('mac',30);
          $table->string('longitude',30);
          $table->string('latitude',30);
          $table->text('deskripsi');
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
        Schema::dropIfExists('rios');
    }
}
