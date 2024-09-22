<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..600;1,100..600&display=swap"
        rel="stylesheet">
</head>

<body class="p-8 pt-0 bg-black text-white font-hanken-grotesk">
    <nav class="flex justify-between border-b pb-4 border-white/20 sticky top-0 pt-4 bg-black/50 backdrop-blur-md">
        <div>
            <a href="/">
                <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
            </a>
        </div>
        <div class="gap-8 flex items-center">
            <x-link href="/">
                <x-header-text iconClass="hidden">Jobs</x-header-text>
            </x-link>
            <x-link>
                <x-header-text iconClass="hidden">Careers</x-header-text>
            </x-link>
            <x-link>
                <x-header-text iconClass="hidden">Salaries</x-header-text>
            </x-link>
            <x-link>
                <x-header-text iconClass="hidden">Companies</x-header-text>
            </x-link>
        </div>
        <div class="flex items-center justify-center gap-5">
            @auth
                <x-link>
                    <x-header-text iconClass="bg-indigo-500">Post a Job</x-header-text>
                </x-link>
                <x-link>
                    <x-header-text iconClass="hidden">Logout</x-header-text>
                </x-link>
            @endauth

            @guest
                <x-link href="sign-up">
                    <x-header-text iconClass="hidden">Sign up</x-header-text>
                </x-link>
                <x-link>
                    <x-header-text iconClass="hidden">Sign in</x-header-text>
                </x-link>
            @endguest
        </div>
    </nav>

    <main class="max-w-[968px] mx-auto">
        {{ $slot }}
    </main>
</body>

</html>
