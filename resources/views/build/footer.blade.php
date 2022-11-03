<style>
    footer {
        height: 70px;
        padding: 0.5rem;
        flex-direction: column;
        justify-content: center;
        display: flex;
        border-top: 2px white solid;
        position: absolute;
        bottom: 0px;
        width: 100%;
    }

    #footer {
        text-decoration-style: none;
        display: inline-flex;
        justify-content: space-around;
        padding: 0px;
        margin: 0px;
    }

    #footer li {
        display: block;
        font-size: 22px;
    }

    #footer li i {
        color: #aaaaaa;
    }

    #footer li .active {
        color: #9B3C94 !important;
    }
</style>

<footer>
    <ul id="footer">
        <li><a href="{{ route('home') }}"><i class="fas fa-home {{ $page == 'home' ? 'active' : '' }}"></i></a></li>
        <li><a href="#" onclick="togglePlay(this)"><i
                    class="fas fa-pause  {{ $page == 'main' ? 'active' : '' }}"></i></a></li>
        <li><a href="{{ route('notas') }}"><i class="fas fa-sticky-note  {{ $page == 'notas' ? 'active' : '' }}"></i></a>
        </li>
    </ul>
</footer>
