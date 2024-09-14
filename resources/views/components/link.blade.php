@props([
    'href' => '#',
])

<a href="{{ $href }}" class="hover:text-indigo-500 transition-colors duration-150">
    {{ $slot }}
</a>
