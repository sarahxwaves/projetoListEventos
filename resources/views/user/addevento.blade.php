@extends('layout.site')

@section('titulo','Adicionar evento')

@section('conteudo')

<div class="container">
  <h3 class='center'>Adicionar evento</h3>
  <div class='row'>
    <form class="" action="{{ route('evento.salvar') }}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      @include('user._formevento')
      <button class="btn SlateGray">Salvar </button>
    </form>
    <br>
    <div class="row">
      <a class="btn SlateGray" href="{{ route('listaevento') }}">Voltar</a>
    </div>
  </div>
</div>

@endsection