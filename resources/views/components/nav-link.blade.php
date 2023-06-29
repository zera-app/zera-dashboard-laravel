@props(['active', 'as' => 'Link'])

@php
$classes = ($active ?? false)
? 'active text-base-content bg-base-300 border-r-8 border-secondary'
: '';
@endphp

<{{ $as }} {{ $attributes->class($classes) }}>
    {{ $slot }}
</{{ $as }}>