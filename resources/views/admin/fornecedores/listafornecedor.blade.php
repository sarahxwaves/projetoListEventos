
@extends('layout.site')

@section('titulo','Fornecedores')


@section('conteudo')

<div class="container">
    <h3 class='center'>Lista de Fornecedores</h3>
    <div class='row'>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>CNPJ</th>
                    <th>Usuário</th>

                </tr>


            </thead>
            <tbody>
                @foreach($registros as $registro)
                    <tr>
                        <td>{{ $registro->id }}</td>
                        <td>{{ $registro->nome }}</td>
                        <td>{{ $registro->email }}</td>
                        <td>{{ $registro->cnpj }}</td>
                        <td>{{ $registro->nomeUsuario }}</td>
                        <td>
                            <a class="btn DarkGray" href="{{ route('fornecedor.editar',$registro->id) }}">Editar</a>
                            <a class="btn DarkRed" href="{{ route('fornecedor.deletar',$registro->id) }}">Deletar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="row">
        <a class="btn SlateGray" href="{{ route('fornecedor.adicionar') }}">Adicionar</a>
    </div>
    <br>
    <div class="row">
        <a class="btn SlateGray" href="{{ route('fornecedor') }}">Voltar</a>
    </div>
</div>
@endsection
