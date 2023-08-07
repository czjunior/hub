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
        Schema::create('unidade_gestoras', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_municipio');
            $table->integer('exercicio_orcamento');
            $table->integer('codigo_unidade_gestora');
            $table->string('codigo_orgao');
            $table->string('codigo_unidade');
            $table->string('cpf_servidor');
            $table->string('nome_gestor');
            $table->string('codigo_ingresso');
            $table->string('codigo_vinculo');
            $table->string('numero_expediente');
            $table->date('tipo_cargo');
            $table->date('data_inicio_gestao');
            $table->date('data_fim_gestao');
            $table->integer('data_referencia');
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
        Schema::dropIfExists('unidade_gestoras');
    }
};
