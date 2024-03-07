<header>
     <div class="container">

            <img src="{{asset('images/dc-logo.png')}}" alt="logo">
            <ul>
                @foreach (config('header_links') as $link )
                    <li><a href="{{route('CHARACTERS')}}">{{ $link['text'] }}</a></li>
                @endforeach
            </ul>

        </div>
        <div class='header-jumbotron'></div>
</header>