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
        Schema::create('pessoa_vinculos', function (Blueprint $table) {
            $table->id();
            $table->string('matricula');
            $table->date('dt_admissao');
            $table->string('agente_nocivo');
            $table->string('inss_outro_local');
            $table->integer('cargo_id');
            $table->integer('lotacao_id');
            $table->integer('setor_id');
            $table->integer('vinculo_id');
            $table->integer('unid_orcamentaria_id');
            $table->integer('pessoa_id');
            $table->integer('cod_admissao');
            $table->integer('cod_desligamento');
            $table->string('banco');
            $table->string('agencia');
            $table->string('conta');
            $table->date('dt_desligamento');
            $table->string('exercicio');
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
        Schema::dropIfExists('pessoa_vinculos');
    }
};
