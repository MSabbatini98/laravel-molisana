@extends('layout.main')

{{-- * TITLE  * --}}
@section('page_title')
    Home | La Molisana
@endsection

@section('main')
<div class="bg">
    <div class="container ">

        {{-- pasta lunga --}}
        <section id="pasta_lunga">
            <h2>Le lunghe</h2>
            <div class="box_container">
            
                @foreach ($lunghe as $pasta)
                    <div class="box">
                        <a href=" {{ route('prodotto', [ 'id' => $pasta['id'] ]) }} ">
                            <img src=" {{ $pasta['src'] }} " alt=" {{ $pasta['titolo'] }} ">
                        </a>
                    </div>
                @endforeach
            </div>
        </section>

        {{-- pasta corta --}}
        <section id="pasta_corta">
            <h2>Le corte</h2>
            <div class="box_container">
            
                @foreach ($corte as $pasta)
                    <div class="box">
                        <a href=" {{ route('prodotto', [ 'id' => $pasta['id'] ]) }} ">
                            <img src=" {{ $pasta['src'] }} " alt=" {{ $pasta['titolo'] }} ">
                        </a>
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
                        <a href=" {{ route('prodotto', [ 'id' => $pasta['id'] ]) }} ">
                            <img src=" {{ $pasta['src'] }} " alt=" {{ $pasta['titolo'] }} ">
                        </a>
                    </div>
                @endforeach
            </div>
        </section>
        
    </div>
</div>

@endsection
