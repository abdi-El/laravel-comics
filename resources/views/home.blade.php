@extends('layouts/main')
@section('content')
    <section class="container">
        <div class="cards">
            @foreach($comics as $comic)
            <div class="card">
                <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                <h5>{{$comic['series']}}</h5>
            </div>
            @endforeach
        </div>
        <div class="text-center">
            <button class='load-more'>LOAD MORE</button>
        </div>
    </section>
    <div class="blue-bar"></div>
@endsection