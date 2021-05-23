<div class="input-field col s6">
    <input type="text" name="nome" value="{{isset($registro->nome) ? $registro->nome : ''}}">
    <label>Qual seu nome?</label>
</div>

<div class="input-field col s6">
    <input type="text" name="sobrenome" value="{{isset($registro->sobrenome) ? $registro->sobrenome : ''}}">
    <label>Qual seu sobrenome?</label>
</div>

<div class="input-field col s6">
    <input type="text" name="email" value="{{isset($registro->email) ? $registro->email : ''}}">
    <label>Qual seu email? (exemplo@email.com)</label>

</div>

<div class="input-field col s6">
    <input type="text" name="cpf" class="validate cpf" value="{{isset($registro->cpf) ? $registro->cpf : ''}}">
    <label>Qual seu CPF?</label>
</div>

<div class="input-field col s6">
    <input type="text" name="usuario" value="{{isset($registro->usuario) ? $registro->usuario : ''}}">
    <label>Escolha um nome de usuário</label>
</div>


<div class="input-field col s6">

    <input type="password" name="senha" value="{{isset($registro->senha) ? $registro->senha : ''}}">
    <label>Informe uma senha</label>
</div>

<div class="input-field col s6">
    <input type="password" name="confirmsenha" value="{{isset($registro->confirmsenha) ? $registro->confirmsenha : ''}}">
    <label>Confirme sua senha</label>
</div>
