<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{
    public function index(){
        
        $registros = Cliente::all();
        return view('admin.clientes.index', compact('registros'));
    }

    public function add(){

        return view('admin.clientes.addcliente');
    }

    //botão salvar controle
    public function salvar(Request $req){

        $dados = $req->all();
        
        //tratando se tiver imagem
        if($req->hasFile('imagem')){
            $imagem = $req->file('imagem');
            $num = rand(1111,9999);
            $dir = "img/clientes/";
            $ext = $imagem->guessClientExtension();
            $nomeImagem = "Imagem_".$num.".".$ext;
            $imagem->move($dir, $nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }
        
        //tratando cpf

        Cliente::create($dados);

        return redirect()->route('listaclientes');
    }

    //botão editar controle
    public function editar($id){
        
        $registro = Cliente::find($id);
        return view('admin.clientes.editarcliente', compact('registro'));
    }
    
    //botão atualizar controle
    public function atualizar(Request $req, $id){

        $dados = $req->all();
        
        //tratando se tiver imagem
        if($req->hasFile('imagem')){
            $imagem = $req->file('imagem');
            $num = rand(1111,9999);
            $dir = "img/clientes/";
            $ext = $imagem->guessClientExtension();
            $nomeImagem = "Imagem_".$num.".".$ext;
            $imagem->move($dir, $nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }

        Cliente::find($id)->update($dados);

        return redirect()->route('listaclientes');
    }

    //botão deletar controle
    public function deletar($id){

        Cliente::find($id)->delete();
        return redirect()->route('listaclientes');
    }

    public function listaclientes(){
        
        $registros = Cliente::all();
        return view('admin.clientes.listaclientes', compact('registros'));
    }

  
}
