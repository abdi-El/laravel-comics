@extends('layouts/main')
@section('content')
        <section class="comic-details">
            <div class="hero">
                <div class="container">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                </div>
            </div>
            <div class="blue-bar blue-bar-big"></div>
            <div class="info">
                <div class="container">
                    <div class="left">
                        <h2>{{strtoupper($comic['title'])}}</h2>
                        <div class="price-availability">
                            <div class="price">
                                <span><span class="color-g">U.S. Price: </span>{{$comic['price']}}</span>
                                <span>
                                    AVAILABLE
                                </span>
                            </div>
                            <div class="availability">
                                <span>Check Availability &#10225;</span>
                            </div>
                        </div>
                        <p class="description">
                            {{$comic['description']}}
                        </p>
                    </div>
                    <div class="right">
                        {{-- <img src="{{asset('images/dc-logo.png')}}" alt="ads"> --}}
                    </div>
                </div>
            </div>
            <div class="blue-bar"></div>
        </section>
@endsection