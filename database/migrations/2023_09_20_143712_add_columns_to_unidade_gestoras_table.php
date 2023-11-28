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
        Schema::table('unidade_gestoras', function (Blueprint $table) {
            $table->integer('cod_orcamentario')->nullable();
            $table->string('sigla')->nullable();
            $table->integer('entidade_id')->nullable();
            $table->integer('tipo_unid_administrativa_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('unidade_gestoras', function (Blueprint $table) {
            $table->dropColumn('cod_orcamentario');
            $table->dropColumn('sigla');
            $table->dropColumn('entidade_id');
            $table->dropColumn('tipo_unid_administrativa_id');
        });
    }
};
