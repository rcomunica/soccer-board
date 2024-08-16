@props(['active'])

@php
$classes = ($active ?? false)
? 'font-bold text-blue-700 underline-offset-2 hover:text-blue-700 focus:outline-none focus:underline'
: 'font-medium text-slate-700 underline-offset-2 hover:text-blue-700 focus:outline-none focus:underline';
@endphp

{{-- <a {{ $attributes->merge(['class' => $classes]) }}
    class="font-bold text-blue-700 underline-offset-2 hover:text-blue-700 focus:outline-none focus:underline"
    aria-current="page">Products</a> --}}

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>