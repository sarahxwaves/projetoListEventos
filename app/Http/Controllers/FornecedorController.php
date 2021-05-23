<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Fornecedor;

class FornecedorController extends Controller
{
  public function index(){

      $registros = Fornecedor::all();
      //dd($registros);
      return view('admin.fornecedores.indexfornecedor', compact('registros'));
  }


      public function adicionar()
      {
        return view('admin.fornecedores.addfornecedor');
      }


      public function atualizar(Request $req, $id){
    $dados = $req->all();

   Fornecedor::find($id)->update($dados);
  return redirect()->route('listafornecedor');
}

public function salvar(Request $req){

    $dados = $req->all();

    //tratando se tiver imagem
    if($req->hasFile('imagem')){
       $imagem = $req->file('imagem');
      $num = rand(1111,9999);
        $dir = "img/servicos/";
        $ext = $imagem->guessClientExtension();
        $nomeImagem = "Imagem_".$num.".".$ext;
       $imagem->move($dir, $nomeImagem);
        $dados['imagem'] = $dir."/".$nomeImagem;
}

    Fornecedor::create($dados);

    return redirect()->route('listafornecedor');
}

      public function editar($id){

        $registro = Fornecedor::find($id);
        return view('admin.fornecedores.editar', compact('registro'));
      }

      public function deletar($id)
      {
        Fornecedor::find($id)->delete();
        return redirect()-> route ('listafornecedor');
      }

      public function listafornecedor(){
          $registros = Fornecedor::all();
          return view('admin.fornecedores.listafornecedor', compact('registros'));
      }

      public function agenda() {
        return view ('admin.fornecedores.agenda');
      }





}
