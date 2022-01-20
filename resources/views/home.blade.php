@extends('layouts/main')
@section('content')
    <section class="container">
        <div class="cards">
            @foreach($comics as $index => $comic)
            <div class="card">
                <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                <a href='{{route("comic/{$index}")}}'>{{$comic['series']}}</a>
            </div>
            @endforeach
        </div>
        <div class="text-center">
            <button class='load-more'>LOAD MORE</button>
        </div>
    </section>
    <div class="blue-bar"></div>
@endsection