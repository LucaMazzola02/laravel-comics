<header class="container">
        <div class="header-logo">
            <img src=" {{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo-image">
        </div>
        <div class="navbar">        
        <ul>
            @foreach ( $headerLinks as $link)
                <li class="{{ ($link['active']) ? 'active' : '' }}">
                    <a href="{{ route($link['link']) }}">
                        {{ $link['text'] }}
                    </a>
                </li>
            @endforeach
        </ul>         
        </div>
    </header>