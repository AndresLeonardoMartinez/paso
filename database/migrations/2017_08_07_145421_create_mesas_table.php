<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMesasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mesas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Mesa');   
            $table->string('Escuela');  

            $table->integer('UnidadCiudadana4')->default(0);   
            $table->integer('UnidadCiudadana2')->default(0);   
            $table->integer('Cambiemos')->default(0);   
            $table->integer('Massa_salaberry')->default(0);   
            $table->integer('Massa_literas')->default(0);   
            $table->integer('Cumplir')->default(0);   
            $table->integer('FIT')->default(0);
            $table->integer('MTS')->default(0);   
            $table->integer('UFP')->default(0);   
            $table->integer('Vamos')->default(0);   
            $table->integer('tpba')->default(0);  
            $table->integer('PartidoFederal')->default(0);
            $table->integer('fsp')->default(0);

  
            

            $table->integer('Validos');
            $table->integer('Blancos')->default(0);
            $table->integer('Nulos')->default(0);

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
        Schema::dropIfExists('mesas');
    }
}
