
@extends('layout.site')

@section('titulo','Criar Servico')


@section('conteudo')

<div class="container">
          <form class="" action="{{ route('servico.salvar') }}" method="post">
            {{ csrf_field() }}
            @include('servicos.continuar_servico')

            <a  class="myButton">Cadastrar serviço</a>
        </form>


            <br><style media="screen">

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
@endsection
