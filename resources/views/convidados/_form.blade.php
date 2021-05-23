<div class="input-field col s3">
<input type="text" id="myInput" name="nomeConvidado" value="{{isset($registro->nome) ? $registro->nomeConvidado : ''}}">
  <label>Nome do convidado</label>
</div>

<div class="input-field col s3">
  <input type="text" name="emailConvidado" value="{{isset($registro->emailConvidado) ? $registro->emailConvidado : ''}}">
  <label>Email do convidado</label>
</div>
