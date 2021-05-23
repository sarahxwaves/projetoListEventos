
@extends('layout.site')

@section('titulo','Clientes')


@section('conteudo')

<div class="container">
    <h3 class='center'>Lista de Clientes</h3>
    <div class='row'>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Email</th>
                    <th>CPF</th>
                    <th>Usuário</th>                    
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($registros as $registro)
                    <tr>
                        <td>{{ $registro->id }}</td>
                        <td>{{ $registro->nome }}</td>
                        <td>{{ $registro->sobrenome }}</td>
                        <td>{{ $registro->email }}</td>
                        <td>{{ $registro->cpf }}</td>
                        <td>{{ $registro->usuario }}</td>                        
                        <td>
                            <a class="btn DarkGray" href="{{ route('cliente.editar',$registro->id) }}">Editar</a>
                            <a class="btn DarkRed" href="{{ route('cliente.deletar',$registro->id) }}">Deletar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>        
    </div>
    <div class="row">
        <a class="btn SlateGray" href="{{ route('cliente.add') }}">Adicionar</a>
    </div>
    <br>
    <div class="row">
        <a class="btn SlateGray" href="{{ route('cliente') }}">Voltar</a>
    </div>
</div>
@endsection