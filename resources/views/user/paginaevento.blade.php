@extends('layout.site')

@section('titulo','Evento')

@section('conteudo')

<!--Header da pag -->
<figure id="container">
    <img id="imgevento" src="/img/home.png"  />
    <figcaption id="texto"><a class="btn-floating btn-medium pink" href="{{route('user')}}"><i class="material-icons">arrow_back</i></a> {{$registro->nomeevento}}</figcaption>
</figure>



<!-- Page Layout lateral -->

<div class="row">

    <!-- Page Layout center -->
    <div class="col s12 m8 l9">
        <div class=" itens col m4" align="center">
            <p><i class="material-icons">brightness_1</i>Fornecedores</p>
            <div>
              <a href="#" class="btn-floating btn-small pink"><i class="material-icons">add</i></a>
              <a href="#">Exibir Fornecedores</a>
            </div>
        </div>

        <div class="itens col m4" align="center">
            <p><i class="material-icons">brightness_1</i>CheckList</p>
            <div>
                <a href="{{ route('checklist') }}" class="btn-floating btn-small pink"><i class="material-icons">add</i></a>
                <a href="{{ route('checklist') }}">Exibir meu checklist</a>
            </div>
        </div>

        <div class="itens col m4" align="center">
            <p><i class="material-icons">brightness_1</i>Convidados</p>
            <div>
              <a href="{{ route('convidado.add') }}" class="btn-floating btn-small pink"><i class="material-icons">add</i></a>
              <a href="{{ route('convidado.add') }}">Exibir meus convidados</a>
            </div>
        </div>
    </div>
</div>

<!-- fornecedor -->
<div class="row">
    <div class="card">
        <div class="input-field col s3 m3">
                <div class="itemEvento card-content">
                    <h6>-Fornecedor 1</h6>
                    <h6>-Fornecedor 2</h6>
                    <h6>-Fornecedor 3</h6>
                    <h6>-Fornecedor 4</h6>
                    <h6>-Fornecedor 5</h6>
                    <h6>-Fornecedor 6</h6>
                    <h6>-Fornecedor 7</h6>
                    <h6>-Fornecedor 8</h6>
                    <h6>-Fornecedor 9</h6>
                    <h6>-Fornecedor 10</h6>
                </div>

        </div>

    </div>

    <!-- checklist -->
    <div class="card">
        <div class="input-field col s3 m3">
                <div class="itemEvento card-content">
                    <h6>-Decoração</h6>
                    <h6>-Fotografia</h6>
                    <h6>-Filmagem</h6>
                    <h6>-Cerimonialista</h6>
                    <h6>-Recepcionista</h6>
                    <h6>-Garçon</h6>
                    <h6>-Iluminação</h6>
                    <h6>-Madrinhas</h6>
                    <h6>-Musica</h6>
                    <h6>-Convite</h6>
                    <h6>-Vestido noiva</h6>
                    <h6>-DJ</h6>
                    <h6>-Bem casado</h6>
                    <h6>-Maquiagem</h6>

            </div>
        </div>
    </div>

    <!-- convidados -->
    <div class="card">
        <div class="input-field col s3 m3">
                <div class="itemEvento card-content">


                    <h6>-Bruna Lívia</h6>
                    <h6>-Sarah Menezes</h6>
                    <h6>-Victor David</h6>
                    <h6>-Rafael Victor</h6>
                    <h6>-VInicius Campos</h6>
                    <h6>-Arthur Zatta</h6>
                    <h6>-Rhuan Kenned</h6>
                    <h6>-João Vitor</h6>
                    <h6>-Andressa Oliveira</h6>
                    <h6>-Nicolas Oliveira</h6>
                </div>
        </div>
    </div>

</div>

@endsection
