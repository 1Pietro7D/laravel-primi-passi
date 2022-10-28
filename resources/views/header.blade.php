@php
    $links = [ ['infos','infos'], 'credits'];
@endphp

<nav id="navbar">
    <ul>
        <li>
            @component('home_return')
            @endcomponent
        </li>
        @foreach ($links as $link)
        @if (is_array($link))
        <li>
            <a href={{ $link[1] }}> {{ $link[0] }} </a>
        </li>
        @else
        <li>
            <a href={{ $link }}> {{ $link }} </a>
        </li>
        @endif
        @endforeach
    </ul>
</nav>
