<header>
    <img id="logo" src="{{asset('img/logo-molisana.png')}}" alt="La Molisana">
    <nav class="header-nav">
        <i class="fas fa-bars"></i>
        <ul class="main-menu">
            <li class="{{url()->current() == route('home') ? 'active' : ''}}">
                <a href="{{route('home')}}">Home</a>
            </li>
            <li class="{{url()->current() == route('prodotti') ? 'active' : ''}}">
                <a href="{{route('prodotti')}}">Prodotti</a>
            </li>
            <li class="{{url()->current() == route('contatti') ? 'active' : ''}}">
                <a href="{{route('contatti')}}">Contatti</a>
            </li>
        </ul>
    </nav>
</header>
