@props([
    'size' => 'small',
    'background' => 'fill',
])

@php
    // Initialize the $class variable
    $class = '';

    // Determine size classes
    switch ($size) {
        case 'base':
            $class .= 'px-4 ';
            break;
        case 'small':
        default:
            $class .= 'px-2 ';
            break;
    }

    // Determine background classes
    switch ($background) {
        case 'transparent':
            $class .= 'bg-transparent border border-white/20 ';
            break;
        case 'fill':
        default:
            $class .= 'bg-white/20 ';
            break;
    }

    // Add hover effect to background
    $class .= 'hover:bg-white/50 ';
@endphp

<a href="" class="{{ trim($class) }} py-1 rounded-full text-sm font-semibold transition-colors duration-300">
    {{ $slot }}
</a>
