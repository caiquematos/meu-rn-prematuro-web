<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('build.head')

<style>
    .content {
        height: 100vh;
        width: 100%;
        background-color: #a73c94;
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
    }

    .dark-logo img {
        width: 80px;
        margin-bottom: 1rem;
    }

    .dark-logo p {
        text-align: center;
        line-height: 40px;
        color: white;
        font-size: 35px;
        font-family: 'Inter';
        margin: 0px;
    }

    .dark-logo .part-1 {
        font-family: 'Island Moments';
        font-size: 60px;
    }

    .dark-logo .part-2 {
        font-weight: 900;
        font-family: "Inter Bold";
    }
</style>

<body class="antialiased">
    <div class="content">
        <div class="wrapper" style="display: none; height:fit-content">
            <div class="dark-logo">
                <img src="{{ url('assets/img/footprints-white.png') }}" alt="logo">
                <p>meu <span class="part-1">RN</span></p>
                <p class="part-2">PREMATURO</p>
            </div>
        </div>
    </div>

    <script>
        $(() => {
            $(".wrapper").slideDown();

            setTimeout(() => {
                window.location.href = "{{ route('login') }}";
            }, 4000);
        })
    </script>
</body>

</html>
