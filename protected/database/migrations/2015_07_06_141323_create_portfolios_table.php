<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->increments('port_id');
            $table->string('port_titulo', 150);
            $table->integer('port_galeria'); 
            $table->text('port_descricao');
            $table->string('port_cliente', 150);
            $table->string('port_tipo', 50);
            $table->dateTime('port_dataInicial');
            $table->dateTime('port_dataFinal');
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
        Schema::drop('portfolios');
    }
}
