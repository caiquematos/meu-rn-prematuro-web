<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('build.head')

<style>
    body {
        background: url('../../../assets/img/background-1.png');
        background-position: center;
        background-size: 100vh;
        background-repeat: no-repeat;
    }

    section {
        overflow-y: scroll;
        height: 79vh;
    }

    .foto {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-bottom: 1rem;
    }


    .foto img {
        width: 250px;
        border-radius: 5px;
    }

    .foto p {
        color: gray;
        background: white;
        width: 250px;
        margin: 0.5rem;
        text-align: center;
        border-radius: 5px;
        border: gray 1px solid;
    }

    .note h1 {
        font-size: 18px;
        font-weight: bold;
    }

    .note p {
        font-size: 14px;
    }

    .box {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .box img {
        border-radius: 8px;
        margin-top: 1rem;
        height: 110px;
        width: auto;
    }

    .box h1 {
        margin-top: 5px;
        font-size: 18px;
        font-weight: bold;
        text-transform: uppercase;
    }
</style>

<body class="antialiased">

    @include('build.header')

    <!-- main content -->
    <section>

        <div class="row justify-content-center">
            <div class="col justify-content-center align-items-center d-flex">
                <div class="box m-3">
                    <img src="{{ url('assets/img/album.png') }}" width="95px" alt="ícone banho">
                    <h1>Álbum</h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="foto">
                    <img src="{{ url('assets/img/foto-1.png') }}" alt="1a foto">
                    <p>1a foto</p>
                </div>
            </div>
            <div class="col-12">
                <div class="foto">
                    <img src="{{ url('assets/img/foto-2.png') }}" alt="1a foto">
                    <p>1a vez no colo</p>
                </div>
            </div>
            <div class="col-12">
                <div class="foto">
                    <img src="{{ url('assets/img/foto-3.png') }}" alt="1a foto">
                    <p>foto da alta hospitalar</p>
                </div>
            </div>
        </div>

    </section>
    <!-- /main content -->

    @include('build.footer')

    @include('build.scripts')

</body>

</html>
