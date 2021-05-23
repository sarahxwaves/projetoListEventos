
@extends('layout.site')

@section('titulo','Clientes')


@section('conteudo')

<div class="container">
    <h3 class='center'>Editar Clientes</h3>
    <div class='row'>
          <form class="" action="{{ route('cliente.atualizar',$registro->id) }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="put">
            @include('admin.clientes._form')
            <button class="btn SlateGray">Atualizar </button>
          </form>
    </div> 
    <br>
    <div class="row">
        <a class="btn SlateGray" href="{{ route('listaclientes') }}">Voltar</a>
    </div>   
</div>

@endsection
    