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
        Schema::create('exec_f_financeiras', function (Blueprint $table) {
            $table->id();
            $table->string('cod_item_pt');
            $table->string('item_pt');
            $table->double('vlr_item_pt', 10, 2);
            $table->double('saldo_p_aquisicao', 10, 2);
            $table->string('processo_aquisicao');
            $table->string('item_processo_aquisicao');
            $table->double('vlr_item_pa', 10, 2);
            $table->double('saldo_contratacao', 10, 2);
            $table->string('num_contratacao');
            $table->string('item_contratacao');
            $table->double('vlr_item_contratacao', 10, 2);
            $table->double('saldo_liquidacao', 10, 2);
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
        Schema::dropIfExists('exec_f_financeiras');
    }
};
