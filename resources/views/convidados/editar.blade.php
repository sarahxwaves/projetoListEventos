@extends ('layout.site')

@section('titulo', 'Convidado')

@section('conteudo')
<div class="container">
    <div class='row'>
      <div id="titulo">
        <h3><a class="btn-floating btn-medium pink" href="{{route('convidado.add')}}"><i class="material-icons">arrow_back</i></a><b> Lista de convidados</b></h3>
      </div>

        <form class="" action="{{ route('convidado.atualizar', $registro->id)}}" method="post">
          {{csrf_field()}}
          <input type="hidden" name="_method" value="put">
          @include('convidados._form')
            <div class="input-field col s12">
          <button class="btn pink">Atualizar</button>
            </div>
    </form>
  </div>
  </div>


      @endsection
