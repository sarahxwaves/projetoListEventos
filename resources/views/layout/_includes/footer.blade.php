<!-- Compiled and minified JavaScript -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> -->

<footer class="footer bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 h-80 text-center text-lg-left my-auto">
                        <ul class="list-inline mb-2">
                            <li class="list-inline-item"><a href="#!">Sobre nós</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="#!">Contato</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="#!">Termos de uso</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="#!">Política de privacidade</a></li>
                        </ul>
                        <p class="text-muted small mb-4 mb-lg-0">© ListEventos 2021. Todos os direitos reservados.</p>
                    </div>

                </div>
            </div>
        </footer>

<script src="{{asset('plugins/jquery/jquery.min.js' )}}" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('plugins/materialize/js/materialize.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/materialize/js/materialize.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/mask/src/jquery.mask.js') }}" id='mask-js'></script>
  <script type="text/javascript" src="{{ asset('js/helper.js') }}"></script>


<script type='text/javascript'>
    const Calender = document.querySelector('.datepicker');
    M.Datepicker.init(Calender, {
        format: 'yyyy-mm-dd',
        showClearBtn: true,
        i18n: {
            cancel: 'Cancelar',
            clear: 'Limpar',
            done: 'Ok',
            previousMonth: '‹',
            nextMonth: '›',
            months: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
            monthsShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
            weekdays: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'],
            weekdaysShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab'],
            weekdaysAbbrev: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S']
        },
    });


</script>
</body>

</html>
