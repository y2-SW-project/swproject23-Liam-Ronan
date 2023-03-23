<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Project</title>
		<link rel="stylesheet" href="resources/css/app.css" />
		@vite(['resources/js/app.js'])
	</head>
	<body>
		<x-nav></x-nav>
				
			<div class="bg d-flex min-vh-100">
				<div class="align-self-center text-center text-light col-md-8 offset-md-2">
					<h1 class="heading display-1 fw-semi-bold pb-3 mt-5">Looking Your Best Never Goes Out of<strong class="other-colour text-danger fw-bold"> Style</strong><h1>
								
					<p class="body lead pb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin faucibus porttitor dui.Lorem ipsum dolor sit amet consectetur. Neque morbi sed mauris facilisi pulvinar nisl elit. Lacus elementum fringilla et habitant tellus a massa </p>
			
			
					<button class="gradient btn fs-5 my-2">
						<a class="text-light p-3 text-decoration-none fw-semibold" href={{ route('user.bookings.create')}}>Book Appointment</a>
					</button>
					<button class="gradient btn fs-5 my-2">
						<a class="text-light p-3 text-decoration-none fw-semibold" href="ContactUs.html">Contact Us</a>
					</button>						
				</div>
			</div>

        <main>
            @yield('content')
        </main>
        
        <x-footer></x-footer>
    </body>
</html>