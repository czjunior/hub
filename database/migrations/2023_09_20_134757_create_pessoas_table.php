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
        Schema::create('pessoas', function (Blueprint $table) {
            $table->id();
            $table->date('dt_nascimento');
            $table->string('est_civil');
            $table->string('grau_instrucao');
            $table->string('sexo');
            $table->integer('entidade_id');
            $table->integer('municipio_id');
            $table->string('nome');
            $table->string('email');
            $table->string('rg');
            $table->string('cpf');
            $table->string('pai');
            $table->string('mae');
            $table->string('logradouro');
            $table->string('numero');
            $table->string('complemento');
            $table->string('bairro');
            $table->string('cep');
            $table->string('telefone');
            $table->string('ctps');
            $table->string('ctps_serie');
            $table->date('rg_dt_emissao');
            $table->string('rg_org_emissao');
            $table->string('nis');
            $table->string('crc');
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
        Schema::dropIfExists('pessoas');
    }
};
