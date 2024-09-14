@props(['iconClass' => 'bg-white'])

<header class="flex items-center gap-x-2">
    <span class="w-2 h-2 {{ $iconClass }}"></span>
    <h1 class="text-lg font-bold">{{ $slot }}</h1>
</header>
