@extends ('layout.site')

@section('titulo', 'Fornecedor')

@section('conteudo')
<div class="container">
  <h3 class="center">Editar Fornecedor</h3>
  <div class="row">

        <form class="" action="{{ route('fornecedor.atualizar', $registro->id)}}" method="post">
          {{csrf_field()}}
          <input type="hidden" name="_method" value="put">
          @include('admin.fornecedores._form')
          <button class="btn pink">Atualizar</button>
    </form>
  </div>
  </div>


      @endsection
