
@extends('layout.site')

@section('titulo','Fornecedor')


@section('conteudo')

<div class="container">
  <br>


    <div class='row'>
       <p style="font-size: 36px; color:#696969">Cadastre-se!</p>
          <form class="" action="{{ route('fornecedor.salvar') }}" method="post">
            {{ csrf_field() }}
            @include('admin.fornecedores._form')

              <button class="btn pink">Começar</button>
              <a class="btn pink" href="{{ route('listafornecedor') }} ">Lista de Fornecedores</a>
          </form>
    </div>
    <br>


    </div>
</div>

@endsection
