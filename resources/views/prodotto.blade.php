@extends('layout.main')

@section('page_title')
    Prodotto | La Molisana
@endsection


@section('main')
    <div class="product">
        <div class="back_img ">
            <div class="container">
                <h1>  {{$pasta['titolo']}} </h1>
        
                <img src="{{$pasta['src-h']}}" alt="Foto della pasta: {{$pasta['titolo']}}">
                <img src="{{$pasta['src-p']}}" alt="Foto della confezione della pasta : {{$pasta['titolo']}}">
        
                <p> {!! $pasta['descrizione'] !!} </p>

                <div class="product_arrow left">
                    <a href="{{route('prodotto', ['id' => $prev_product])}}">
                        <i class="fas fa-chevron-left"></i> 
                    </a>
                </div>
    
                <div class="product_arrow right">
                    <a href="{{route('prodotto', ['id' => $next_product])}}">
                        <i class="fas fa-chevron-right"></i> 
                    </a>
                </div>

            </div>
        </div>
    </div>
    
@endsection