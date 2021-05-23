@extends('layout.site')

@section('titulo','Pagina Principal')


@section('conteudo')

<div class="row">
  <br>
  <a class="btn-floating btn-medium pink" href="{{route('fornecedor.pagina')}}"><i class="material-icons">arrow_back</i></a>
  <div class="tabela">

    <div id="titulo">
      <h2><b>{{$registro->nomeservico}}</b></h2>
    </div>

    <div class="input-field col s6">

      <h5>{{$registro->descricao }}
      <br>
      <br>


      <b> Contato(s): {{$registro->tel}}</b>
      </p>
      </h5>
      <br>
      <a href="" class="mnButton">Solicitar serviço</a>

    </div>

    <div class=" input-field col s5">
      <h6>Fotos de {{$registro->nomeservico}}</h6>
      <img src=" {{$registro->imagem}}" width="550" height="400" /></a>

    </div>
  </div>
  <br>

  <br><br>




</div>


</div>


<style media="screen">
  #titulo {

    color: #9B1736;

  }

  .tabela {
    margin: 0 10%;
  }

  .myButton {
    box-shadow: -3px -1px 5px -14px #fbafe3;
    background-color: #EC7575;
    border-radius: 17px;
    display: inline-block;
    cursor: pointer;
    color: #ffffff;
    font-family: Arial;
    font-size: 23px;
    padding: 11px 22px;
    text-decoration: none;
  }

  .myButton:hover {
    background-color: #d99dbd;
  }

  .myButton:active {
    position: relative;
    top: 1px;
  }
</style>
@endsection
