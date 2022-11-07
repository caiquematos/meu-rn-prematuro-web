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

    .note {
        margin: 1rem;
        margin-bottom: 0px;
        background: #ffebc4;
        padding: 0.5rem;
        border-radius: 5px;
    }

    .note h1 {
        font-size: 18px;
        font-weight: bold;
    }

    .note p {
        font-size: 14px;
    }
</style>

<body class="antialiased">

    @include('build.header')

    <!-- main content -->
    <section>

        <div class="row">
            <div class="col-12">
                <div class="note position-relative">
                    <h1>Canguru</h1>
                    <p>observações sobre a posição do bebê...</p>
                    <a class="stretched-link"
                        href="{{ route('notas.nota', ['titulo' => 'Canguru', 'img' => 'canguru-original.png']) }}"></a>
                </div>
            </div>
            <div class="col-12">
                <div class="note position-relative">
                    <h1>Sono e repouso</h1>
                    <p>observações sobre o sono do bebê...</p>
                    <a class="stretched-link"
                        href="{{ route('notas.nota', ['titulo' => 'Sono e repouso', 'img' => 'berco.jpg']) }}"></a>
                </div>
            </div>
            <div class="col-12">
                <div class="note position-relative">
                    <h1>Cuidados de higiene</h1>
                    <p>observações sobre a higiene do bebê...</p>
                    <a class="stretched-link"
                        href="{{ route('notas.nota', ['titulo' => 'Cuidados de higiene', 'img' => 'bath.jpg']) }}"></a>
                </div>
            </div>
            <div class="col-12">
                <div class="note position-relative">
                    <h1>Sinais de alerta</h1>
                    <p>observações sobre o bem-estar do bebê...</p>
                    <a class="stretched-link"
                        href="{{ route('notas.nota', ['titulo' => 'Sinais de alerta', 'img' => 'urso.jpg']) }}"></a>
                </div>
            </div>
        </div>

    </section>
    <!-- /main content -->

    @include('build.footer')

    @include('build.scripts')

</body>

</html>
