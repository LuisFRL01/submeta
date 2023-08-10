<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataAtividadeEditaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_atividade_editais', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("nome_atividade");
            $table->date("data_atividade");
            $table->foreignId("editais_id");
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
        Schema::dropIfExists('data_atividade_editais');
    }
}
