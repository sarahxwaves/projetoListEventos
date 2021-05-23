<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
  protected $fillable = [
      'nome','email','cnpj','cidade','bairro','estado', 'tel','nomeUsuario','senha','confirmsenha'
  ];
    }
