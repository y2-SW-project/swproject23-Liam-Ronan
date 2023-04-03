<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Project</title>
    <link rel="stylesheet" href="resources/css/app.css" />
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script defer src="resources/js/app.js"></script>
    @vite(['resources/js/app.js'])
</head>
<body>
    <x-nav></x-nav>
            
    <x-homeBg></x-homeBg>

    <main>
        @yield('content')
    </main>
    
    <x-flash-message></x-flash-message>
    <x-footer></x-footer>
</body>
</html>