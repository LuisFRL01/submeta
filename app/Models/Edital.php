<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Edital extends Model
{
    protected $fillable = [
        "nome", "descricao", "cota_doutor", "users_criador_id", "tipo_editais_id", 
        "natureza_editais_id", "unidade_administrativas_id"
    ];
}
