@extends ('layout.site')

@section('titulo', 'Servico')

@section('conteudo')
<div class="container">
  <h3 class="center">Editar Servico</h3>
  <div class="row">

        <form class="" action="{{ route('servico.atualizar', $registro->id)}}" method="post">
          {{  csrf_field()}}
          <input type="hidden" name="_method" value="put">
          @include('servicos._form')
          <button class="btn pink">Atualizar</button>
    </form>
  </div>
  </div>


      @endsection
