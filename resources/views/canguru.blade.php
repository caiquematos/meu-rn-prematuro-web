<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('build.head')

<style>
    body {
        background: url('assets/img/background-2.png');
        background-position: center;
        background-size: 170%;
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
                        <img src="{{ url('assets/img/canguru-original.png') }}" width="95px" alt="ícone banho">
                        <h1>Canguru</h1>
                        <div class="text-box">
                            <p style="color:black;">A 3ª etapa do Método Canguru inicia-se no momento da alta
                                hospitalar, em que o recém-nascido prematuro e/ou de baixo peso não necessita mais de
                                cuidados hospitalares e passará a receber cuidados domiciliares de sua família. Durante
                                este momento, seu bebê e toda a família serão assistidos pela equipe das unidades
                                básicas de saúde e da equipe do hospital, visando promover um cuidado integral (BRASIL,
                                2018).
                            </p>
                        </div>
                    </div>

                </div>
                <div class="carousel-item" data-bs-interval="30000">
                    <div class="content d-flex w-100 h-100">
                        <img src="{{ url('assets/img/sing.png') }}" width="95px" alt="ícone banho">
                        <h1>Incentivo</h1>
                        <div class="text-box">
                            <p style="color:black;">Cante para o seu bebê. Seu RN precisa do contato pele a pele, seu
                                toque estimula o cérebro do RN. Que tal ficar nessa posição mais um pouco? A música
                                ajuda a relaxar.
                            </p>
                        </div>
                    </div>

                </div>
                <div class="carousel-item">
                    <div class="content d-flex w-100 h-100">
                        <img src="{{ url('assets/img/canguru-2.png') }}" width="95px" alt="ícone banho">
                        <h1 style="font-size:1.1rem">Como fazer a posição canguru?</h1>
                        <div class="text-box">
                            <p style="color:black;">Deixe seu bebê apenas com a fralda, meias e touca; ou seja, evite
                                colocar roupas que cubram o corpo neste momento. Retire seu sutiã e coloque uma faixa ou
                                algo que proporcione contenção junto ao seu corpo e que seja confortável para ambos, de
                                forma que permita que realize outras atividades diárias, caso queira. Coloque o bebê
                                junto ao seu corpo, dentro da faixa, para proporcionar o contato pele a pele. Evite
                                amarrar a faixa na região das costas para não provocar desconforto (BRASIL, 2018).
                            </p>
                        </div>
                    </div>

                </div>
                <div class="carousel-item">
                    <div class="content d-flex w-100 h-100">
                        <img src="{{ url('assets/img/video.png') }}" width="95px" alt="ícone banho">
                        <h1>Playlist</h1>
                        <div class="text-box">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/CHWmsS5tVuo"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                    </div>

                </div>
                <div class="carousel-item">
                    <div class="content d-flex w-100 h-100">
                        <img src="{{ url('assets/img/note.png') }}" width="95px" alt="ícone banho">
                        <h1>Anotações</h1>
                        <div class="text-box">
                            <p style="color:black;">Adicione observações sobre a posição canguru para apresentar na
                                consulta</p>
                            <textarea name="anotacoes-canguru" cols="30" rows="9"></textarea>
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
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4"
                    aria-label="Slide 5"></button>
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

            $('#carouselExampleDark').on('slide.bs.carousel', event => {
                console.log("slide passado")
            })



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
