<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Convidado extends Model
{
  protected $fillable = [
      'nomeConvidado','emailConvidado'];
}
