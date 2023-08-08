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
            $table->integer('data_referencia');
            $table->string('nome_unidade_gestora');
            $table->date('data_criacao');
            $table->date('data_extincao')->nullable();
            $table->string('numero_lei_criacao');
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
