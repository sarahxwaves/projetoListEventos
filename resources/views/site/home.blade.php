@extends('layout.site')

@section('titulo','Home')

@section('conteudo')

  <div class="row">
      <div id="titulo"><h2><b>Site de Eventos</b></h2>
          <h5>Organize seu evento com as facilidades que ListEventos
            preparou para você!</h5>
      </div>

        <form class="col s12">
              <div class="input-field col s4" align="center">
                  <a class="mnButton" href="{{ route('cliente.add')}}">Criar Evento</a>
              </div>

              <div class="input-field col s4" align="center">
                  <a class=" mnButton " >Buscar Evento</a>
              </div>

              <div class="input-field col s4" align="center">
                  <a class="mnButton" href="{{ route('site.login') }}">Seja um Fornecedor</a>
              </div>

  <main>

<div class="col s12">


    <section class="cards-main">
        <div class="card-container">
          <div class="card-main" align="center">
            <i class="medium material-icons">event</i> </p>
            <h5>Administre seu evento</h5>
            <p>Crie e administre seu próprio evento gratuitamente e sem sair de casa!</p>
          </div>
      </div>


        <div class="card-container">
          <div class="card-main" align="center">
              <i class="medium material-icons">mode_comment</i></p>
              <h5>Divulgue seu evento</h5>
              <p>Compartilhe informações e atualizações do seu evento com seus convidados!</p>
          </div>
        </div>

      <div class="card-container">
        <div class="card-main" align="center">
            <i class="medium material-icons">assignment</i></p>
            <h5>Não se esqueça de nada</h5>
            <p>Confira nosso Checklist com  itens  importantes e o personalize como quiser! </p>
        </div>
    </div>
 </section>
<section class="cards-main">
    <div class="card-container">
        <div class="card-main" align="center">
          <i class="medium material-icons">attach_money</i></p>
          <h5>Divulgue seu trabalho</h5>
          <p>Cadastre-se como um fornecedor e se conecte aos seus clientes da plataforma</p>
        </div>
   </div>

   <div class="card-container">
    <div class="card-main" align="center">
       <i class="medium material-icons">people</i></p>
       <h5>Encontre Fornecedores</h5>
       <p>Ache com facilidade pessoas e empresas próximas de você para trabalhar no seu evento</p>
    </div>
</div>


      <div class="card-container">
        <div class="card-main" align="center">
          <i class="medium material-icons">insert_drive_file</i></p>
          <h5> Lista de convidados</h5>
          <p>Crie e gerencie sua lista de convidados. Envie convites e receba suas atualizações </p>
        </div>
    </div>

   </section>
   </div>
  </main>
  </div>
</form>



  <!--  <img src="img/home.png"  width="1350px" /> -->

@endsection
