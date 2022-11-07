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
                        <img src="{{ url('assets/img/fever.png') }}" width="95px" alt="ícone banho">
                        <h1>Temperatura corporal</h1>
                        <div class="text-box">
                            <p style="color:black;">Durante os cuidados no domicílio, alguns sinais de alerta podem ser
                                percebidos previamente, algo que pode evitar a ocorrência de doenças à saúde do seu
                                filho. Desta forma, com relação ao controle térmico, você deverá atentar para alterações
                                de temperatura, ou seja, se o neonato está apresentando valores menores que 36,5ºC ou
                                maiores que 37,5C, pois trata-se de um indicador de risco para mortalidade neonatal, já
                                que promove distúrbios do metabolismo, alteração na respiração e aumenta o risco de
                                hemorragia no cérebro. Com calma, note se tal alteração na temperatura está relacionada
                                a algum fator externo, como roupas em excesso ou o próprio ambiente de acomodação do
                                neném (LIMA et al., 2020).
                            </p>
                        </div>
                    </div>

                </div>
                <div class="carousel-item" data-bs-interval="30000">
                    <div class="content d-flex w-100 h-100">
                        <img src="{{ url('assets/img/lungs.png') }}" width="95px" alt="ícone banho">
                        <h1>Como estou respirando?</h1>
                        <div class="text-box">
                            <p style="color:black;">Perceba se seu bebê está apresentando cansaço aparente, dificuldades
                                para respirar, alteração visível do tórax e abdômen e aparecimento de secreção em área
                                de nariz e boca (LIMA et al., 2020).
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="content d-flex w-100 h-100">
                        <img src="{{ url('assets/img/baby-skin-2.png') }}" width="95px" alt="ícone banho">
                        <h1 style="font-size:1.1rem">Coloração da pele</h1>
                        <div class="text-box">
                            <p style="color:black;">A coloração da pele do bebê prematuro é um importante marcador de
                                alteração; portanto, olhe para o seu bebê e observe se há alguma alteração na coloração
                                da pele, como a coloração amarelada nos olhos e nas substâncias que são eliminadas, como
                                o xixi e fezes, pois seu bebê pode estar apresentando icterícia. Outro ponto de atenção
                                é a coloração azulada na boca e nos dedos das mãos e pés, que pode ocorrer por obstrução
                                da boca e nariz, postura inadequada no berço ou alguma doença como as do coração; mas
                                também pode ocorrer pelo frio. Portanto, esteja atenta a todos os detalhes (GODOY et
                                al., 2021; SOUSA et al., 2020).
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="content d-flex w-100 h-100">
                        <img src="{{ url('assets/img/importante.png') }}" width="95px" alt="ícone banho">
                        <h1 style="font-size:1.1rem">Importante</h1>
                        <div class="text-box">
                            <p style="color:black;">Você deverá, inclusive, prestar atenção nos sinais de prostração,
                                apatia, suor excessivo, alteração nos padrões de sucção e deglutição e sonolência
                                anormal. Portanto, veja se seu bebê está apresentando dificuldades na mamada.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="content d-flex w-100 h-100">
                        <img src="{{ url('assets/img/cry.png') }}" width="95px" alt="ícone banho">
                        <h1 style="font-size:1.1rem">Por que estou chorando?</h1>
                        <div class="text-box">
                            <p style="color:black;">Ainda falando sobre os sinais de alerta, note se seu bebê apresenta
                                alguma alteração e caso encontre, busque ajuda. Observe alterações no comportamento,
                                como membros em flexão e modificação da expressão facial, pois os recém-nascidos
                                prematuros apresentam como evidência a região da testa saliente, área da narina e lábios
                                aprofundados e queixo com tremor. Preste atenção nos padrões de choro vigoroso, ou seja,
                                aquele choro inconsolável ou irritado, pois pode ser um importante indicador de alguma
                                doença (SOARES et al., 2017).
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="content d-flex w-100 h-100">
                        <img src="{{ url('assets/img/poop.png') }}" width="95px" alt="ícone banho">
                        <h1 style="font-size:1.1rem">Fezes e urina</h1>
                        <div class="text-box">
                            <p style="color:black;">No momento da troca de fraldas, atente para o aspecto das
                                eliminações do seu bebê. Com relação ao cocô, veja se há presença de muco e/ou sangue,
                                observe a frequência para considerar episódios de diarreia ou constipação. Não se
                                esqueça de verificar a consistência, para o caso de estarem secas ou duras, pois pode
                                indicar mamada inadequada. A quantidade ideal de trocas de fraldas de xixi deve ser de
                                ,no mínimo, 6 fraldas em 24 horas, pois indica que o seu bebê está com a alimentação
                                adequada. Ah, não esqueça de verificar a coloração do xixi, para o caso de apresentar
                                sangue ou coloração escurecida (BRASIL, 2019).
                            </p>
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
