<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('build.head')

<style>
    body {
        background: url('assets/img/background-1.png');
        background-position: center;
        background-size: 170%;
        background-repeat: no-repeat;
    }

    section {
        display: flex;
        flex-direction: column;
    }

    h1 {
        text-align: center;
        margin: 1rem;
        margin-bottom: 0px;
        font-size: larger;
        text-transform: uppercase;
        font-weight: 700;
    }

    .img-thumbnail {
        width: 90px;
        object-fit: scale-down;
        height: 78px;
        border-radius: 45px !important;
    }

    .box {
        border-radius: 5px;
    }

    .title {
        margin: 0px;
        margin-top: 5px;
        width: 102px;
        height: 44px;
        display: flex;
        color: #666;
        padding: 1px 0px;
        font-size: 11px;
        line-height: 11px;
        font-weight: bold;
        text-transform: uppercase;
        text-align: center;
        flex-direction: column;
        justify-content: flex-start;
    }


    .btn {
        width: 200px;
        margin: auto;
        align-self: center;
        color: white;
        background: #9b3c94;
        border-radius: 25px;
    }
</style>

<body class="antialiased">

    @include('build.header')

    <!-- main content -->
    <section>
        <h1>Amamentação</h1>
        <div class="row p-3 m-3">
            <div class="col-4 position-relative d-flex align-items-center justify-content-center flex-column">
                <div class="box">
                    <img src="{{ url('assets/img/amamentacao.jpg') }}" class="img-thumbnail rounded mx-auto d-block"
                        alt="amamentacao">
                </div>
                <p class="title">Amamentação</p>
                <a class="stretched-link" href="{{ route('amamentacao') }}"></a>
            </div>
            <div class="col-4 position-relative d-flex align-items-center justify-content-center flex-column">
                <div class="box">
                    <img src="{{ url('assets/img/aleitamento.jpg') }}" class="img-thumbnail rounded mx-auto d-block"
                        alt="amamentacao">
                </div>
                <p class="title">Incentivo ao aleitamento</p>
                <a class="stretched-link" href="{{ route('amamentacao') }}"></a>
            </div>
            <div class="col-4 position-relative d-flex align-items-center justify-content-center flex-column">
                <div class="box">
                    <img src="{{ url('assets/img/formas.jpg') }}" class="img-thumbnail rounded mx-auto d-block"
                        alt="amamentacao">
                </div>
                <p class="title">Posição e pega</p>
                <a class="stretched-link" href="{{ route('amamentacao') }}"></a>
            </div>
            <div class="col-4 position-relative d-flex align-items-center justify-content-center flex-column">
                <div class="box">
                    <img src="{{ url('assets/img/canguru-amamentacao.jpg') }}"
                        class="img-thumbnail rounded mx-auto d-block" alt="amamentacao">
                </div>
                <p class="title">Formas de amamentar</p>
                <a class="stretched-link" href="{{ route('amamentacao') }}"></a>
            </div>
            <div class="col-4 position-relative d-flex align-items-center justify-content-center flex-column">
                <div class="box">
                    <img src="{{ url('assets/img/mamadeira.jpg') }}" class="img-thumbnail rounded mx-auto d-block"
                        alt="amamentacao">
                </div>
                <p class="title">Doe leite materno</p>
                <a class="stretched-link" href="{{ route('amamentacao') }}"></a>
            </div>

            <div class="col-4 position-relative d-flex align-items-center justify-content-center flex-column">
                <div class="box">
                    <img src="{{ url('assets/img/extracao.jpg') }}" class="img-thumbnail rounded mx-auto d-block"
                        alt="amamentacao">
                </div>
                <p class="title">Extração e armazenamento</p>
                <a class="stretched-link" href="{{ route('amamentacao') }}"></a>
            </div>

            <div class="col-4 position-relative d-flex align-items-center justify-content-center flex-column">
                <div class="box">
                    <img src="{{ url('assets/img/mama.jpg') }}" class="img-thumbnail rounded mx-auto d-block"
                        alt="amamentacao">
                </div>
                <p class="title">Cuidados com a mama</p>
                <a class="stretched-link" href="{{ route('amamentacao') }}"></a>
            </div>



        </div>
        <button class="btn btn-light" onclick="goto()">INICIAR</button>
    </section>
    <!-- /main content -->

    @include('build.footer')

    @include('build.scripts')

    <script>
        function goto() {
            window.location.href = "{{ route('amamentacao') }}";
        }
    </script>

</body>

</html>
