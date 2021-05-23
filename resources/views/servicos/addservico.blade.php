@extends('layout.site')

@section('titulo','Criar Servico')

@section('conteudo')

<div class="container">
  <br>
   <p style="font-size: 36px; color:#696969">Cadastre seu serviço</p>
        <div class='row'>
          <form class="" action="{{ route('servico.salvar') }}" method="post">
            {{ csrf_field() }}
            @include('servicos._form')
              <div class="input-field col s12">
                <button href="{{route('fornecedor')}}" class=" btn-large pink">Continuar</button>
              </div>
          </form>
      </div>
</div>
@endsection
