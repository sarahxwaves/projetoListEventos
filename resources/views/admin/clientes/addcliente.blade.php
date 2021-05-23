
@extends('layout.site')

@section('titulo','Clientes')


@section('conteudo')

<div class="container">
  <br>
   <p style="font-size: 36px; color:#696969">Cadastre-se</p>


    <div class='row'>
          <form class="" action="{{ route('cliente.salvar') }}" method="post">
                {{ csrf_field() }}
                @include('admin.clientes._form')
                <div class="input-field col s12">
                    <button class="btn-large">Cadastrar</button>
                    <a class="btn" href="{{ route('listaclientes') }}">Lista de Clientes</a>
              </div>
          </form>
      </div>
    </div>


@endsection
