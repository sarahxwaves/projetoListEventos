<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $fillable = [
        'nomeevento','categoria','data','horario','telefone','valormaximo','imagem'
    ];  
}
