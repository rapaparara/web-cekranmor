@props(['active' => false])
@php
    $classes = $active ?? false ? 'nav-link active' : 'nav-link';
@endphp
<li class="nav-item">
    <a wire:navigate {{ $attributes->merge(['class' => $classes]) }} href="#">{{ $slot }}</a>
</li>
