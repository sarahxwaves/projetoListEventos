<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checklist extends Model
{
    protected $fillable = [
        'midia','ambiente','pessoas','buffet','atracoes','cerimonia','personalizados','vestuario'
    ];
}
