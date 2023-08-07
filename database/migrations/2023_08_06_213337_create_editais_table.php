<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEditaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('editais', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("nome");
            $table->string("descricao");
            $table->boolean("cota_doutor");
            $table->unsignedBigInteger('users_criador_id');
            $table->foreign('users_criador_id')->references('id')->on('users');
            $table->foreignId("tipo_editais_id");
            $table->foreignId("natureza_editais_id");
            $table->foreignId("unidade_administrativas_id");
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
        Schema::dropIfExists('editais');
    }
}
