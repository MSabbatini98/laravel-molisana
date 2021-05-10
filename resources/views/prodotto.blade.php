@extends('layout.main')

@section('page_title')
<title></title>    
@endsection


@section('content')
    <h1>  {{$pasta['titolo']}} </h1>
    <img src="{{$pasta['src-h']}}" alt="">
    <img src="{{$pasta['src-p']}}" alt="">

    <p> {!! $pasta['descrizione'] !!} </p>
@endsection