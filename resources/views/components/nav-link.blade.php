@props(['route'])

@php
$classes = (request()->routeIs($route))
            ?
            "bg-ash-900 text-white"
            :
            "text-ash-300 hover:bg-ash-700 hover:text-white";
@endphp

<a href="{{ route($route) }}" {{ $attributes->merge(['class' => $classes. " px-3 py-2 rounded-md text-sm font-medium"]) }}>
    {{ $slot }}
</a>