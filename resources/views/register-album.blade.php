<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('build.head')

<style>
    .content {
        height: 100vh;
        width: 100%;
        background-color: white;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .dark-logo {
        display: flex;
        margin: auto;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin-bottom: 1rem;
    }

    .dark-logo img {
        width: 80px;
        margin-bottom: 1rem;
    }

    .dark-logo p {
        text-align: center;
        line-height: 20px;
        color: #a73c94;
        font-size: 18px;
        font-family: 'Inter';
        margin: 0px;
    }

    .dark-logo .part-1 {
        font-family: 'Island Moments';
        font-size: xx-large;
    }


    .dark-logo .part-2 {
        font-weight: 900;
        font-family: "Inter Bold";
    }

    label {
        padding-left: 2px;
        color: gray;
    }

    input {
        background: #e4e4e4 !important;
        border: unset !important;
    }

    .btn {
        width: 100%;
        background: #a73c94;
        border: unset;
    }
</style>

<body class="antialiased">
    <div class="content">
        <div class="wrapper" style="display: none; height:fit-content">
            <div class="dark-logo">
                {{-- <img src="{{ url('assets/img/footprints-white.png') }}" alt="logo"> --}}
                <p>meu <span class="part-1">RN</span></p>
                <p class="part-2">PREMATURO</p>
            </div>
            <div style="width: 285px;">

                <label>1a foto</label>
                <div class="input-group mb-3">
                    <input type="file" class="form-control" placeholder="primeira foto" aria-label="Username"
                        aria-describedby="basic-addon1">
                </div>

                <label>1a vez no colo</label>
                <div class="input-group mb-3">
                    <input type="file" class="form-control" placeholder="primeira vezno colo" aria-label="Username"
                        aria-describedby="basic-addon1">
                </div>

                <label>foto da alta hospitalar</label>
                <div class="input-group mb-3">
                    <input type="file" class="form-control" placeholder="foto da alta hospitalar"
                        aria-label="Username" aria-describedby="basic-addon1">
                </div>

            </div>
            <button class="btn btn-primary" onclick="album()">Concluir</button>
        </div>
    </div>

    <script>
        $(() => {
            $(".wrapper").slideDown();
        })

        function album() {
            window.location.href = "{{ route('home') }}";
        }
    </script>
</body>

</html>
