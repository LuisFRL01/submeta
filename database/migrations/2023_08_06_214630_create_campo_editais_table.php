<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampoEdiatisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campo_editais', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("titulo_campo");
            $table->boolean("campo_obrigatorio");
            $table->integer("ordem_campo");
            $table->foreignId("tipo_campo_editais_id");
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
        Schema::dropIfExists('input_ediatis');
    }
}
