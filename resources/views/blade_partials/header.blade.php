<header>
    <div class="container">
        <div class="logo">
            <img src=" {{ asset('images/marchio-sito-test.png') }} " alt="Logo della pasta molisana">
        </div>
        <nav class="main_nav_burger">
            <div class="burger_menu">
                <i class="fas fa-bars"></i>
            </div>
        </nav>
        <nav class="main_nav">
            <ul>
                <li >
                    <a href="{{ route('home')}}">Home</a>
                </li>
                <li class="active">
                    Prodotti
                    {{-- <a href="{{ route('prodotto/{id}')}}">Prodotti</a> --}}
                </li>
                <li>
                    <a href="{{ route('news')}}">News</a>
                </li>
            </ul>
        </nav>     
    </div>
</header>