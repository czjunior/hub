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
        Schema::create('entidades', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('cnpj');
            $table->integer('cod_entidade');
            $table->integer('codigo_municipio');
            $table->integer('tp_unid_adm');
            $table->string('logradouro');
            $table->string('bairro');
            $table->string('numero');
            $table->string('complemento');
            $table->string('cep');
            $table->string('telefone');
            $table->string('email');
            $table->string('crc');
            $table->integer('tipo_entidade')->comment('1-> publico; 2-> privado');
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
        Schema::dropIfExists('entidades');
    }
};
