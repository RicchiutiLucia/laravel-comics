<header>
    <nav class="container">
        <div class="img-container">
            <a href="{{ route('home') }}"><img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="dc logo"></a>
        </div>

        <ul>
            @foreach (config('comics.header_links') as $link)
                <li>
                    <a href="{{ $link['route'] }}">
                        {{ $link['title'] }}
                    </a>
                </li>
            @endforeach

        </ul>
    </nav>
</header>