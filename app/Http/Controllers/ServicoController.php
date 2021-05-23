<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Servico;

use Illuminate\Http\Request;

class ServicoController extends Controller
{

  protected $request;
  private $repository;


  public function __construct(Request $request, Servico $servicos)
  {
    $this->request = $request;
    $this->repository = $servicos;
  }

  public function index()
  {
    $registros = Servico::all();
    return view('servicos.addservico', compact('registros'));
  }


  public function perfil($id)
  {

    $registro = Servico::find($id);
    //dd($registro);
    return view('servicos.perfil', compact('registro'));
  }

  public function continuar()
  {
    return view('servicos.continuar_servico');
  }



  public function search(Request $request)
  {
    $filters = $request->all();
    $servicos = $this->repository->search($request->filter);
    return view('servicos.principal', [
      'servicos' => $servicos,
      'filters'  => $filters,
    ]);
  }

  public function principal()
  {
    $servicos = Servico::paginate(3);
    return view('servicos.principal', [
      'servicos' => $servicos,
    ]);
  }



  public function atualizar(Request $req, $id)
  {
    $dados = $req->all();
    Servico::find($id)->update($dados);
    return redirect()->route('listaservicos');
  }


  public function salvar(Request $req)
  {

    $dados = $req->all();
    //dd($dados);
    if ($req->hasFile('imagem')) {
      $imagem = $req->file('imagem');
      $num = rand(1111, 9999);
      $dir = "img/servicos/";
      $ex = $imagem->guessClientExtension();
      $nomeImagem = "imagem_" . $num . "." . $ex;
      $imagem->move($dir, $nomeImagem);
      $dados['imagem'] = $dir . "/" . $nomeImagem;
    }


    Servico::create($dados);

    return redirect()->route('servico.continuar');
  }


  public function editar($id)
  {
    $registro = Servico::find($id);
    return view('servicos.editar', compact('registro'));
  }

  public function deletar($id)
  {
    Servico::find($id)->delete();
    return redirect()->route('listaservicos');
  }





  public function listaservicos()
  {
    $registros = Servico::all();
    return view('servicos.listaservicos', compact('registros'));
  }
}
