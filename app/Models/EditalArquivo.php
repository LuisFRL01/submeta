<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EditalArquivo extends Model
{
    protected $fillable = [
        "editais_id", "arquivos_gerais_id"
    ];
}
