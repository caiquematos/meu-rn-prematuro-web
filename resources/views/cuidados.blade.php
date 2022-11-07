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
                        <img src="{{ url('assets/img/fralda.png') }}" width="95px" alt="ícone banho">
                        <h1>Fralda</h1>
                        <div class="text-box">
                            <p style="color:black;">Para realizar a troca da fralda, é importante evitar a elevação das
                                pernas e pés; prefira lateralizar o seu bebê e proceder à limpeza da genitália de dentro
                                para fora e atente para a utilização de fraldas que sejam adequadas e/ou adaptadas ao
                                tamanho de seu filho. Além disso, evite o uso rotineiro de sabonetes, opte pela
                                utilização de algodão e água para a higiene e creme de barreira à base de óxido de
                                zinco. Essa conduta evita o surgimento de assaduras (DELGADO et al., 2019; BRASIL, 2017;
                                SOBENDE, 2020). </p>
                        </div>
                    </div>

                </div>
                <div class="carousel-item" data-bs-interval="30000">
                    <div class="content d-flex w-100 h-100">
                        <img src="{{ url('assets/img/doubt.png') }}" width="95px" alt="ícone banho">
                        <h1>Dúvidas</h1>
                        <div class="text-box">
                            <p style="color:black;">Não se esqueça de realizar a limpeza do coto umbilical sempre após o
                                banho ou após a troca de fraldas. Você pode utilizar água e sabão e secar, visando
                                evitar ocorrência de infecção, como onfalite (BRASIL, 2014; SBP, 2021).</p>
                            <p style="color:black;">Para adequada higiene oral, é necessária a utilização de gaze ou
                                pano limpo e água filtrada, com o que você procederá à limpeza da cavidade oral
                                utilizando o dedo mínimo no céu da boca, áreas internas da boca, como bochecha e região
                                da língua do seu bebê, para evitar acúmulo de resíduos (LIMA et al., 2020).</p>
                            <p style="color:black;">Procure evitar o uso de cotonetes no ouvido do seu neném, pois esses
                                objetos tendem a empurrar a cera de volta e ocasionar acúmulo, podendo fazer com que
                                haja bloqueio da audição, sangramento e danos irreparáveis, como perfuração (KORIOTH,
                                2017).</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="content d-flex w-100 h-100">
                        <img src="{{ url('assets/img/note.png') }}" width="95px" alt="ícone banho">
                        <h1>Dúvidas</h1>
                        <div class="text-box">
                            <p style="color:black;">Adicione anotações sobre dúvidas ou observações relacionadas ao
                                banho do bebê</p>
                            <textarea name="anotacoes-canguru" cols="30" rows="9"></textarea>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="30000">
                    <div class="content d-flex w-100 h-100">
                        <img src="{{ url('assets/img/baby-skin.png') }}" width="95px" alt="ícone banho">
                        <h1>Pele do bebê</h1>
                        <div class="text-box">
                            <p style="color:black;">A pele do seu bebê é extremamente sensível e deve ser um ponto de
                                atenção, pois auxilia a recuperação e manutenção da saúde e previne doenças; desta
                                forma, é importante preferir produtos que evitem irritações cutâneas e promovam a
                                hidratação corporal. Então, para proporcionar uma hidratação adequada, pensado em
                                reduzir o ressecamento e manter as funções da pele, como temperatura corporal e
                                absorção, prefira produtos que contenham umectantes e óleos, visto que ambos são capazes
                                de hidratar e podem ser retirados facilmente (LEITE et al., 2021).</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="30000">
                    <div class="content d-flex w-100 h-100">
                        <img src="{{ url('assets/img/bathing.png') }}" width="95px" alt="ícone banho">
                        <h1>Hora do banho</h1>
                        <div class="text-box">
                            <p style="color:black;">O momento do banho deve ser realizado em um ambiente calmo, seguro e
                                aquecido, com temperatura em torno de 26ºC e com água morna, entre 38ºC e 39ºC, para
                                promover conforto e evitar perda de calor do recém-nascido. Comece pela cabeça, mantendo
                                o corpo enrolado e aquecido; ou seja, inicie molhando primeiro a cabeça, mantendo
                                vigilância com as orelhas para evitar a entrada de água e possível acometimento
                                auditivo. Após, lave o rosto do seu bebê, podendo higienizar os olhos com soro
                                fisiológico a 0,9% ou água limpa, fazendo movimentos da parte externa para a interna
                                (LIMA et al., 2020).</p>
                            <p style="color:black;">Realize a secagem da cabeça e posicione o corpo do seu neném na
                                água, deixando a cabeça exposta e apoiada em seu antebraço. Mantenha a mão em formato de
                                gancho para promover a segurança. Mantenha a banheira ou bacia com uma quantidade de
                                água que cubra todo o tórax do seu bebê. Depois, posicione-o em ventral para realizar a
                                higiene íntima da região das costas. Este momento deve durar de 8 a 10 minutos para
                                evitar exposição aumentada ao frio (LIMA et al., 2020).</p>
                            <p style="color:black;">Finalizado esse momento, enrole, seque e promova vestuário
                                apropriado, sempre visando diminuir a perda exagerada de calor.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="30000">
                    <div class="content d-flex w-100 h-100">
                        <img src="{{ url('assets/img/cosmetics.png') }}" width="95px" alt="ícone banho">
                        <h1>Posso usar?</h1>
                        <div class="text-box">
                            <p style="color:black;">Evite sabonetes que alteram o pH da pele do seu bebê, pois os
                                agentes químicos utilizados na confecção podem proporcionar irritação e/ou alergias
                                cutâneas pela própria absorção das substâncias tóxicas (SOBENDE, 2020).</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="content d-flex w-100 h-100">
                        <img src="{{ url('assets/img/video.png') }}" width="95px" alt="ícone banho">
                        <h1>Playlist</h1>
                        <div class="text-box">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/0nL3hojYCqk"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
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
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5"
                    aria-label="Slide 6"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="6"
                    aria-label="Slide 7"></button>
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
