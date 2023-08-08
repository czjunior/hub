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
        Schema::create('ordenadors', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_municipio');
            $table->integer('exercicio_orcamento');
            $table->integer('codigo_unidade_gestora');
            $table->string('codigo_orgao');
            $table->string('codigo_unidade');
            $table->integer('data_referencia_ordenador');
            $table->string('nome_ordenador');
            $table->date('data_inclusao_unidade_orcamentaria');
            $table->string('cpf_servidor');
            $table->string('codigo_ingresso');
            $table->string('codigo_vinculo');
            $table->string('numero_expediente_nomeacao');
            $table->date('data_inicio_gestao_ordenador');
            $table->date('data_fim_gestao_ordenador')->nullable();
            $table->string('tipo_cargo');
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
        Schema::dropIfExists('ordenadors');
    }
};
