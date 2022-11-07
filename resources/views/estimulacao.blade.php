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

    #lista {
        list-style: auto;
    }

    #lista li {
        margin-bottom: 10px;
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
                        <img src="{{ url('assets/img/brain.png') }}" width="95px" alt="ícone banho">
                        <h1>Estimulação neuropsicomotora</h1>
                        <div class="text-box">
                            <p style="color:black;">
                                A prematuridade pode causar danos no cérebro do bebê em diferentes níveis, sendo
                                necessária a adoção de medidas efetivas e iniciadas de forma precoce para promover o
                                crescimento, o desenvolvimento e reduzir as complicações futuras (MA et al., 2015;
                                SPITTLE & TREYVAUD, 2016).
                            </p>
                            <p style="color:black;">
                                O sistema neurológico do bebê está em desenvolvimento ativo durante o último trimestre
                                da gestação, algo que é interrompido pela prematuridade; portanto, a neuroestimulação
                                busca diminuir os efeitos negativos desse nascimento antecipado e promover o
                                desenvolvimento cerebral fora do útero (ALTIMIER & PHILLIPS, 2016).
                            </p>
                            <p style="color:black;">
                                Dentro do domicílio, você possui um papel importantíssimo na intervenção precoce, uma
                                vez que o cérebro desenvolve-se melhor em um ambiente estável, acolhedor e sólido, além
                                do vínculo e das medidas motoras e cognitivas que podem ser realizadas nesse contexto
                                visando o desenvolvimento neurocognitivo (ANAUATE & KAHHALE, 2020).
                            </p>
                        </div>
                    </div>

                </div>
                <div class="carousel-item" data-bs-interval="30000">
                    <div class="content d-flex w-100 h-100">
                        <img src="{{ url('assets/img/sing.png') }}" width="95px" alt="ícone banho">
                        <h1>Estimulação neuropsicomotora</h1>
                        <div class="text-box">
                            <p style="color:black;">Durante as atividades, busque realizar ações como olhar nos olhos,
                                conversar e tocar enquanto troca fraldas, amamenta, ou durante situações em que
                                estiverem juntos para proporcionar contato visual, auditivo e tátil. Isso faz com que os
                                sentidos do neonato sejam usados e aumenta o relacionamento entre vocês (ANAUATE &
                                KAHHALE, 2020).
                            </p>
                            <p style="color:black;">O banho costuma ser um momento bem estressante, mesmo com a
                                utilização da musicoterapia; portanto, durante a realização, você pode aplicar a
                                estimulação multissensorial, combinando a audição, o tato e a visão, pois pode facilitar
                                a organização comportamental do bebê e promover o crescimento e desenvolvimento (SOLTANI
                                et al., 2022).
                            </p>
                            <p style="color:black;">Ainda pensando no banho, você pode abraçar seu bebê, conversar
                                mantendo contato olho-a-olho, tocar e beijar antes do banho, manter o contato visual,
                                cantar canções de ninar durante o banho e manter tais interações após o banho (SOLTANI
                                et al., 2022).
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="content d-flex w-100 h-100">
                        <img src="{{ url('assets/img/massagem.png') }}" width="95px" alt="ícone banho">
                        <h1 style="font-size:1.1rem">Massagem</h1>
                        <div class="text-box">
                            <p style="color:black;">A realização da massagem e da cinesiterapia é uma prática relevante
                                que busca melhorar os parâmetros de crescimento do bebê: como peso, comprimento e
                                tamanho da cabeça, algo que pode evitar complicações futuras para o seu bebê (ÁLVAREZ et
                                al., 2019).
                            </p>
                            <p style="color:black;">Assim, a massagem deverá ser realizada pelo tempo de cinco minutos,
                                sendo um minuto em cada parte do corpo do bebê, respeitando a seguinte sequência: topo
                                da cabeça até o pescoço; pescoço e ombros; parte superior das costas até a cintura; da
                                coxa até o pé em ambas as pernas e do ombro para a mão em ambos os braços, respeitando a
                                posição supina (ÁLVAREZ et al., 2019).
                            </p>
                            <p style="color:black;">Já para a cinesiterapia, o bebê deverá ser mantido em posição supina
                                e cada membro do corpo flexionado e estendido por um minuto em cada seguimento,
                                preservando a suavidade para evitar lesões. Tal técnica visa a melhora do peso, tamanho
                                e circunferência cefálica do bebê pré-termo e tem apresentado resultados significativos,
                                além de ser algo simples e de baixo custo (ÁLVAREZ et al., 2019).
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="content d-flex w-100 h-100">
                        <img src="{{ url('assets/img/toys.png') }}" width="95px" alt="ícone banho">
                        <h1 style="font-size:1.1rem">Arte</h1>
                        <div class="text-box">
                            <p style="color:black;">A atenção visual imatura devido à prematuridade tem sido evidenciada
                                em diversos estudos em que neonatos com idade corrigida entre dois e quatro meses têm
                                apresentado movimentos oculares de perseguição suave atrasados, sendo este um fator de
                                risco importante para atraso no desenvolvimento (RODOVANSKI et al., 2021).
                            </p>
                            <p style="color:black;">Como definição, a capacidade de concentração em um objeto à medida
                                que se move através do campo visual é chamada de rastreamento visual; algo que deve ser
                                realizado pelos bebês de forma unidirecional e em movimento horizontal de dois a cinco
                                meses de idade; porém, a estimulação precoce nos prematuros tem sido altamente
                                recomendada em virtude da possibilidade de atraso visual (RODOVANSKI et al., 2021).
                            </p>
                            <p style="color:black;">Desta forma, com vistas a incentivar a interação e a encorajar o
                                trabalho manual, você poderá confeccionar um móbile para seu bebê, seguindo alguns
                                passos. (FIGUEIRA, 2017).
                            </p>
                            <p style="color:black;text-align:left">São eles:
                            </p>
                            <ul id="lista">
                                <li>Planeje o que vai fazer e separe o material adequado, como tesoura, papel (ou outro
                                    material), linha, palitos. Escolha o tema, como peixes, pássaros ou pipas.</li>
                                <li>Prepare o suporte colocando um palito de churrasco ou de picolé sobre o outro
                                    formando um “X” e amarre com linha ou algum tipo de fio dando várias voltas para que
                                    fique firme. Amarre e corte o excesso.</li>
                                <li>Para preparar as figurinhas do móbile, você pode desenhar livremente ou usar
                                    desenhos prontos. As figurinhas devem possuir dois lados iguais com formato
                                    tridimensional. Após confeccionada e pronta, faça um furo na parte superior.</li>
                                <li>Passe a linha ou fio pelo furo que foi feito e amarre com tamanho adequado para que
                                    fique pendurado, mantendo o cuidado para não rasgar a figura. Faça isso com todas as
                                    figuras mostrando um resultado tridimensional. Amarre tudo no suporte que foi feito.
                                </li>
                                <li>Finalmente, seu móbile está pronto. Não se esqueça de ser criativa!</li>
                            </ul>
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
