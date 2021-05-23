<!DOCTYPE html>
@section('titulo','Checklist')
<html>
<head>
  <title>@yield('titulo')</title>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">


  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=2.0"/>
</head>
<body>
  <header>
    <script src= "js/materialize.min.js"></script>
        <img src="{{asset('img/servicos.png' )}}"/></a>
        <div class="nav-content">
          <br>

        </div>
  </nav>
  </header>

<div class="row">
<div class="container">
    <a class="btn-floating btn-medium pink" href="{{route('checklist.decoracao')}}"><i class="material-icons">arrow_back</i></a>
    <a class="btn-floating btn-medium pink right" href="{{route('checklist.atracoes')}}"><i class="material-icons">arrow_forward</i></a>
  <h4 class="">Informe quais serviços você deseja</h4>

  <div class="card-deck">


  <div class="card">
      <div class="input-field col s3 m3">
          <div class="card vertical">

                  <div class="card-content">
                    <p>
                        <label>
                            <br>
                         <input id="categoria" type="checkbox" class="validate" value="">
                         <span for ="categoria">Garçons</span>
                   </p>
                    <br>
                    <p>
                        <label>
                       <input id="categoria" type="checkbox" class="validate" value="">
                        <span for ="categoria">Cerimonial</span>
                    </p>
                      <br>
                  <p>
                    <label>
                         <input id="categoria" type="checkbox" class="validate" value="">
                          <span for ="categoria">Fotografia</span>
                  </p>
                    <br>
                    <p>
                        <label>
                              <input id="categoria" type="checkbox" class="validate" value="">
                             <span for ="categoria">Música</span>
                  </p>
                    <br>
                  <p>
                        <label>
                            <input id="categoria" type="checkbox" class="validate" value="">
                              <span for ="categoria">Vestuário</span>
                  </p>


                  </div>

              </div>
          </div>
      </div>

      <div class="card">
          <div class="input-field col s3 m4">
              <div class="card vertical">

                      <div class="card-content">
                        <p>
                            <label>
                                <br>
                             <input id="categoria" type="checkbox" class="validate" value="">
                             <span for ="categoria">Mestre de cerimônia</span>
                       </p>
                       <br>

                        <p>
                            <label>
                           <input id="categoria" type="checkbox" class="validate" value="">
                            <span for ="categoria">Segurança</span>
                        </p>
                        <br>

                      <p>
                        <label>
                             <input id="categoria" type="checkbox" class="validate" value="">
                              <span for ="categoria">Agência de viagem</span>
                      </p>
                      <br>

                        <p>
                            <label>
                                  <input id="categoria" type="checkbox" class="validate" value="">
                                 <span for ="categoria">Agência de publicidade</span>
                               </p>
                               <br>
                               <p>
                                   <label>
                                         <input id="categoria" type="checkbox" class="validate" value="">
                                        <span for ="categoria">Jornalista</span>
                                      </p>

                      </div>

                  </div>
              </div>
          </div>

          <div class="card">
              <div class="input-field col s3 m3">
                  <div class="card vertical">

                          <div class="card-content">
                            <p>
                                <label>
                                    <br>
                                 <input id="categoria" type="checkbox" class="validate" value="">
                                 <span for ="categoria">Limpeza</span>
                           </p>
                            <br>
                            <p>
                                <label>
                               <input id="categoria" type="checkbox" class="validate" value="">
                                <span for ="categoria">Palestrante</span>
                            </p>
                              <br>
                          <p>
                            <label>
                                 <input id="categoria" type="checkbox" class="validate" value="">
                                  <span for ="categoria">Animador</span>
                          </p>
                            <br>
                            <p>
                                <label>
                                      <input id="categoria" type="checkbox" class="validate" value="">
                                     <span for ="categoria">Outro:</span>
                                      <input id="nomeservico" type="text" value="">
                          </div>


                      </div>
                  </div>
              </div>
              <div class="input-field col s12">
                  <div class="row">

                      <a href="" class="myButton">Buscar Serviços</a>

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




  <br>
  <br>

      </div>

      @include('layout._includes.footer')
