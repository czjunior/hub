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
        Schema::create('responsaveis', function (Blueprint $table) {
            $table->id();
            $table->integer('orgao_id');
            $table->integer('unid_gestora_id');
            $table->integer('pessoa_vinculo_id');
            $table->date('dt_inicio');
            $table->date('dt_fim');
            $table->integer('tipo_responsavel');
            $table->integer('unid_orcamentaria_id');
            $table->integer('entidade_id');
            $table->string('delegacao_competencia');
            $table->date('dt_ato_delegacao');
            $table->date('dt_pub_delegacao');
            $table->date('dt_comunicacao');
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
        Schema::dropIfExists('responsaveis');
    }
};
