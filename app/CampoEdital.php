<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CampoEdital extends Model
{
    protected $fillable = [
        "titulo", "obrigatorio", "ordem", "tipo_input_editais_id", "editais_id"
    ];
}
