<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Project</title>
		<link rel="stylesheet" href="resources/css/app.css" />
		<script defer src="resources/js/app.js"></script>
		@vite(['resources/js/app.js'])
	</head>
	<body>
		<x-nav></x-nav>
				
		<x-homeBg></x-homeBg>

        <main>
            @yield('content')
        </main>
        
        <x-footer></x-footer>
    </body>
</html>