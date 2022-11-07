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
                        <img src="{{ url('assets/img/amamentacao.jpg') }}" width="95px" alt="ícone banho">
                        <h1>Amamentação</h1>
                        <div class="text-box">
                            <p style="color:black;text-align:left;font-style:italic">
                                Das mães que sempre amamentam<br>
                                Diminui a ansiedade<br>
                                O contato corpo a corpo<br>
                                Traz muita tranquilidade<br>
                                Pois com a amamentação<br>
                                Se reduz a rejeição<br>
                                Há um apego de verdade (OLIVEIRA et al, 2008).
                            </p>
                            <p style="color:black;text-align:left;font-style:italic">
                                O aleitamento materno<br>
                                Tem efeito protetor<br>
                                Do câncer de mama e ovário<br>
                                Garantiu outro doutor<br>
                                Pra males do coração<br>
                                O leite tem proteção<br>
                                Quando adulto o nenê for (OLIVEIRA et al, 2008).
                            </p>
                            <p style="color:black;text-align:left;font-style:italic">
                                No aspecto psicológico<br>
                                Um psicólogo afirmou<br>
                                Que pela amamentação<br>
                                Algo de bom se firmou<br>
                                Nutre o desenvolvimento<br>
                                E o amadurecimento<br>
                                Do bebê que a mãe gerou (OLIVEIRA et al, 2008).
                            </p>
                            <p style="color:black;text-align:left;font-style:italic">
                                Sempre que o nenê quiser<br>
                                Deem o peito pra mamar<br>
                                E sempre em cada mamada<br>
                                Os dois peitos devem dar<br>
                                Quando a mama está no fim<br>
                                O leite é mais gordo e assim<br>
                                Mais peso ele vai ganhar (OLIVEIRA et al, 2008).
                            </p>
                            <p style="color:black;text-align:left;font-style:italic">
                                Sempre que o nenê quiser<br>
                                Deem o peito pra mamar<br>
                                E sempre em cada mamada<br>
                                Os dois peitos devem dar<br>
                                Quando a mama está no fim<br>
                                O leite é mais gordo e assim<br>
                                Mais peso ele vai ganhar (OLIVEIRA et al, 2008).
                            </p>
                        </div>
                    </div>

                </div>
                <div class="carousel-item" data-bs-interval="30000">
                    <div class="content d-flex w-100 h-100">
                        <img src="{{ url('assets/img/aleitamento.jpg') }}" width="95px" alt="ícone banho">
                        <h1>Incentivo ao aleitamento</h1>
                        <div class="text-box">
                            <p style="color:black;">Ao contrário do leite de fórmula infantil, o seu leite possui
                                nutrientes que promovem proteção para o corpo do bebê, protegem o intestino prematuro e
                                estimula o desenvolvimento do cérebro. Além disso, o leite humano possui uma composição
                                única, com agentes antimicrobianos, anti-inflamatórios e imunoregulatórios. É
                                recomendado o aleitamento materno exclusivo até os 6 meses, caso seja possível, pois
                                pode contribuir para a diminuição de infecções do trato respiratório, diarreia grave,
                                inflamações no ouvido (otite média) e obesidade. Ah, não ofereça nenhum outro líquido ao
                                seu bebê até os 6 meses de idade, como chá ou água, pois o seu leite possui os
                                componentes necessários para sua hidratação (MEEK & NOBLE, 2022; HO et al., 2018).
                            </p>
                            <p style="color:black;">Pensando nos benefícios para a sua saúde, a prática do aleitamento
                                materno diminui o sangramento uterino, diminui o risco de doenças como diabetes tipo 2,
                                câncer de mama e de ovário e está sempre pronto na temperatura ideal, além de ser mais
                                econômico e sem custo (VALLEJO, 2022).
                            </p>
                            <p style="color:black;">Uma dica importante para uma boa produção de leite é ter uma
                                alimentação bem variada, dando preferência a alimentos naturais, como vegetais, legumes,
                                frutas, carnes, ovos e cereais. Além disso, beba muita água e evite bebidas alcoólicas e
                                refrigerantes (VALLEJO, 2022).
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="content d-flex w-100 h-100">
                        <img src="{{ url('assets/img/formas.jpg') }}" width="95px" alt="ícone banho">
                        <h1 style="font-size:1.1rem">Posição e pega</h1>
                        <div class="text-box">
                            <p style="color:black;">Para evitar traumas nas suas mamas e oferecer o leite materno de
                                forma adequada, é importante prestar atenção na posição e na pega do seu bebê. Para o
                                posicionamento correto, o corpo do seu bebê deverá estar próximo ao seu, a cabeça e o
                                corpo alinhados e apoiados. Já para uma pega adequada, a boca do seu bebê deverá estar
                                bem aberta, com o lábio inferior virado para fora, o queixo tocando a região inferior do
                                seio materno e a aréola visível acima da boca do neném (BRASIL, 2007; MORAES et al.,
                                2020).
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="content d-flex w-100 h-100">
                        <img src="{{ url('assets/img/canguru-amamentacao.jpg') }}" width="95px" alt="ícone banho">
                        <h1>Formas de amamentar</h1>
                        <div class="text-box">
                            <p style="color:black;">A posição sentada pode permitir o descanso dos pés em travesseiros,
                                o cruzamento das pernas e a realização de atividades como leitura de um livro, caso
                                queira. A posição deitada permite o apoio na cama, onde é possível colocar o pescoço e o
                                corpo do seu bebê apoiados em um dos seus braços e, utilizando a outra mão, é possível
                                apoiar a boca do neném próxima ao bico do seio. A posição cavalinho é realizada com o
                                seu bebê posicionado com as pernas abertas sobre uma de suas pernas (mãe), sendo
                                possível realizar o apoio da cabeça e do corpo com uma de suas mãos em formato de “C”,
                                onde o dedo polegar e o indicador sustentam a cabeça; os demais dedos, apoiados nas
                                costas do neném, mantém a sustentação do corpo (BRASIL, 2007).</p>
                            <img class="mb-3" src="{{ url('assets/img/forma-1.png') }}" width="95px"
                                alt="ícone banho">
                            <img class="mb-3" src="{{ url('assets/img/forma-2.png') }}" width="95px"
                                alt="ícone banho">

                            <p style="color:black;">Todas as formas de amamentar visam evitar feridas, fissuras e
                                traumas diversos nas suas mamas. Desta forma, sempre observe se seu bebê está
                                posicionado corretamente e se você está confortável com o momento, ou seja, sem dores. A
                                posição semissentada, parecida com a posição anterior, visa manter as pernas do bebê
                                viradas para o mesmo lado e a cabeça e o corpo permanecerem elevados. Para a posição
                                invertida, você deverá segurar seu bebê como se fosse uma bola de jogo de futebol
                                americano, mantendo-o ao lado do seu corpo e utilizando sua mão (neste mesmo lado) para
                                sustentar a cabeça e corpo do bebê (BRASIL, 2007; BARBOSA et al., 2017).</p>

                            <img class="mb-3" src="{{ url('assets/img/forma-3.png') }}" width="95px"
                                alt="ícone banho">
                            <img class="mb-3" src="{{ url('assets/img/forma-4.png') }}" width="95px"
                                alt="ícone banho">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="content d-flex w-100 h-100">
                        <img src="{{ url('assets/img/mamadeira.jpg') }}" width="95px" alt="ícone banho">
                        <h1 style="font-size:1.1rem">Doe leite materno</h1>
                        <div class="text-box">
                            <p style="color:black;">Lista de alguns locais onde é possível realizar doação de leite
                                materno na cidade do Rio de Janeiro:
                            </p>
                            <ul id="lista">
                                <li>Instituto Nacional de Saúde da Mulher, da Criança e do Adolescente Fernandes
                                    Figueira (IFF/Fiocruz). Centro de Referência. Endereço: Av. Rui Barbosa, 716
                                    Flamengo. CEP 22250-020. Rio de Janeiro/RJ. Telefone: (21) 2554-1703. Rede social –
                                    Instagram: @bancodeleite_iff;</li>
                                <li>Banco de Leite Humano da Maternidade Leila Diniz. Endereço: Av. Ayrton Senna, 2.000
                                    Barra da Tijuca. CEP 22793-000. Rio de Janeiro/RJ. Telefone: (21) 3111-4708. Rede
                                    social – Instagram: @blhleiladinizoficial;</li>
                                <li>Banco de Leite Humano do Hospital da Mulher Heloneida Studart. Endereço: Av.
                                    Automóvel Clube , 00 Jardim Jose Bonifácio. CEP 25565-171. São João de Meriti/RJ.
                                    Telefone: (21) 2651-9618;</li>
                                <li>Banco de Leite Humano do Hospital Federal dos Servidores do Estado. Endereço: Rua
                                    Sacadura Cabral, 178 Centro. CEP 20221-161. Rio de Janeiro/RJ. Telefone: (21)
                                    2291-3131; </li>
                                <li>Banco de Leite Humano do Hospital Maternidade Alexander Fleming. Endereço: Rua
                                    Jorge Schimidt, 331 Marechal Hermes. CEP 21610-645. Rio de Janeiro/RJ. Telefone:
                                    (21) 2458-1595;</li>
                                <li>Banco de Leite Humano do Hospital Maternidade Alexander Fleming. Endereço: Rua
                                    Jorge Schimidt, 331 Marechal Hermes. CEP 21610-645. Rio de Janeiro/RJ. Telefone:
                                    (21) 2458-1595;</li>
                                <li>Banco de Leite Humano do Hospital Maternidade Herculano Pinheiro. Endereço: Avenida
                                    Ministro Edgar Romero, 276 Madureira. CEP 20211-360. Rio de Janeiro/RJ. Telefone:
                                    (21) 2458-8607.</li>
                            </ul>
                            <p style="color:black;">Com relação à chegada do seu leite no local de destino, ele passará
                                por um processo de seleção e classificação, pasteurização e controle de qualidade
                                microbiológico, pensando na garantia da qualidade. Após, o material é direcionado a cada
                                neonato prematuro visando suas necessidades de nutrição (FIOCRUZ, 2021).
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="content d-flex w-100 h-100">
                        <img src="{{ url('assets/img/extracao.jpg') }}" width="95px" alt="ícone banho">
                        <h1 style="font-size:1.1rem">Extração e armazenamento</h1>
                        <div class="text-box">
                            <p style="color:black;">Caso haja a necessidade de ausência no momento da amamentação
                                como, por exemplo, retorno ao trabalho ou demais atividades que não permitam a
                                permanência do bebê junto a você, é importante realizar a extração e armazenamento do
                                seu leite para evitar a interrupção do aleitamento materno. Desta forma, para a correta
                                retirada é necessário que siga algumas recomendações (FIOCRUZ, 2021).
                            </p>
                            <p style="color:black;">Para o armazenamento do leite, separe um frasco de vidro ou vários
                                frascos (dependendo da necessidade) com tampa de plástico; lave-o bem com água e sabão e
                                retire qualquer rótulo que ainda esteja aderido; coloque-o em uma panela, cubra com água
                                e tampe, deixando ferver por 15 minutos. Após, retire-o e o deixe secar com a boca do
                                frasco para baixo sobre um pano limpo e seco. É importante não enxugar e manter um
                                espaço de dois dedos abaixo da tampa. Após realizar a coleta, o frasco deverá ser
                                armazenado no congelador ou freezer por até 15 dias a uma temperatura de até -3ºC;
                                portanto, não se esqueça de datar o recipiente. Será possível realizar o descongelamento
                                em banho-maria, com fogo baixo, de cada frasco, para a utilização. Depois de
                                descongelar, caso não utilizado, o conteúdo do frasco deverá ser desprezado, pois já não
                                possuirá os componentes adequados para o seu bebê (SBP, 2022; FIOCRUZ, 2021).
                            </p>
                            <p style="color:black;">Para a extração do leite, escolha um local limpo, tranquilo e sem
                                animais. Mantenha os cabelos amarrados e, caso seja possível, os envolva em uma touca.
                                Lave as mãos, antebraços e cotovelos corretamente, utilizando água e sabão e seque com
                                uma toalha limpa. Evite conversas durante esse momento; se possível, o ideal é cobrir a
                                boca com uma máscara ou pano limpo (SBP, 2022; FIOCRUZ, 2021).
                            </p>
                            <p style="color:black;">Para realizar a ordenha, faça massagens em ambas as mamas com as
                                mãos espalmadas, da aréola para a mama, de forma circular. Após, posicione os dedos
                                polegar e indicador na borda da parte escura da mama (aréola). Mantenha-os firmes e
                                empurre para trás, em direção ao corpo. Pressione levemente um dedo contra o outro e
                                repita esse gesto diversas vezes até que o leite comece a sair. Assim que houver saída
                                do leite, posicione o frasco para a coleta (SBP, 2022; FIOCRUZ, 2021).
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="content d-flex w-100 h-100">
                        <img src="{{ url('assets/img/mama.jpg') }}" width="95px" alt="ícone banho">
                        <h1 style="font-size:1.1rem">Cuidados com a mama</h1>
                        <div class="text-box">
                            <p style="color:black;">As orientações, com relação ao momento do aleitamento materno, visam
                                evitar traumas mamilares que podem ser: fissuras nos mamilos, ingurgitamento mamário,
                                lesões mamárias e patologias como inflamação da mama, além de dor durante as mamadas
                                (GARCIA et al., 2013).
                            </p>
                            <p style="color:black;">Uma das formas de evitar fissuras é hidratar a pele dos seios;
                                portanto, recomenda-se utilizar o próprio leite materno ao final de cada mamada como
                                forma de umedecer a região, pois trata-se de um líquido rico em ácidos graxos e com alto
                                poder cicatrizante (FIOCRUZ, 2022; GARCIA et al., 2013).
                            </p>
                            <p style="color:black;">Outro cuidado importante é a exposição à luz solar, porque você
                                deverá expor as mamas ao sol por 15 minutos nos horários de 10h da manhã e/ou 16h da
                                tarde com a finalidade de fortalecer as mamas. Além disso, é recomendado o uso de sutiãs
                                com alça larga, pois promovem sustentação das mamas e diminuem as dores nas costas
                                (GARCIA et al., 2013).
                            </p>
                            <p style="color:black;">Inspecione suas mamas diariamente durante os banhos e mamadas do seu
                                bebê . Evite o uso de cremes ou pomadas, pois podem retirar a proteção natural e
                                mascarar problemas graves (FIOCRUZ, 2022; GARCIA et al., 2013).
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
