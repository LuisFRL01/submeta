<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GestorInstitucional extends Model
{
    protected $fillable = [
        "users_id", "unidade_administrativas_id"
    ];
}
