<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
  </head>
  <body class="p-8 bg-black text-white">
    <nav class="flex justify-between border-b pb-4 border-white/20">
        <div>
            <a href="">
            <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
            </a>
        </div>
        <div class="space-x-8 font-semibold">
            <a href="">Jobs</a>
            <a href="">Careers</a>
            <a href="">Salaries</a>
            <a href="">Companies</a>
        </div>
        <div>
            <a href="">
                <x-header-text :span-class="'bg-indigo-500'">Post a Job</x-header-text>
            </a>
        </div>
    </nav>

    <main class="max-w-[968px] mx-auto">
    {{ $slot }}
    </main>
  </body>
</html>
