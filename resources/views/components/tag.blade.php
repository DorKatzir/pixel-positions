
@props(['size' => 'base'])

@php

    $class = "font-bold rounded-xl bg-white/10 hover:bg-white/25 transition-colors duration-300";

    if ( $size === 'base' ){
        $class .= " px-5 py-2 text-sm";
    } 

    if ( $size === 'small' ){
        $class .= " px-3 py-1 text-2xs";
    }

@endphp

<a href="#" class="{{ $class }}">{{ $slot }}</a>