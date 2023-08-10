<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataAtividadeEdital extends Model
{
    protected $fillable = [
        "nome_data", "data_atividade", "editais_id"
    ];
}
