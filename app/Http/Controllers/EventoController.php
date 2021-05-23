<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Evento;
use App\Convidado;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Date;

class EventoController extends Controller
{
    public function index(){
        $registros = Evento::all();
        return view('user.index', compact('registros'));
    }

    public function add(){
          $registros = Evento::all();
        return view('user.addevento' , compact('registros'));
    }

    //botão salvar controle
    public function salvar(Request $req){

        $dados = $req->all();
        //dd($dados);

        //tratando se tiver imagem
        if($req->hasFile('imagem')){
            $imagem = $req->file('imagem');
            $num = rand(1111,9999);
            $dir = "img/eventos/";
            $ext = $imagem->guessClientExtension();
            $nomeImagem = "Imagem_".$num.".".$ext;
            $imagem->move($dir, $nomeImagem); //salva o arquivo dentro do diretório, se ele não existir ele cria o dir
            $dados['imagem'] = $dir."/".$nomeImagem;
        }

        //tratando data
        if($req->has('data')){
            $data = $dados['data'];
            $arraydata = explode("/",$data);
            //dd($arraydata);
            $ano = $arraydata[2];
            $mes = $arraydata[1];
            $dia = $arraydata[0];
            $dados['data'] = $ano."-".$mes."-".$dia;
        }

        Evento::create($dados);

        return redirect()->route('user');
    }

    //botão editar controle
    public function editar($id){

        $registro = Evento::find($id);
        //dd($registro);
        return view('user.editarevento', compact('registro'));
    }

    //botão atualizar controle
    public function atualizar(Request $req, $id){

        $dados = $req->all();

        //tratando se tiver imagem
        if($req->hasFile('imagem')){
            $imagem = $req->file('imagem');
            $num = rand(1111,9999);
            $dir = "img/eventos/";
            $ext = $imagem->guessClientExtension();
            $nomeImagem = "Imagem_".$num.".".$ext;
            $imagem->move($dir, $nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }

        //tratando data
        if($req->has('data')){
            $data = $dados['data'];
            $arraydata = explode("/",$data);
            //dd($arraydata);
            $ano = $arraydata[2];
            $mes = $arraydata[1];
            $dia = $arraydata[0];
            $dados['data'] = $ano."-".$mes."-".$dia;
        }

        Evento::find($id)->update($dados);

        return redirect()->route('listaevento');
    }

    //botão deletar controle
    public function deletar($id){

        Evento::find($id)->delete();
        return redirect()->route('listaevento');
    }

    public function listaevento(){

        $registros = Evento::all();
        return view('admin.clientes.listaevento', compact('registros'));
    }

    public function convidados(){

      return view ('user.convidados');
    }


    //botão editar ver evento
    public function indexpagevento($id){
  $registro = Evento::all();
        $registro = Evento::find($id);
        //dd($registro);
        return view('user.paginaevento', compact('registro'));
    }

    public function contagemregressiva($id)
    {

        $registro = Evento::find($id);
        $hoje = new Date();
        $date2 = Carbon::createFromFormat('Y-m-d', '$hoje');
        $date1 = Carbon::createFromFormat('Y-m-d', '$registro->data');

        $value = $date2->diffInDays($date1);
    }

}
