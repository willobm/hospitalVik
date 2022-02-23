<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();//autoincrement
            $table->string("title",255);
            $table->string("descripcion");//error tipo test
            $table->string("status",255);//Error al poner 1
            $table->dateTime("start");
            $table->dateTime("end");

            $table->unsignedBigInteger('agenda_id');
            $table->timestamps();

            $table->foreign('agenda_id')->references('id')->on('agendas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos');
    }
};
