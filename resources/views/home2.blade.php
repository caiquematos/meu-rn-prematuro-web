<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('build.head')

<style>
    .img-thumbnail {
        width: 80px !important;
        object-fit: scale-down;
        height: 80px;
        border-radius: 40px !important;
    }

    .box {
        width: 102px;
        height: 102px;
        background: #a73c94;
        padding: 12px;
        border-radius: 5px;
        box-shadow: rgb(0 0 0 / 19%) 0px 10px 20px, rgb(0 0 0 / 23%) 0px 6px 6px;
    }

    .title {
        margin-top: 0.5rem;
        width: 102px;
        height: 33px;
        display: flex;
        color: #f8f9fa;
        padding: 1px 0px;
        font-size: 8px;
        border: 1px solid #ffffffb8;
        line-height: 11px;
        font-weight: bold;
        text-transform: uppercase;
        text-align: center;
        background: #742566;
        border-radius: 5px;
        box-shadow: rgb(0 0 0 / 19%) 0px 10px 20px, rgb(0 0 0 / 23%) 0px 6px 6px;
        flex-direction: column;
        justify-content: center;
    }
</style>

<body class="antialiased">

    @include('build.header')

    <!-- main content -->
    <section>
        <div class="row p-3">
            <div class="col-4 position-relative d-flex align-items-center justify-content-center flex-column">
                <div class="box">
                    <img src="{{ url('assets/img/canguru-original.png') }}" class="img-thumbnail rounded mx-auto d-block"
                        alt="Canguru">
                </div>
                <p class="title">Canguru</p>
                <a class="stretched-link" href="{{ route('canguru') }}"></a>
            </div>
            <div class="col-4 position-relative d-flex align-items-center justify-content-center flex-column">
                <div class="box">
                    <img src="{{ url('assets/img/amamentacao.jpg') }}" class="img-thumbnail rounded mx-auto d-block"
                        alt="Canguru">
                </div>
                <p class="title">Amamentação</p>
                <a class="stretched-link" href="{{ route('amamentacao') }}"></a>
            </div>
            <div class="col-4 position-relative d-flex align-items-center justify-content-center flex-column">
                <div class="box">
                    <img src="{{ url('assets/img/berco.jpg') }}" class="img-thumbnail rounded mx-auto d-block"
                        alt="Canguru">
                </div>
                <p class="title">Sono e repouso</p>
                <a class="stretched-link" href="{{ route('sono-e-repouso') }}"></a>
            </div>
            <div class="col-4 position-relative d-flex align-items-center justify-content-center flex-column">
                <div class="box">
                    <img src="{{ url('assets/img/bath.jpg') }}" class="img-thumbnail rounded mx-auto d-block"
                        alt="Canguru">
                </div>
                <p class="title">Cuidados de higiene</p>
                <a class="stretched-link" href="{{ route('cuidados') }}"></a>
            </div>
            <div class="col-4 position-relative d-flex align-items-center justify-content-center flex-column">
                <div class="box">
                    <img src="{{ url('assets/img/urso.jpg') }}" class="img-thumbnail rounded mx-auto d-block"
                        alt="Canguru">
                </div>
                <p class="title">Sinais de alerta</p>
                <a class="stretched-link" href="{{ route('alerta') }}"></a>
            </div>
            <div class="col-4 position-relative d-flex align-items-center justify-content-center flex-column">
                <div class="box">
                    <img src="{{ url('assets/img/sing.png') }}" class="img-thumbnail rounded mx-auto d-block"
                        alt="Canguru">
                </div>
                <p class="title">Estimulação <span style="font-size: 8px">neuropsicomotora</span></p>
                <a class="stretched-link" href="{{ route('estimulacao') }}"></a>
            </div>
            <div class="col-4 position-relative d-flex align-items-center justify-content-center flex-column">
                <div class="box">
                    <img src="{{ url('assets/img/books.jpg') }}" class="img-thumbnail rounded mx-auto d-block"
                        alt="Canguru">
                </div>
                <p class="title">Referências</p>
                <a class="stretched-link" href="{{ route('referencias') }}"></a>
            </div>
        </div>
    </section>
    <!-- /main content -->

    @include('build.footer')

    @include('build.scripts')

</body>

</html>
