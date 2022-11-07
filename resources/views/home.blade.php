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

    .img-thumbnail {
        width: 90px;
        object-fit: scale-down;
        height: 78px;
        border-radius: 45px !important;
    }

    .box {
        width: 102px;
        height: 102px;
        background: #F5F5F5;
        padding: 12px;
        border-radius: 5px;
        box-shadow: rgb(0 0 0 / 19%) 0px 10px 20px, rgb(0 0 0 / 23%) 0px 6px 6px;
    }

    .title {
        margin-top: 0.5rem;
        width: 102px;
        height: 33px;
        display: flex;
        color: #666;
        padding: 1px 0px;
        font-size: 11px;
        line-height: 11px;
        font-weight: bold;
        text-transform: uppercase;
        text-align: center;
        flex-direction: column;
        justify-content: center;
    }
</style>

<body class="antialiased">

    @include('build.header')

    <!-- main content -->
    <section class="wrapper" style="display: none;">
        <div class=" row p-3">
            <div class="col-4 position-relative d-flex align-items-center justify-content-center flex-column">
                <div class="box">
                    <img src="{{ url('assets/img/canguru-original.png') }}" class="img-thumbnail rounded mx-auto d-block"
                        alt="Canguru">
                </div>
                <p class="title">Canguru</p>
                <a class="stretched-link" href="{{ route('canguru-menu') }}"></a>
            </div>
            <div class="col-4 position-relative d-flex align-items-center justify-content-center flex-column">
                <div class="box">
                    <img src="{{ url('assets/img/amamentacao.jpg') }}" class="img-thumbnail rounded mx-auto d-block"
                        alt="Canguru">
                </div>
                <p class="title">Amamentação</p>
                <a class="stretched-link" href="{{ route('amamentacao-menu') }}"></a>
            </div>
            <div class="col-4 position-relative d-flex align-items-center justify-content-center flex-column">
                <div class="box">
                    <img src="{{ url('assets/img/berco.jpg') }}" class="img-thumbnail rounded mx-auto d-block"
                        alt="Canguru">
                </div>
                <p class="title">Sono e repouso</p>
                <a class="stretched-link" href="{{ route('sono-menu') }}"></a>
            </div>
            <div class="col-4 position-relative d-flex align-items-center justify-content-center flex-column">
                <div class="box">
                    <img src="{{ url('assets/img/bath.jpg') }}" class="img-thumbnail rounded mx-auto d-block"
                        alt="Canguru">
                </div>
                <p class="title">Cuidados de higiene</p>
                <a class="stretched-link" href="{{ route('cuidados-menu') }}"></a>
            </div>
            <div class="col-4 position-relative d-flex align-items-center justify-content-center flex-column">
                <div class="box">
                    <img src="{{ url('assets/img/urso.jpg') }}" class="img-thumbnail rounded mx-auto d-block"
                        alt="Canguru">
                </div>
                <p class="title">Sinais de alerta</p>
                <a class="stretched-link" href="{{ route('alerta-menu') }}"></a>
            </div>
            <div class="col-4 position-relative d-flex align-items-center justify-content-center flex-column">
                <div class="box">
                    <img src="{{ url('assets/img/sing.png') }}" class="img-thumbnail rounded mx-auto d-block"
                        alt="Canguru">
                </div>
                <p class="title">Estimulação <span>neuropsi<br>comotora</span></p>
                <a class="stretched-link" href="{{ route('estimulacao-menu') }}"></a>
            </div>
            <div class="col-4 position-relative d-flex align-items-center justify-content-center flex-column">
                <div class="box">
                    <img src="{{ url('assets/img/album.png') }}" class="img-thumbnail rounded mx-auto d-block"
                        alt="Album">
                </div>
                <p class="title">Álbum</span></p>
                <a class="stretched-link" href="{{ route('album') }}"></a>
            </div>
            <div class="col-4 position-relative d-flex align-items-center justify-content-center flex-column">
                <div class="box">
                    <img src="{{ url('assets/img/books.jpg') }}" class="img-thumbnail rounded mx-auto d-block"
                        alt="Canguru">
                </div>
                <p class="title">Referências</p>
                <a class="stretched-link" href="{{ route('referencias') }}"></a>
            </div>
            <div class="col-4 position-relative d-flex align-items-center justify-content-center flex-column">
                <div class="box">
                    <img src="{{ url('assets/img/colo.jpg') }}" class="img-thumbnail rounded mx-auto d-block"
                        alt="Colo">
                </div>
                <p class="title">Perfil</p>
                <a class="stretched-link" href="{{ route('referencias') }}"></a>
            </div>
        </div>
    </section>
    <!-- /main content -->

    @include('build.footer')

    @include('build.scripts')

    <script>
        $(() => {
            $(".wrapper").slideDown();
        })
    </script>

</body>

</html>
