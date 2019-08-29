<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProprietariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proprietarios', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nome',70);
            $table->string('endereco', 80);
            $table->string('bairro', 40);
            $table->string('cidade', 40);
            $table->string('CEP', 10);
            $table->string('UF', 2);
            $table->string('fone', 15);
            $table->string('email', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("proprietarios");
                       
       }
}
