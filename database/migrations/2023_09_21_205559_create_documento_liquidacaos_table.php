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
        Schema::create('documento_liquidacaos', function (Blueprint $table) {
            $table->id();
            $table->integer('exec_f_fin_id');
            $table->string('num_doc_liquidacao');
            $table->string('item_doc_liquiacao');
            $table->double('vlr_item_liquidacao', 10, 2);
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
        Schema::dropIfExists('documento_liquidacaos');
    }
};
