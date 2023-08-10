<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampoEditalOpcoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campo_edital_opcoes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("nome_opcao");
            $table->boolean("opcao_escolhida")->nullable();
            $table->foreignId("campo_editais_id");
            $table->foreignId("projeto_id")->nullable();
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
        Schema::dropIfExists('campo_edital_opcoes');
    }
}
