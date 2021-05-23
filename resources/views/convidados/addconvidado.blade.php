@extends('layout.site')

@section('titulo','Convidado')


@section('conteudo')
<div class="container">
    <div class='row'>
      <div id="titulo">
        <h3><a class="btn-floating btn-medium pink" href="{{route('user.paginaevento')}}"><i class="material-icons">arrow_back</i></a><b> Meus convidados</b></h3>
      </div>

      <h5>Adicionar convidados</h5>

          <form class="" action="{{ route('convidado.salvar') }}" method="post">
            {{ csrf_field() }}
            @include('convidados._form')
              <button class="btn-floating "><i class="material-icons">add</i></button>
            </form><br><br><br>

            <table class="table-convidados col s7">
                <h5>Lista de convidados</h5>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Código</th>
                    </tr>
                </thead>
                <tbody >
                    @foreach($registros as $registro)
                        <tr>
                            <td>{{ $registro->nomeConvidado }}</td>
                            <td>{{ $registro->emailConvidado }}</td>
                              <td>0{{$registro->id}}</td>
                              <td>
                                <a class="btn-floating " href="{{ route('convidado.editar',$registro->id) }}"><i class="material-icons">edit</i></a>
                                <a class="btn-floating " id="btn-convidado" href="{{ route('convidado.deletar',$registro->id) }}"><i class="material-icons">close</i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div><br><br>
        <div class="input-field col s12">
          <button class="btn-large pink" href="#">Confirmar convidados</button>
          </div>
    </div>

</div>

@endsection
