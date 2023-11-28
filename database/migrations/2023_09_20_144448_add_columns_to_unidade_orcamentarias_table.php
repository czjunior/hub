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
        Schema::table('unidade_orcamentarias', function (Blueprint $table) {
            $table->integer('cod_orcamentario')->nullable();
            $table->integer('unid_gestora_id')->nullable();
            $table->integer('tp_unid_adm_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('unidade_orcamentarias', function (Blueprint $table) {
            $table->dropColumn('cod_orcamentario');
            $table->dropColumn('unid_gestora_id');
            $table->dropColumn('tp_unid_adm_id');
        });
    }
};
