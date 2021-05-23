
@extends('layout.site')

@section('titulo','Admin')


@section('conteudo')

<div class="container">
    <br>

    <h5>Bem-Vindo Admin</h5><br />

    <div>
        <a href="{{route('listafornecedor')}}"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus-circle" class="svg-inline--fa fa-plus-circle fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm144 276c0 6.6-5.4 12-12 12h-92v92c0 6.6-5.4 12-12 12h-56c-6.6 0-12-5.4-12-12v-92h-92c-6.6 0-12-5.4-12-12v-56c0-6.6 5.4-12 12-12h92v-92c0-6.6 5.4-12 12-12h56c6.6 0 12 5.4 12 12v92h92c6.6 0 12 5.4 12 12v56z"></path>
            </svg> Abrir lista de fornecedores</a>
    </div>


</div>


<style>
    a {
        font-size: 20px;
        color: #696969;
    }

    p {
        font-size: 26px;
        color: #DC143C;
        left: 10px;
    }

    svg {
        display: inline-block;
        font-size: inherit;
        height: 1em;
        overflow: visible;
        vertical-align: -.125em;
        color: #DC143C;
    }
</style>
@endsection
