@extends('layouts/main')
@section('title', 'Dc Comics | Home')
@section('content')
    <section class="container">
        <div class="cards">
            @foreach($comics as $index => $comic)
            <div class="card">
                <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                <a href='{{route("comic", ['id' => $index])}}'>{{$comic['series']}}</a>
            </div>
            @endforeach
        </div>
        <div class="text-center">
            <button class='load-more'>LOAD MORE</button>
        </div>
    </section>
    <div class="blue-bar"></div>
@endsection