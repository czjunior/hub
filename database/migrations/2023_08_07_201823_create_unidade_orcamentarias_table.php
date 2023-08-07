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
        Schema::create('unidade_orcamentarias', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_municipio');
            $table->integer('exercicio_orcamento');
            $table->string('codigo_orgao');
            $table->string('codigo_unidade');
            $table->string('codigo_tipo_unidade');
            $table->string('nome_unidade');
            $table->string('tipo_administracao_unidade');
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
        Schema::dropIfExists('unidade_orcamentarias');
    }
};
