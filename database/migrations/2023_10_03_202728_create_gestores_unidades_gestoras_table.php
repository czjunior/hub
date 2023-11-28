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
        Schema::create('gestores_unidades_gestoras', function (Blueprint $table) {
            $table->id();
            $table->string("cpf_servidor");
            $table->string("codigo_municipio");
            $table->string("exercicio_orcamento");
            $table->string("codigo_unidade_gestora");
            $table->string("codigo_unidade");
            $table->string("codigo_ingresso");
            $table->string("codigo_vinculo");
            $table->string("numero_expediente");
            $table->date("data_inicio_gestao");
            $table->string("data_referencia");
            $table->string("nome_gestor");
            $table->date("data_fim_gestao")->nullable();
            $table->string("tipo_cargo");
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
        Schema::dropIfExists('gestores_unidades_gestoras');
    }
};
