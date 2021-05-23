<!DOCTYPE html>
<html>

<head>
    <title>@yield('titulo')</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->

    <!-- Compiled and minified CSS -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/site.css') }}">

    <script type="text/javascript" src="{{ asset('js/index.js') }}"></script>
    <script src="https://kit.fontawesome.com/631b2b79e1.js" crossorigin="anonymous" defer></script>

    <link type="text/css" rel="stylesheet" href="{{ asset('plugins/materialize/css/materialize.min.css') }}" media="screen,projection" />


    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=2.0" />
</head>

<body>
    <header>
        <nav class="nav-extended">
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo center"><img height="112" src="{{asset('img/logo.jpeg' )}}" /></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="/">Home</a></li>

                    @if(Auth::guest())
                        <li><a href="{{route('cliente.add')}}">Cadastre-se</a></li>
                        <li><a href="{{route('site.login')}}">Login</a></li>
                    @else
                        <li><a href="#">{{Auth::user()->name}}</a></li>
                        <li><a href="{{route('site.login.sair')}}">Sair</a></li>
                    @endif

                </ul>
            </div>
            <div class="nav-content">
                <ul class="tabs tabs-transparent">
                    <li class="tab"><a href="#test1">Sobre nós </a></li>
                    <li class="tab"><a class="active" href="{{route('fornecedor.pagina')}}">Fornecedores</a></li>
                    <li class="tab"><a href="#test3">Espaços</a></li>
                    <!-- <li class="material-icons left">search</i></li> -->
                </ul>
            </div>
        </nav>

        <ul class="sidenav" id="mobile">
            <div class="nav-wrapper pink">
                <a href="#!" class="brand-logo center"><img height="112" src="{{asset('img/logo.jpeg' )}}" /></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="/">Home</a></li>
                    @if(Auth::guest())
                        <li><a href="{{route('site.login')}}">Login</a></li>
                    @else
                        <li><a href="#">{{Auth::user()->name}}</a></li>
                        <li><a href="{{route('site.login.sair')}}">Sair</a></li>
                    @endif
                </ul>
            </div>
            <div class="nav-content">
                <ul class="tabs tabs-transparent">
                    <li class="tab"><a href="#test1">Sobre nós </a></li>
                    <li class="tab"><a class="active" href="#test2">Fornecedores</a></li>
                    <li class="tab"><a href="#test3">Espaços</a></li>
                    <li class="material-icons left">search</i></li>
                </ul>
            </div>
        </ul>
    </header>
