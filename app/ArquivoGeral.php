<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArquivoGeral extends Model
{
    protected $fillable = [
        "titulo", "data", "path_arquivo"
    ];
}
