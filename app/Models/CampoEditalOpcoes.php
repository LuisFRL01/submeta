<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CampoEditalOpcoes extends Model
{
    protected $fillable = [
        "nome_opcao", "opcao_escolhida", "campo_editais_id", "projeto_id"
    ];
}
