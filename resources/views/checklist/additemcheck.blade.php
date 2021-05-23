@extends('layout.site')

@section('titulo','Adicionar evento')

@section('conteudo')

<div class="container">
  <div class='row'>
    <form class="" action="{{ route('checklist.salvar') }}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      @include('checklist.index')
      <br><br>
    </form>
    <div class="row">
      <button class="btn salvarcheck SlateGray">Salvar </button>
    </div>
    <br>

  </div>
</div>

@endsection