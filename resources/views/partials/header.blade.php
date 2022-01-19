<header class='container'>
    {{-- logo --}}
    <img src="../images/dc-logo.png" alt="">
    {{-- nav with views --}}
    <nav>
        <ul>
            <li
            @if(Request::route()->getName() === 'home')
                class="active"
            @endif
            ><a href="{{route('home')}}">COMICS</a></li>
            <li
            @if(Request::route()->getName() === 'news')
                class="active"
            @endif
            ><a href="{{route('news')}}">NEWS</a></li>
        </ul>
    </nav>

</header>