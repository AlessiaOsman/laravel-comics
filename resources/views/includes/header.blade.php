<header>
     <div class="container">

            <img src="{{asset('images/dc-logo.png')}}" alt="logo">
            <ul>
                @foreach (config('header_links') as $link )
                    <li><a href="{{$link['url']}}">{{ $link['text'] }}</a></li>
                @endforeach
            </ul>

        </div>
</header>