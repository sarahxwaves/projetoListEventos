
@extends('layout.site')

@section('titulo','Clientes')


@section('conteudo')

<div class="tabela">
    <h3 class='center'>Lista de Eventos</h3>
    <div class='row'>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Categoria</th>
                    <th>Data</th>
                    <th>Horário</th>
                    <th>Telefone</th>                    
                    <th>Valor Máximo</th>
                    <th>Imagem</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($registros as $registro)
                    <tr>
                        <td>{{ $registro->id }}</td>
                        <td>{{ $registro->nomeevento }}</td>
                        <td>{{ $registro->categoria }}</td>
                        <td>{{ $registro->data }}</td>
                        <td>{{ $registro->horario }}</td>
                        <td>{{ $registro->telefone }}</td>                        
                        <td>{{ $registro->valormaximo }}</td>                        
                        <td><img width="120" src="{{asset($registro->imagem)}}" alt="{{ $registro->nomeevento }}"></td> <!-- trás o caminho da imagem para exibí-la -->                      
                        <td>
                            <a class="btn DarkGray" href="{{ route('evento.editar',$registro->id) }}">Editar</a>
                            <a class="btn DarkRed" href="{{ route('evento.deletar',$registro->id) }}">Deletar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>        
    </div>       
    <div class="row">
        <a class="btn SlateGray" href="{{ route('cliente') }}">Voltar</a>
    </div>
</div>
@endsection