@props(['route'])

@php
$classes = 'block pl-3 pr-4 py-2 border-l-4 text-2xl font-heading text-tegners-blue ';
$classes .= request()->routeIs($route)
    ? 'border-tegners-blue'
    : 'border-transparent hover:bg-gray-50 hover:border-gray-300';
@endphp

<a href="{{ route($route) }}" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
