<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('build.head')

<style>
    body {
        background: url('../assets/img/background-2.png');
        background-position: center;
        background-size: 100vh;
        background-repeat: no-repeat;
    }

    #carouselExampleDark {
        box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;
        background: white;
    }

    #main {
        padding: 22px;
    }

    .carousel-inner {
        height: 71vh !important;
    }

    .carousel-indicators {
        position: relative !important;
    }

    .carousel-item,
    .content {
        height: 100%;
    }

    .content {
        background-color: white;
        flex-direction: column;
        align-items: center;
        border-radius: 5px;
    }

    .content img {
        margin-top: 1rem;
        height: 110px;
        width: auto;
    }

    .content h1 {
        margin-bottom: 0px !important;
        font-size: 1.3rem;
    }

    .text-box {
        background-color: #F5F5F5;
        margin: 1rem;
        padding: 1rem;
        height: 61%;
        overflow-y: scroll;
        display: flex;
        flex-direction: column;
        align-items: center;
        width: -webkit-fill-available;
    }

    .text-box p {
        text-align: justify;
    }

    textarea {
        background: #ffffba;
        padding: 10px;
        width: -webkit-fill-available;
    }
</style>

<body class="antialiased">

    @include('build.header')

    <!-- main content -->
    <section id="main">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="30000">
                    <div class="content d-flex w-100 h-100">
                        <img src="{{ url('assets/img/sleep-duration.jpg') }}" width="95px" alt="ícone banho">
                        <h1>Tempo de sono</h1>
                        <div class="text-box">
                            <p style="color:black;">Adicione anotações sobre o tempo de sono e vigília do seu bebê</p>
                            <textarea name="anotacoes-canguru" cols="30" rows="9"></textarea>
                        </div>
                    </div>

                </div>
                <div class="carousel-item" data-bs-interval="30000">
                    <div class="content d-flex w-100 h-100">
                        <img src="{{ url('assets/img/baby-mother-sleep.png') }}" width="95px" alt="ícone banho">
                        <h1>Posição para dormir</h1>
                        <div class="text-box">
                            <p style="color:black;">No momento do sono, é importante manter seu bebê em posição dorsal,
                                ou seja, com a barriga para cima até o primeiro ano de vida, para evitar a morte súbita
                                do recém-nascido; portanto, a posição lateral não é segura e a posição ventral, com a
                                barriga para baixo, é extremamente proibida para os prematuros, principalmente pela
                                fraqueza muscular (OLIVEIRA et al., 2020).</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="content d-flex w-100 h-100">
                        <img src="{{ url('assets/img/sono.jpg') }}" width="95px" alt="ícone banho">
                        <h1>Posição para dormir</h1>
                        <div class="text-box">
                            <img class="mb-3" src="{{ url('assets/img/sleep-side.png') }}" width="95px"
                                style="height: 200px;border: 1px solid #dddddd;margin-top: 0.5rem;" alt="ícone banho">
                            <p
                                style="color: red;font-weight: bold;background: yellow;font-size: 1.7rem;font-family: system-ui;padding: 9px;border-radius: 5px;line-height: 30px;text-align: center;text-shadow: -2px 3px 4px #12191d54;">
                                ESTE LADO<br>PARA CIMA</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="30000">
                    <div class="content d-flex w-100 h-100">
                        <img src="{{ url('assets/img/berco.jpg') }}" width="95px" alt="ícone banho">
                        <h1>Orientações</h1>
                        <div class="text-box">
                            <p style="color:black;">Coloque o berço do seu bebê próximo à sua cama para que não durma na
                                mesma cama que a sua e, também, evite colocar materiais e objetos de consistência macia
                                nas laterais do berço, bem como evite cobertores de tecido espesso, travesseiros e/ou
                                almofadas, brinquedos e roupas de cama que não estejam fixas no colchão, pois essas
                                ações previnem acidentes graves, como sufocamento e/ou estrangulamento (OLIVEIRA et al.,
                                2020).</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
            </div>
        </div>
    </section>
    <!-- /main content -->

    @include('build.footer', ['page' => 'main'])

    @include('build.scripts')

    <script>
        var carousel = null;
        var paused = 0;
        var index = parseInt("{{ $index ?? 0 }}");
        $(() => {
            $('#carouselExampleDark').carousel({
                interval: 30000,
                pause: false
            });

            $('#carouselExampleDark').carousel(index);

        })

        function togglePlay(e) {
            var state = (paused) ? 'cycle' : 'pause';
            paused = (paused) ? 0 : 1;
            $('#carouselExampleDark').carousel(state);
            $(e).find('i').toggleClass('fas fa-play fas fa-pause');
        }
    </script>

</body>

</html>
