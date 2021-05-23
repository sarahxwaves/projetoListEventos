@extends('layout.site')

@section('titulo','Clientes')


@section('conteudo')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">


<div class="container">

  <div class='row'>
    <main>
        <form class="" action="{{ route('site.login.entrar') }}" method="post" id="form">
            {{ csrf_field() }}
            <section class="inputs-container">
              <p style="font-size:30px; color:#696969">Login</p>

                <input type="text" name="email">
                <label>E-mail</label>

                  <div class="password-container">
                    <input type="password" id ="field-password" name="senha">
                    <i class="far fa-eye" id="eye" onclick = "showPassword()" ></i>
                    <i class="far fa-eye-slash" id="eye-slash" onclick="showPassword()"></i>
                    <label>Senha</label>
                  </div>

            </section><br>

            <div class="input-field center">
                <button class="btn ">Entrar</button>
                  <div class="input-field">
                    <section class="links-container">
                        <span>Ou entre com:</span>

                          <aside>
                            <a href="#"><i class="fab fa-google-plus-square google"></i></a>
                            <a href="#"><i class="fab fa-linkedin linkedin"></i></a>
                            <a href="#"><i class="fab fa-facebook-square facebook"></i></a>
                        </aside>

                    </section><hr>

                  <span>Ainda não possui uma conta? <a href="{{route('cliente.add')}}">Cadastre-se</a></span><br>
                  <span>Esqueceu sua senha? <a href="#">Recupere-a</a></span><br><br>
                  <span>Ao efetuar cadastro concordo com os <br>  <a href="#">termos de uso e serviços do ListEventos</a></span>

                </div>
            </div>
        </form>
      </main>
    </div>
  </div>


<style type="text/css">

    .container {
        margin-top: 5%;


         }

    }
</style>

@endsection
