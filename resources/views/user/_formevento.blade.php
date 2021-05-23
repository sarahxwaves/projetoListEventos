@php
  $categorias = ['Casamento','Formatura','15 anos','Confraternização','Bodas','Aniversário'];
@endphp

<div class="row">
  <div class="input-field col s12 m12">
    <i class="material-icons prefix">edit</i>
    <input id="nomeevento" name="nomeevento" type="text" value="{{isset($registro->nomeevento) ? $registro->nomeevento : ''}}">
    <label for="nomeevento">Qual o nome do seu evento?</label>
  </div>
  <br>
  <br>

  <!-- categoria -->
  <div class="input-field col s12 m6">
    <i id="iconebar" class="material-icons prefix">local_bar</i>
    <select id="categoria" name="categoria">
      <!-- <option disabled selected>Escolha a categoria do seu evento</option> -->

      @if(isset($registro->categoria))
        <option value="{{$registro->categoria}}" >{{$registro->categoria}}</option>
      @else
        <option disabled selected>Escolha a categoria do seu evento</option> 
      @endif

      @foreach($categorias as $categoria)
        <option value="{{$categoria}}">{{$categoria}}</option>
      @endforeach      
    </select>
  </div>

  <!-- data -->
  <div class="input-field col s6 ">
    <i class="material-icons prefix">event</i>
    <input id="data" type="text" name="data" class="datepicker" value="{{isset($registro->data) ? $registro->data : ''}}">
    <label for="data">Qual a data do seu evento?</label>
  </div>

  <!-- hora -->
  <div class="input-field col s6 ">
    <i class="material-icons prefix">access_alarm</i>
    <input id="horario" type="text" name="horario" class="timepicker" value="{{isset($registro->horario) ? $registro->horario : ''}}">
    <label for="horario">Qual a hora do seu evento?</label>
  </div>

  <!-- telefone -->
  <div class="input-field col s12 m6">
    <i class="material-icons prefix">phone</i>
    <input id="telefone" name="telefone" type="text" class="validate phone_with_ddd" value="{{isset($registro->telefone) ? $registro->telefone : ''}}">
    <label for="telefone">Qual o seu telefone?</label>
  </div>

  <!-- valor maximo -->
  <div class="input-field col s12 m6">
    <i class="material-icons prefix">attach_money</i>
    <input id="valormaximo" type="text" name="valormaximo" class="validate money" value="{{isset($registro->valormaximo) ? $registro->valormaximo : ''}}">
    <label>Qual valor máximo do seu evento?</label>
  </div>

  <!-- imagem -->
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

</div>
 