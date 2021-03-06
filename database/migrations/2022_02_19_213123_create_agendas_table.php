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
        Schema::create('agendas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->date('fechaInicio');
            $table->date('fechaFin');
            $table->enum('activo',[1, 2])->default(1);
            
            $table->unsignedBigInteger('profesional_id');
            $table->timestamps();

            $table->foreign('profesional_id')->references('id')->on('profesionals')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agendas');
    }
};
