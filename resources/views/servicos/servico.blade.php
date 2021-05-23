
@extends ('layout.site')

@section('titulo', 'Fornecedor')

@section('conteudo')
<div class="container">
  <h3 class="center"></h3>

  <div class="row">
<br><br>

   <form class="col s6">
     <div class="row">
       <div class="input-field col s12">
         <i class="material-icons prefix">edit</i>
         <input id="nomeservico" type="text" value="{{isset($registro->nomeservico) ? $registro->nomeservico : ''}}">
         <label for="nomeservico">Qual o nome do seu serviço?</label>
       </div>
       <br><br>


       <div class="input-field col s12">
         <i class="material-icons prefix">local_bar</i>
   <br>

    <p>
        <label>
            <br>
         <input id="categoria" type="checkbox" class="validate" value="{{isset($registro->categoria) ? $registro->categoria : ''}}">
         <span for ="categoria">Decoração</span>
   </p>

    <p>
        <label>
        <input id="categoria" type="checkbox" class="validate" value="{{isset($registro->categoria) ? $registro->categoria : ''}}">
        <span for ="categoria">Cerimonial</span>
    </p>

  <p>
    <label>
          <input id="categoria" type="checkbox" class="validate"  value="{{isset($registro->categoria) ? $registro->categoria : ''}}">
          <span for ="categoria">Espaço</span>
  </p>

    <p>
        <label>

             <input id="categoria" type="checkbox" class="validate" value="{{isset($registro->categoria) ? $registro->categoria : ''}}">
             <span for ="categoria">Serviços</span>
   </p>
      </label>

         <label for="categoria">Escolha a(as) categoria(s) do seu serviço</label>
     </div>


    <div class="input-field col s12">
              <i class="material-icons prefix">attach_money</i>
                  <input id="valorservico" type="text" class="validate">
                    <label for="valorservico">Qual o valor do seu serviço?</label>
    </div>



<form>

     <p>
        <label>
              <input type="radio" name="porvalor" value="{{isset($registro->pordia) ? $registro->pordia : ''}}">
              <span for ="porvalor">Por dia</span>
       </label>
      </p>

      <p>
          <label>
                <input type="radio" name="porvalor" value="{{isset($registro->porhora) ? $registro->porhora : ''}}">
                <span>Por hora</span>
        </label>
      </p>
</form>


          <div class="input-field col s7">
                <div class="row">
                    <a href="{{route('servico.continuar')}}" class="myButton">Continuar</a>
              </div>
         </div>

    </form>
 </div>
</div>
</div>
<style media="screen">
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

      @endsection
