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
        Schema::table('orgaos', function (Blueprint $table) {
            $table->integer('tp_unid_adm_id')->nullable();
            $table->string('descricao')->nullable();
            $table->integer('cod_orcamentario')->nullable();
            $table->string('cnpj')->nullable();
            $table->string('logradouro')->nullable();
            $table->string('numero')->nullable();
            $table->string('complemento')->nullable();
            $table->string('bairro')->nullable();
            $table->string('cep')->nullable();
            $table->string('telefone')->nullable();
            $table->string('email')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orgaos', function (Blueprint $table) {
            $table->dropColumn('tp_unid_adm_id');
            $table->dropColumn('descricao');
            $table->dropColumn('cod_orcamentario');
            $table->dropColumn('cnpj');
            $table->dropColumn('logradouro');
            $table->dropColumn('numero');
            $table->dropColumn('complemento');
            $table->dropColumn('bairro');
            $table->dropColumn('cep');
            $table->dropColumn('telefone');
            $table->dropColumn('email');
        });
    }
};
