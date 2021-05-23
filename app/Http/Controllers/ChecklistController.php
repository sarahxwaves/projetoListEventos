<?php

namespace App\Http\Controllers;

use App\Checklist;
use Illuminate\Http\Request;

class ChecklistController extends Controller
{


  public function index()
  {

    $registros = Checklist::all();
    return view('checklist.additemcheck', compact('registros'));
  }

  public function add()
  {

    return view('user.addevento');
  }

  //botão salvar controle
  public function salvar(Request $req)
  {

    $dados = $req->all();
    //dd($dados);

    //tratando se tiver imagem
    if ($req->hasFile('imagem')) {
      $imagem = $req->file('imagem');
      $num = rand(1111, 9999);
      $dir = "img/eventos/";
      $ext = $imagem->guessClientExtension();
      $nomeImagem = "Imagem_" . $num . "." . $ext;
      $imagem->move($dir, $nomeImagem); //salva o arquivo dentro do diretório, se ele não existir ele cria o dir
      $dados['imagem'] = $dir . "/" . $nomeImagem;
    }

    //tratando data
    if ($req->has('data')) {
      $data = $dados['data'];
      $arraydata = explode("/", $data);
      //dd($arraydata);
      $ano = $arraydata[2];
      $mes = $arraydata[1];
      $dia = $arraydata[0];
      $dados['data'] = $ano . "-" . $mes . "-" . $dia;
    }

    Checklist::create($dados);

    return redirect()->route('user.paginaevento', compact('registros'));
  }

  //botão editar controle
  public function editar($id)
  {

    $registro = Checklist::find($id);
    //dd($registro);
    return view('user.editarevento', compact('registro'));
  }

  //botão atualizar controle
  public function atualizar(Request $req, $id)
  {

    $dados = $req->all();

    //tratando se tiver imagem
    if ($req->hasFile('imagem')) {
      $imagem = $req->file('imagem');
      $num = rand(1111, 9999);
      $dir = "img/eventos/";
      $ext = $imagem->guessClientExtension();
      $nomeImagem = "Imagem_" . $num . "." . $ext;
      $imagem->move($dir, $nomeImagem);
      $dados['imagem'] = $dir . "/" . $nomeImagem;
    }

    //tratando data
    if ($req->has('data')) {
      $data = $dados['data'];
      $arraydata = explode("/", $data);
      //dd($arraydata);
      $ano = $arraydata[2];
      $mes = $arraydata[1];
      $dia = $arraydata[0];
      $dados['data'] = $ano . "-" . $mes . "-" . $dia;
    }

    Checklist::find($id)->update($dados);

    return redirect()->route('listaevento');
  }

  //botão deletar controle
  public function deletar($id)
  {

    Checklist::find($id)->delete();
    return redirect()->route('listaevento');
  }
}
