<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
  protected $fillable = [
      'nomeservico','tel','cidade','bairro', 'estado', 'valorservico','imagem','categoria','porvalor', 'descricao'
  ];

public function search($filter = null)
{
  $results = $this->where(function ($query) use ($filter){
    if ($filter){
    //  $query -> where('nomeservico', '=', $filter);
        $query -> where('nomeservico', 'LIKE', "%$filter%" );
          $query -> where('descricao', 'LIKE', "%$filter%" );
    }
  }) //-> toSql();
  ->paginate();
 return $results;
//dd($results);
}



}
