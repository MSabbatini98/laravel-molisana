@extends('layout.main')

@section('page_title')
    Prodotto
@endsection


@section('main')
    <div class="product">
        <div class="back_img ">
            <div class="container">
                <h1>  {{$pasta['titolo']}} </h1>
                <img src="{{$pasta['src-h']}}" alt="Foto della pasta">
                <img src="{{$pasta['src-p']}}" alt="Foto della pasta">
            </div>
        </div>
        <div class="container">
            <p> {!! $pasta['descrizione'] !!} </p>
        </div>
    </div>
    
@endsection