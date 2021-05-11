

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
            {{-- <ul> tentativo 1
                <li >
                    <a href="{{ route('home')}}">Home</a>
                </li>
                <li class="active">
                    Prodotti
                    <a href="{{ route('prodotto/{id}')}}">Prodotti</a>
                </li>
                <li>
                    <a href="{{ route('news')}}">News</a>
                </li>
            </ul> --}}

            {{-- tentativo 2 (test)

            @php
            $menu = [
                [
                    'name' => 'homepage',
                    'label' => 'Home'
                ],
                [
                    'name' => 'prodotto',
                    'label' => 'Prodotti'
                ],
                [
                    'name' => 'news',
                    'label' => 'News'
                ]
            ];
            @endphp
            <ul>
                @foreach ($menu as $elem)
                    <li class="{{Route::getCurrentRoute()->getName() == $elem['name'] ? 'active' : ''}}">
                        <a href="{{route($elem['name'])}}">{{$elem['label']}}</a>
                    </li>					
                @endforeach
            </ul> --}}
            
            <ul>
                <li class="{{Route::getCurrentRoute()->getName() == 'homepage' ? 'active' : ''}}">
                    <a href="{{ route('homepage') }}"> Home</a>
                </li>	
                <li class="{{Route::getCurrentRoute()->getName() == 'prodotto' ? 'active' : ''}}">
                    <a href="{{ route('prodotto', ['id' => 0]) }}"> Prodotti</a>
                </li>	
                <li class="{{Route::getCurrentRoute()->getName() == 'news' ? 'active' : ''}}">
                    <a href="{{ route('news') }}"> News</a>
                </li>	
                
            </ul>
		</nav>
	</div>
</header>