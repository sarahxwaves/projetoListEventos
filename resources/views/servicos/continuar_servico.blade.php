
@extends('layout.site')

@section('titulo','Criar Servico')


@section('conteudo')
<br><br>
<br><br>
<div class="container">
<div class="row">


  <h5 class='left'>Quase tudo pronto! Vamos preparar a descrição do seu serviço.</h5>
  <br><br>
  <br><br>

<h6><b>1. Carregue algumas fotos para apresentar
 seu serviço aos clientes</b> </h6>
 <link rel = "stylesheet" href="css/materialize.min.css">

<div class="file-field  input-field col s12">

  <div class="btn-large pink">
    <span> <i class="large material-icons">library_add</i></span>
    <input type="file" multiple name="imagem">
  </div>

  <div class="file-path-wrapper">
  <input class="file-path validate" type="text">
  </div>
</div>

@if(isset($registro->imagem))
<div class="input-field">
  <img width="150" src="{{asset($registro->imagem)}}" />
</div>
@endif
<br><br>
   <i class="material-icons prefix"></i>




<h6><b>2. Adicione tags relacionadas ao seu serviço</b></h6>

Exemplo: fotografia, cerimonial, decoração...<br>
<div class="chip">
  <strong>Jantar</strong>
  <i class="material-icons close">close</i>
</div>

<div class="chip">
  <strong>Petiscos</strong>
  <i class="material-icons close">close</i>
</div>

<div class="chip">
  <strong>Buffet</strong>
  <i class="material-icons close">close</i>
</div>




<form class="col s12">
  <div class="row">
    <div class="input-field col s8">
      <div class="chips chips-placeholder"></div>
<br><br>
      <h6><b>3. Faça uma descrição do seu serviço</b></h6>
<div class="input-field">

  <input type="text" name="descricao" value="{{isset($registro->descricao) ? $registro->descricao : ''}}">
</div>

</div>
<br><br>

</div>



  <a href="{{route('fornecedor')}}" class="btn-large pink">Cadastrar serviço</a>

  </div>
  </div>
  </form>
@endsection

<style>

.myButton {
  box-shadow: -3px -1px 5px -14px #fbafe3;
  background-color:#EC7575;
  border-radius:17px;
  display:inline-block;
  cursor:pointer;
  color:#ffffff;
  font-family:Arial;
  font-size:23px;
  padding:11px 22px;
  text-decoration:none;
}
.myButton:hover {
  background-color:#d99dbd;
}
.myButton:active {
  position:relative;
  top:1px;
}

</style>
