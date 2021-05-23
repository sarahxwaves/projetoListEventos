    <div class="input-field col s6">
   <input type="text" name="nome" value="{{isset($registro->nome) ? $registro->nome : ''}}">
      <label>Qual seu nome completo?</label>
    </div>



    <div class="input-field col s6">
      <input type="text" name="nomeUsuario" value="{{isset($registro->nomeUsuario) ? $registro->nomeUsuario : ''}}">
      <label>Escolha seu nome de usuário</label>
    </div>

    <div class="input-field col s6">
     <input type="text" name="email" value="{{isset($registro->email) ? $registro->email : ''}}">
      <label>Qual seu e-mail?</label>
    </div>


 <div class="input-field col s6">
 <input type="text" name="cnpj" class="validade cnpj" value="{{isset($registro->cnpj) ? $registro->cnpj : ''}}">
   <label>Qual seu CNPJ?</label>
 </div>






<div class="input-field col s6">
    <input type="password" name="senha"  value="{{isset($registro->senha) ? $registro->senha : ''}}">
  <label>Informe uma senha</label>
</div>
<div class="input-field col s6">
  <input type="password" name="confirmsenha"  value="{{isset($registro->confirmsenha) ? $registro->confirmsenha : ''}}">
  <label>Confirme sua senha</label>
</div>
