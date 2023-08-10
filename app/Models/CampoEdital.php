<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CampoEdital extends Model
{
    protected $fillable = [
        "titulo_campo", "campo_obrigatorio", "ordem_campo", "tipo_campo_editais_id", "editais_id"
    ];
}
