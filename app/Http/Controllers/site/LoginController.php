<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){

        return view('login.index');
    }

    public function entrar(Request $req){

        $dados = $req->all();
        $email = $req->input('email');
        $password = $req->input('password');
        if(Auth::attempt(['email'=>$dados['email'], 'password'=>$dados['senha']])){
            if ($email === "ana@mail.com") {
                return redirect()->route('user');
            }elseif($email === "pedro@mail.com"){
                return redirect()->route('fornecedor');
            }else{
                return redirect()->route('cliente');
            }
           
        }

        return redirect()->route('site.login');
    }

    public function sair(){
        
        Auth::logout();
        return redirect()->route('site.home');
    }
}
