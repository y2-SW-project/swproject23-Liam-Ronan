<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Boyz2Men</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <script src="//unpkg.com/alpinejs" defer></script>
    @vite(['resources/js/app.js'])
</head>
<body>
    <x-nav></x-nav>
            
    @include('components.homeBgImageText', ['heading' => 'Looking Your Best Never Goes Out of Style', 'image' => 'hair-spies-TNhm6uVurpU-unsplash.jpg'])

    <main>
        @yield('content')
    </main>
    
    <x-footer></x-footer>
    <x-flash-message/>
</body>
</html>