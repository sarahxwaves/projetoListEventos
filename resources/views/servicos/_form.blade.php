@php
  $categorias = ['Decoração','Cerimonial','Buffet','Música','Espaço'];
  $estados = ['AC','AL','AP','AM','BA','CE','DF','ES','GO','MA','MT','MS','MG','PA','PB','PR','PE','PI','RJ','RN','RS','RO','RR','SC','SP','SE','TO'];
  $porvalors = ['Por dia','Por hora','Por pessoa'];
@endphp


<div class="input-field col s6">
  <i class="material-icons prefix">edit</i>
  <input type="text" name="nomeservico" value="{{isset($registro->nomeservico) ? $registro->nomeservico : ''}}">
  <label>Qual o nome do seu serviço?</label>
</div>

<div class="input-field col s6">
  <i class="material-icons prefix">phone</i>
  <input type="text" name="tel"  class="validate phone_with_ddd" value="{{isset($registro->tel) ? $registro->tel : ''}}">
  <label>Qual o seu telefone?</label>
</div>
<br><br>


<div class="input-field col s4">
  <i class="material-icons prefix">add_location</i>
  <input type="text" name="cidade" value="{{isset($registro->cidade) ? $registro->cidade : ''}}">
  <label>Qual a cidade?</label>
</div>

<div class="input-field col s4">
  <i class="material-icons prefix">add_location</i>
  <input type="text" name="bairro" value="{{isset($registro->bairro) ? $registro->bairro : ''}}">
  <label>Qual o bairro?</label>
</div>

<div class="input-field col s4">
  <i class="material-icons prefix">add_location</i>
  <select id="estado" name="estado">

    @if(isset($registro->estado))
    <option value="{{$registro->estado}}">{{$registro->estado}}</option>
    @else
    <option disabled selected>Escolha o estado </option>
    @endif

    @foreach($estados as $estado)
    <option value="{{$estado}}">{{$estado}}</option>
    @endforeach
  </select>
</div>


  <div class="input-field col  s4">
    <i id="iconebar" class="material-icons prefix">local_bar</i>
    <select id="categoria" name="categoria">
      <!-- <option disabled selected>Escolha a categoria do seu evento</option> -->

      @if(isset($registro->categoria))
      <option value="{{$registro->categoria}}">{{$registro->categoria}}</option>
      @else
      <option disabled selected>Escolha a categoria do seu serviço</option>
      @endif

      @foreach($categorias as $categoria)
      <option value="{{$categoria}}">{{$categoria}}</option>
      @endforeach
    </select>
  </div>



<div class="input-field col s4">
  <i class="material-icons prefix">attach_money</i>
  <input type="text" name="valorservico" class="validate money" value="{{isset($registro->valorservico) ? $registro->valorservico : ''}}">
  <label>Qual o valor do seu serviço?</label>
</div>


  <div class="input-field col s4 m4">
    <i id="iconebar" class="material-icons prefix">attach_money</i>
    <select id="porvalor" name="porvalor">
      <!-- <option disabled selected>Escolha a categoria do seu evento</option> -->

      @if(isset($registro->porvalor))
      <option value="{{$registro->categoria}}">{{$registro->porvalor}}</option>
      @else
      <option disabled selected>Você cobra por</option>
      @endif

      @foreach($porvalors as $porvalor)
      <option value="{{$porvalor}}">{{$porvalor}}</option>
      @endforeach
    </select>
</div><br><br><br><br>

  <h5 class='left'>Quase tudo pronto! Vamos preparar a descrição do seu serviço.</h5>



<div class="input-field col s12">
  <h6>1. Carregue algumas fotos para apresentar
      seu serviço aos clientes </h6>
  <link rel = "stylesheet" href="css/materialize.min.css">
</div>

<div class="file-field input-field col s12">
  <!-- <i class="material-icons prefix">image</i> -->
  <div class="btn pink lighten-3">
    <span>Imagem</span>
    <input id="imagem" type="file" name="imagem" value="{{isset($registro->imagem) ? $registro->imagem : ''}}">
  </div>
  <div class="file-path-wrapper col s12 m6">
    <input class="file-path validate" type="text">
  </div>
</div>


<div class="input-field col s6">
  <h6>2. Adicione tags relacionadas ao seu serviço</h6>
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

  <div class="chips chips-placeholder"></div>
</div>

<div class="input-field col s8">
  <h6>3. Faça uma descrição do seu serviço</h6>
  <div class="input-field">
   <input type="text" name="descricao" value="{{isset($registro->descricao) ? $registro->descricao : ''}}">
 </div>
</div>
