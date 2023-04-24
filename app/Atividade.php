<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atividade extends Model
{
    protected $fillable = [
        'atividade1', 'atividade2', 'atividade3','data', 
    ];
}
