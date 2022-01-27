@props(['route'])

@php
$classes = 'inline-flex items-center px-1 pt-1 border-b-2 font-heading text-lg md:text-2xl text-tegners-blue leading-5 focus:outline-none ';
$classes .= request()->routeIs($route)
    ? 'border-tegners-blue'
    : 'border-transparent hover:border-tegners-blue';
@endphp

<a href="{{ route($route) }}" {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</a>
