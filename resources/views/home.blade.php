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
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;1,400&family=Teko:wght@300;400;500;600;700&display=swap" rel="stylesheet">


</head>
<body>
    {{-- HEADER --}}
    @include('blade_partials.header')

    {{-- MAIN  --}}
    <main >
        <div class="container">

            {{-- pasta lunga --}}
            <section id="pasta_lunga">
                <h2>Le lunghe</h2>
                <div class="box_container">
                
                    @foreach ($lunghe as $item)
                        <div class="box">
                            <img src= " {{ $item['src'] }} " alt= " {{ $item['titolo'] }} ">
                        </div>
                    @endforeach
                </div>
            </section>
            {{-- pasta corta --}}
            <section id="pasta_corta">
                <h2>Le corte</h2>
                <div class="box_container">
                
                    @foreach ($corte as $item)
                        <div class="box">
                            <img src= " {{ $item['src'] }} " alt= " {{ $item['titolo'] }} ">
                        </div>
                    @endforeach

                </div>
            </section>

            {{-- pasta cortissima --}}
            <section id="pasta_cortissima">
                <h2>Le cortissime</h2>
                <div class="box_container">
                
                    @foreach ($cortissime as $item)
                        <div class="box">
                            <img src= " {{ $item['src'] }} " alt= " {{ $item['titolo'] }} ">
                        </div>
                    @endforeach
                </div>
            </section>
            
        </div>
    </main>

    {{-- FOOTER  --}}
    @include('blade_partials.footer')

</body>
</html>