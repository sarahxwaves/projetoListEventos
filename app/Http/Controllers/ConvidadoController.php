<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Convidado;



class ConvidadoController extends Controller
{

  public function index(){

      $registros = Convidado::all();
      return view('convidados.index', compact('registros'));
  }

  public function add(){
    $registros = Convidado::all();
      return view('convidados.addconvidado', compact('registros'));
  }

  //botão salvar controle
  public function salvar(Request $req){

      $dados = $req->all();

      //tratando se tiver imagem

      Convidado::create($dados);

      return redirect()->route('convidado.add');
  }

  //botão editar controle
  public function editar($id){

      $registro = Convidado::find($id);
      return view('convidados.editar', compact('registro'));
  }

  //botão atualizar controle
  public function atualizar(Request $req, $id){

      $dados = $req->all();



      Convidado::find($id)->update($dados);

      return redirect()->route('convidado.add');
  }

  //botão deletar controle
  public function deletar($id){

      Convidado::find($id)->delete();
      return redirect()->route('convidado.add');
  }

}
