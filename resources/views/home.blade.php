<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Laravel-Molisana</title>

    {{-- innumerevoli file scss -> css  --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    {{-- Google fonts --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500;600;700&display=swap" rel="stylesheet">


</head>
<body>
    {{-- HEADER --}}
    <header>
        <div class="container">
            <div class="logo">
                <img src=" {{ asset('images/marchio-sito-test.png') }} " alt="Logo della pasta molisana">
            </div>
            <nav class="main_nav">
                <ul>
                    <li >
                        <a href="#">Home</a>
                    </li>
                    <li class="active">
                        <a href="#">Prodotti</a>
                    </li>
                    <li>
                        <a href="#">News</a>
                    </li>
                </ul>
            </nav>     
        </div>
    </header>

    {{-- MAIN  --}}
    <main>
            {{dd($paste)}}
    </main>

    {{-- FOOTER  --}}
    <footer>

    </footer>
</body>
</html>