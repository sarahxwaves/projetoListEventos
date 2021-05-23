@php
$midias = ['Fotografia','Filmagem','Som','Jornalista','Musica'];
$ambientes = ['Decoração','Aluguel de mesa','Aluguel de arranjos','Limpeza','Iluminação'];
$pessoass = ['Palestrante','Segurança','Garçon','Barman','Recepcionista', 'Motorista', 'Anfitriões'];
$buffets = ['Água','Champanhe','Coffebreak','Bolos e doces','Petiscos', 'Refrigerante', 'Suco', 'Bebidas Alcoólicas'];
$atracoess = ['DJ','Animador','Banda','Mágico','Massagem', 'Stand Up', 'Escola de Samba', 'Brinquedos'];
$cerimonias = ['Cerimonialista','Locutor','Entradas','Dança','Brinde', 'Homenagem','Madrinhas','Damas','Padrinhos'];
$personalizadoss = ['Convite','Lembrança','Bem casado','Bem vivido','Chinelos', 'Toalhas','Caixinha','Taça','Camisa','Banner','Pulseiras'];
$vestuarios = ['Vestido noiva','Fantasia','Terno','Acessórios','Sapatos', 'Bolsa','Penteado','Maquiagem'];
@endphp

<div class="container">

    <br><br>

    <div id="titulo">
      <h3><a class="btn-floating btn-medium pink" href="{{route('user.paginaevento')}}"><i class="material-icons">arrow_back</i></a><b>Checklist</b></h3>
    </div>
    <h5>Não deixe nada faltando!<br>
        Confira nosso checklist para um evento perfeito!</h5>

    <div class="row">

        <!-- midia -->
        <div class="input-field col s12 m6">
            <h5 id="label">Mídia</h5>
            <select multiple id="midia" name="midia">
                <!-- <option disabled selected>Escolha a categoria do seu evento</option> -->

                @if(isset($registro->midia))
                <option value="{{$registro->midia}}">{{$registro->midia}}</option>
                @else
                <option disabled selected>Mídia</option>
                @endif

                @foreach($midias as $midia)
                <option value="{{$midia}}">{{$midia}}</option>
                @endforeach
            </select>
        </div>

        <!-- ambiente -->
        <div class="input-field col s12 m6">
        <h5 id="label">Ambiente</h5>
            <select multiple id="ambiente" name="ambiente">
                <!-- <option disabled selected>Escolha a categoria do seu evento</option> -->

                @if(isset($registro->ambiente))
                <option value="{{$registro->ambiente}}">{{$registro->ambiente}}</option>
                @else
                <option disabled selected>Ambiente</option>
                @endif

                @foreach($ambientes as $ambiente)
                <option value="{{$ambiente}}">{{$ambiente}}</option>
                @endforeach
            </select>
        </div>

        <!-- pessoas -->
        <div class="input-field col s12 m6">
        <h5 id="label">Pessoas</h5>
            <select multiple id="pessoas" name="pessoas">
                <!-- <option disabled selected>Escolha a categoria do seu evento</option> -->

                @if(isset($registro->pessoas))
                <option value="{{$registro->pessoas}}">{{$registro->pessoas}}</option>
                @else
                <option disabled selected>Pessoas</option>
                @endif

                @foreach($pessoass as $pessoas)
                <option value="{{$pessoas}}">{{$pessoas}}</option>
                @endforeach
            </select>
        </div>

        <!-- buffet -->
        <div class="input-field col s12 m6">
        <h5 id="label">Buffet</h5>
            <select multiple id="buffet" name="buffet">
                <!-- <option disabled selected>Escolha a categoria do seu evento</option> -->

                @if(isset($registro->buffet))
                <option value="{{$registro->buffet}}">{{$registro->buffet}}</option>
                @else
                <option disabled selected>Buffet</option>
                @endif

                @foreach($buffets as $buffet)
                <option value="{{$buffet}}">{{$buffet}}</option>
                @endforeach
            </select>
        </div>

        <!-- atracoes -->
        <div class="input-field col s12 m6">
        <h5 id="label">Atrações</h5>
            <select multiple id="atracoes" name="atracoes">
                <!-- <option disabled selected>Escolha a categoria do seu evento</option> -->

                @if(isset($registro->atracoes))
                <option value="{{$registro->atracoes}}">{{$registro->atracoes}}</option>
                @else
                <option disabled selected>Atrações</option>
                @endif

                @foreach($atracoess as $atracoes)
                <option value="{{$atracoes}}">{{$atracoes}}</option>
                @endforeach
            </select>
        </div>

        <!-- cerimonia -->
        <div class="input-field col s12 m6">
        <h5 id="label">Cerimônia</h5>
            <select multiple id="cerimonia" name="cerimonia">
                <!-- <option disabled selected>Escolha a categoria do seu evento</option> -->

                @if(isset($registro->cerimonia))
                <option value="{{$registro->cerimonia}}">{{$registro->cerimonia}}</option>
                @else
                <option disabled selected>Cerimônia</option>
                @endif

                @foreach($cerimonias as $cerimonia)
                <option value="{{$cerimonia}}">{{$cerimonia}}</option>
                @endforeach
            </select>
        </div>

        <!-- personalizados -->
        <div class="input-field col s12 m6">
        <h5 id="label">Personalizados</h5>
            <select multiple id="personalizados" name="personalizados">
                <!-- <option disabled selected>Escolha a categoria do seu evento</option> -->

                @if(isset($registro->personalizados))
                <option value="{{$registro->personalizados}}">{{$registro->personalizados}}</option>
                @else
                <option disabled selected>Personalizados</option>
                @endif

                @foreach($personalizadoss as $personalizados)
                <option value="{{$personalizados}}">{{$personalizados}}</option>
                @endforeach
            </select>
        </div>

        <!-- vestuario -->
        <div class="input-field col s12 m6">
        <h5 id="label">Vestuário</h5>
            <select multiple id="vestuario" name="vestuario">
                <!-- <option disabled selected>Escolha a categoria do seu evento</option> -->

                @if(isset($registro->vestuario))
                <option value="{{$registro->vestuario}}">{{$registro->vestuario}}</option>
                @else
                <option disabled selected>Vestuário</option>
                @endif

                @foreach($vestuarios as $vestuario)
                <option value="{{$vestuario}}">{{$vestuario}}</option>
                @endforeach
            </select>
        </div>


        <style media="screen">
            #titulo {

                color: #9B1736;

            }

            .myButton {
                box-shadow: -3px -1px 5px -14px #fbafe3;
                background-color: #EC7575;
                border-radius: 17px;
                display: inline-block;
                cursor: pointer;
                color: #ffffff;
                font-family: Arial;
                font-size: 23px;
                padding: 11px 22px;
                text-decoration: none;
            }

            .myButton:hover {
                background-color: #d99dbd;
            }

            .myButton:active {
                position: relative;
                top: 1px;
            }

            #label {
                color:  #9B1736;
            }
        </style>
