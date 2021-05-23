@extends('layout.site')

@section('titulo','Pagina Principal')


@section('conteudo')


<br>


<div class="container">
  <div id="titulo">
    <h3><b>Serviços e Fornecedores</b></h3>
  </div>




  <div class="row">
    <div class="col s12">
      <div class="input-field col s3">


        <form action="{{route ('servico.search')}}" method="post" class="form form-inline">
          @csrf
          <input type="text" name="filter" placeholder="Encontre Fornecedores" class="form-control">
          <button type="submit" class="btn btn-info pink">Pesquisar</button>
      </div>
    </div>
    </form>
    <div class="row">


      @foreach ($servicos as $servico)
      <div class="col s12 m4">
        <div class="card ">
          <div class="card-image">

            <a href="#!" class="brand"><img height="220" src="{{$servico->imagem}}" /></a>
          </div>
          <div class="card-content">

            <h5>{{$servico->nomeservico}}</h5>


            <b>Categoria:</b>{{$servico->categoria}}<br>
            <b>{{$servico->cidade}}-{{$servico->estado}}</b>
            <br>

            <b>Média de preço:</b>

            <b>{{$servico->valorservico}}</b> {{$servico->porvalor}}
          </div>
          <div class="card-action">
            <a href="{{route('fornecedor.perfil',$servico->id)}}">Ver página...</a>

          </div>
        </div>
      </div>
      @endforeach

    </div>
  </div>

</div>





<ul class="pagination" align="center">


  <li class="waves-effect"><a href="{{$servicos->links()}}"></li>

</ul>


<style media="screen">
  #titulo {

    color: #9B1736;

  }
</style>



@endsection