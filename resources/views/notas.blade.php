<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('build.head')

<style>
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
                    <a class="stretched-link" href="{{ route('notas.nota', ['titulo' => 'Canguru']) }}"></a>
                </div>
            </div>
            <div class="col-12">
                <div class="note position-relative">
                    <h1>Sono e repouso</h1>
                    <p>observações sobre o sono do bebê...</p>
                    <a class="stretched-link" href="{{ route('notas.nota', ['titulo' => 'Sono e repouso']) }}"></a>
                </div>
            </div>
            <div class="col-12">
                <div class="note position-relative">
                    <h1>Cuidados de higiene</h1>
                    <p>observações sobre a higiene do bebê...</p>
                    <a class="stretched-link" href="{{ route('notas.nota', ['titulo' => 'Cuidados de higiene']) }}"></a>
                </div>
            </div>
            <div class="col-12">
                <div class="note position-relative">
                    <h1>Sinais de alerta</h1>
                    <p>observações sobre o bem-estar do bebê...</p>
                    <a class="stretched-link" href="{{ route('notas.nota', ['titulo' => 'Sinais de alerta']) }}"></a>
                </div>
            </div>
        </div>

    </section>
    <!-- /main content -->

    @include('build.footer')

    @include('build.scripts')

</body>

</html>
