<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('build.head')

<style>
    body {
        background: url('assets/img/background-1.png');
        background-position: center;
        background-size: 100vh;
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
        color: #555353;
        text-transform: uppercase;
        font-weight: 700;
    }

    .img-thumbnail {
        width: 80px !important;
        object-fit: scale-down;
        height: 80px;
        border-radius: 40px !important;
    }

    .box {
        border-radius: 5px;
    }

    .title {
        margin: 0px;
        margin-bottom: 10px;
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
    <section class="wrapper" style="display: none;">
        <h1>Cuidados de higiene</h1>
        <div class="row p-3 m-3 mb-0">
            <div class="col-4 position-relative d-flex align-items-center justify-content-center flex-column">
                <div class="box">
                    <img src="{{ url('assets/img/fralda.png') }}" class="img-thumbnail rounded mx-auto d-block"
                        alt="cuidados">
                </div>
                <p class="title">Fralda</p>
                <a class="stretched-link" href="{{ route('cuidados', ['index' => 0]) }}"></a>
            </div>
            <div class="col-4 position-relative d-flex align-items-center justify-content-center flex-column">
                <div class="box">
                    <img src="{{ url('assets/img/doubt.png') }}" class="img-thumbnail rounded mx-auto d-block"
                        alt="cuidados">
                </div>
                <p class="title">Dúvidas</p>
                <a class="stretched-link" href="{{ route('cuidados', ['index' => 1]) }}"></a>
            </div>
            <div class="col-4 position-relative d-flex align-items-center justify-content-center flex-column">
                <div class="box">
                    <img src="{{ url('assets/img/baby-skin.png') }}" class="img-thumbnail rounded mx-auto d-block"
                        alt="cuidados">
                </div>
                <p class="title">Pele do bebê</p>
                <a class="stretched-link" href="{{ route('cuidados', ['index' => 3]) }}"></a>
            </div>
            <div class="col-4 position-relative d-flex align-items-center justify-content-center flex-column">
                <div class="box">
                    <img src="{{ url('assets/img/bathing.png') }}" class="img-thumbnail rounded mx-auto d-block"
                        alt="cuidados">
                </div>
                <p class="title">Hora do banho</p>
                <a class="stretched-link" href="{{ route('cuidados', ['index' => 4]) }}"></a>
            </div>
            <div class="col-4 position-relative d-flex align-items-center justify-content-center flex-column">
                <div class="box">
                    <img src="{{ url('assets/img/cosmetics.png') }}" class="img-thumbnail rounded mx-auto d-block"
                        alt="cuidados">
                </div>
                <p class="title">Posso usar?</p>
                <a class="stretched-link" href="{{ route('cuidados', ['index' => 5]) }}"></a>
            </div>

            <div class="col-4 position-relative d-flex align-items-center justify-content-center flex-column">
                <div class="box">
                    <img src="{{ url('assets/img/video.png') }}" class="img-thumbnail rounded mx-auto d-block"
                        alt="cuidados">
                </div>
                <p class="title">Playlist</p>
                <a class="stretched-link" href="{{ route('cuidados', ['index' => 6]) }}"></a>
            </div>
        </div>
        <button class="btn btn-light" onclick="goto()">INICIAR</button>
    </section>
    <!-- /main content -->

    @include('build.footer')

    @include('build.scripts')

    <script>
        $(() => {
            $(".wrapper").slideDown();
        })

        function goto() {
            window.location.href = "{{ route('cuidados', ['index' => 0]) }}";
        }
    </script>

</body>

</html>
