<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Cliente extends Authenticatable
{
    protected $fillable = [
        'nome','sobrenome','email','cpf','usuario','senha','confirmsenha'
    ];
}
 
