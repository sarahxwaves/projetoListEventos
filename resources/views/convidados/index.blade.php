@extends('layout.site')

@section('titulo','Convidados')


@section('conteudo')


<div class="container">
  <br><br>
  <div id="titulo">
    <h3><a class="btn-floating btn-medium pink" href="{{route('user.paginaevento')}}"><i class="material-icons">arrow_back</i></a><b> Lista de convidados</b></h3>
  </div>


  <div class="row">

    <div class="header ">

      <input type="text" id="myInput" placeholder="Insira o nome do seu convidado">
      <input type="text" id="myInputEmail" placeholder="Insira o email do seu convidado">
      <span onclick="newElement()"  class="pink btn">Adicionar convidado</span>
        <span onclick="newElementEmail()"  class="pink btn">Adicionar email</span>

    </div>
    <br><br>

    <div class="col s12">


    <ul id="myUL">
      <div class="input-field col s4">
      <li></li>
      <h6>Bruna Lívia</h6>
      <h6>Sarah Menezes</h6>
      <h6>Victor David</h6>
      <h6>Rafael Victor</h6>
      <h6>VInicius Campos</h6>
      <h6>Arthur Zatta</h6>
      <h6>Rhuan Kenned</h6>
      <h6>João Vitor</h6>
      <h6>Andressa Oliveira</h6>
      <h6>Nicolas Oliveira</h6>
    </ul>
    </div>

  <div class="input-field col s4">
    <ul id="myTL">
      <h6>email</h6>
      <h6>email</h6>

    </ul>
    </div>
</div>

    <a class="pink btn-large" href="">Confirmar convidados</a>


    <style media="screen">
      #titulo {

        color: #9B1736;

      }

      /* Include the padding and border in an element's total width and height */
      * {
        box-sizing: border-box;
      }

      /* Remove margins and padding from the list */
      ul {
        margin: 0;
        padding: 0;
      }

      /* Style the list items */
      ul H6 {
        cursor: pointer;
        position: relative;
        padding: 12px 8px 12px 40px;
        background: #eee;
        font-size: 18px;
        transition: 0.2s;

        /* make the list items unselectable */
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      /* Set all odd list items to a different color (zebra-stripes) */
      ul H6:nth-child(odd) {
        background: #f9f9f9;
      }

      /* Darker background-color on hover */
      ul H6:hover {
        background: #ddd;
      }

      /* When clicked on, add a background color and strike out text */
      ul H6.checked {
        background: #888;
        color: #fff;
        text-decoration: line-through;
      }

      /* Add a "checked" mark when clicked on */
      ul H6.checked::before {
        content: '';
        position: absolute;
        border-color: #fff;
        border-style: solid;
        border-width: 0 2px 2px 0;
        top: 10px;
        left: 16px;
        transform: rotate(45deg);
        height: 15px;
        width: 7px;
      }

      /* Style the close button */
      .close {
        position: absolute;
        right: 0;
        top: 0;
        padding: 12px 16px 12px 16px;
      }

      .close:hover {
        background-color: #EC7575;
        color: white;
      }

      /* Style the header */


      /* Clear floats after the header */
      .header:after {
        content: "";
        display: table;
        clear: both;
      }

      /* Style the input */
      input {
        margin: 0;
        border: none;
        border-radius: 0;
        width: 75%;
        padding: 10px;
        float: left;
        font-size: 16px;
      }

      /* Style the "Add" button */
      .addBtn {
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

      .addBtn:hover {
        background-color: #d99dbd;
      }

      .addBtn:active {
        position: relative;
        top: 1px;
      }
    </style>


    <script type="text/javascript">
      var myNodelist = document.getElementsByTagName("H6");
      var i;
      for (i = 0; i < myNodelist.length; i++) {
        var span = document.createElement("SPAN");
        var txt = document.createTextNode("\u00D7");
        span.className = "close";
        span.appendChild(txt);
        myNodelist[i].appendChild(span);
      }

      // Click on a close button to hide the current list item
      var close = document.getElementsByClassName("close");
      var i;
      for (i = 0; i < close.length; i++) {
        close[i].onclick = function() {
          var div = this.parentElement;
          div.style.display = "none";
        }
      }

      // Add a "checked" symbol when clicking on a list item
      var list = document.querySelector('ul');
      list.addEventListener('click', function(ev) {
        if (ev.target.tagName === 'H5') {
          ev.target.classList.toggle('checked');
        }
      }, false);

      // Create a new list item when clicking on the "Add" button
      function newElement() {
        var li = document.createElement("H6");
        var inputValue = document.getElementById("myInput").value;
        var t = document.createTextNode(inputValue);
        li.appendChild(t);
        if (inputValue === '') {
          alert("Insira o nome de um convidado");
        } else {
          document.getElementById("myUL").appendChild(li);
        }
        document.getElementById("myInput").value = "";

        var span = document.createElement("SPAN");
        var txt = document.createTextNode("\u00D7");
        span.className = "close";
        span.appendChild(txt);
        li.appendChild(span);

        for (i = 0; i < close.length; i++) {
          close[i].onclick = function() {
            var div = this.parentElement;
            div.style.display = "none";
          }
        }
      }

      function newElementEmail() {
        var lu = document.createElement("H6");
        var inputValueEmail = document.getElementById("myInputEmail").value;
        var u = document.createTextNode(inputValueEmail);
        lu.appendChild(u);
        if (inputValueEmail === '') {
          alert("Insira o nome email do convidado");
        } else {
          document.getElementById("myTL").appendChild(lu);
        }
        document.getElementById("myInputEmail").value = "";

        var span = document.createElement("SPAN");
        var txt = document.createTextNode("\u00D7");
        span.className = "close";
        span.appendChild(txt);
        lu.appendChild(span);

        for (i = 0; i < close.length; i++) {
          close[i].onclick = function() {
            var div = this.parentElement;
            div.style.display = "none";
          }
        }
      }
    </script>
    @endsection
