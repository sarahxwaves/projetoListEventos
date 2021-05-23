@extends('layout.site')

@section('titulo','Servicos')


@section('conteudo')

<div class="container">
    <h3 class='center'>Lista de Serviços</h3>
    <div class='row'>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Categoria</th>
                    <th>Valor</th>
                    <th>Telefone</th>

                </tr>


            </thead>
            <tbody>
                @foreach($registros as $registro)
                    <tr>
                        <td>{{ $registro->id}}</td>
                        <td>{{ $registro->nomeservico }}</td>
                        <td>{{ $registro->categoria }}</td>
                          <td>{{ $registro->valorservico }}</td>
                            <td>{{ $registro->tel }}</td>

                        <td>
                            <a class="btn DarkGray" href="{{ route('servico.editar',$registro->id) }}">Editar</a>
                            <a class="btn DarkRed" href="{{ route('servico.deletar',$registro->id) }}">Deletar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>


        </table>
    </div>
    <div class="row">
        <a class="btn SlateGray" href="{{ route('servico.add') }}">Adicionar</a>
    </div>
    <br>
    <div class="row">
        <a class="btn SlateGray" href="{{ route('fornecedor') }}">Voltar</a>
    </div>
</div>
@endsection
