
@extends('layout.site')

@section('titulo','Editar evento')


@section('conteudo')

<div class="container">
    <h3 class='center'>Editar Evento</h3>
    <div class='row'>
          <form class="" action="{{ route('evento.atualizar',$registro->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="put">
            @include('user._formevento')  
            <button class="btn SlateGray">Atualizar </button>
          </form>
    </div>   
    <br>
    <div class="row">
        <a class="btn SlateGray" href="{{ route('listaevento') }}">Voltar</a>
    </div>   
</div> 

@endsection