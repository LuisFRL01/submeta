<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataAtividadeEdital extends Model
{
    protected $fillable = [
        "nome", "data", "editais_id"
    ];
}
