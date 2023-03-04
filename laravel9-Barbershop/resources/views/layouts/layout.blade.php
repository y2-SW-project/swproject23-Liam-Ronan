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
		<header>
			<nav class="navbar fixed-top bg-blur navbar-expand-lg py-4">
				<div class="container-xl">
						<a class="heading text-light navbar-brand fs-2 fw-normal" href="#">Boyz2Men</a>
						<button
							class="navbar-toggler bg-light"
							type="button"
							data-bs-toggle="collapse"
							data-bs-target="#navbarSupportedContent"
							aria-controls="navbarSupportedContent"
							aria-expanded="false"
							aria-label="Toggle navigation"
						>
							<span class="navbar-toggler-icon text-light"></span>
						</button>
					<div class="container">

						<div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <div class="container">
                                <ul class="heading navbar-nav fs-5 gap-4 justify-content-center">
                                    <li class="nav-item">
                                        <a class="nav-link text-light" href="../index.html">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-light" href="../Pages/events.html">Bookings</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-light" href="../Pages/aboutUs.html">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-light" href="#">Contact</a>
                                    </li>
                                </ul>
                            </div>
				
                            
							<button class="main-btn gradient btn fs-5 mt-2">
								<a class="text-light text-center p-3 text-decoration-none fw-semibold" href="../Pages/register.html">Register</a>
							</button>
						</div>

					</div>
				</div>
			</nav>
			<div class="bg d-flex min-vh-100">
				<div class="align-self-center text-center text-light col-md-8 offset-md-2">
					<h1 class="heading display-1 fw-semi-bold pb-3 mt-5">Looking Your Best Never Goes Out of<strong class="other-colour text-danger fw-bold"> Style</strong><h1>
								
					<p class="body lead pb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin faucibus porttitor dui.Lorem ipsum dolor sit amet consectetur. Neque morbi sed mauris facilisi pulvinar nisl elit. Lacus elementum fringilla et habitant tellus a massa </p>
			
			
					<button class="gradient btn fs-5 my-2">
						<a class="text-light p-3 text-decoration-none fw-semibold" href="../Pages/events.html">Book Appointment</a>
					</button>					
				</div>
			</div>
        </header>

        <main>
            @yield('content')
        </main>
        
        <footer>
			<div class="container-fluid bg-black pb-5 pt-4">
				<div class="container">
					<div class="row">
						<div class="col-md-9">
							<h4 class="heading text-decoration-none text-light fw-normal display-4 py-4" href="#">Boyz2Men</h4>
						</div>						
					</div>
				</div>

				<div class="container text-light">
					<div class="row py-3">
						<div class="col-md-3">
							<ul class="list-group text-light text-decoration-underline">
								<a href="#" class="text-light heading"><li class="list-group-item bg-black text-light fs-5 border-0 px-0">Bookings</li></a>
								<a href="#" class="text-light heading"><li class="list-group-item bg-black text-light fs-5 border-0 px-0">About</li></a>
								<a href="#" class="text-light heading"><li class="list-group-item bg-black text-light fs-5 border-0 px-0">Contact</li></a>
							</ul>
							<div class="col-md-8 my-4">
								<a class="social" href="#"><img class="img-fluid mx-2" src="social/FB.png" alt="Facebook"></a>
								<a class="social" href="#"><img class="img-fluid mx-2" src="social/instagram.png" alt="instagram"></a>
								<a class="social" href="#"><img class="img-fluid mx-2" src="social/linkedin.png" alt="LinkedIn"></a>
								<a class="social" href="#"><img class="img-fluid mx-2" src="social/Twitter.png" alt="Twitter"></a>
							</div>	
						</div>
						<div class="col-md-3">
							<h3 class="heading">Hours</h3>
							<ul class="list-group text-light py-4">
								<li
									class="list-group-item bg-black text-light fs-5 border-0 px-0 py-1"
								>
									Mon-Wed: 9:30am - 6:00pm
								</li>
								<li
									class="list-group-item bg-black text-light fs-5 border-0 px-0 py-1"
								>
									Thurs-Fri: 9:30am - 7:00pm
								</li>
								<li
									class="list-group-item bg-black text-light fs-5 border-0 px-0 py-1"
								>
									Sat: 8:00am - 5:00pm
								</li>
								<li
									class="list-group-item bg-black text-light fs-5 border-0 px-0 py-1"
								>
									Closed Sunday
								</li>
							</ul>
						</div>
						<div class="col-md-3">
							<h3 class="heading">Location</h3>
							<ul class="list-group text-light py-4">
								<li
									class="list-group-item bg-black text-light fs-5 border-0 px-0 py-1"
								>
									8 Main St,
								</li>
								<li
									class="list-group-item bg-black text-light fs-5 border-0 px-0 py-1"
								>
									Wicklow,
								</li>
								<li
									class="list-group-item bg-black text-light fs-5 border-0 px-0 py-1"
								>
									A67 T656
								</li>
							</ul>
						</div>
						<div class="col-md-3">
							<h3 class="heading">Book an Appointment</h3>
							<button class="gradient btn fs-5 my-4">
								<a class="text-light p-3 text-decoration-none fw-semibold" href="../Pages/events.html">Book Appointment</a>
							</button>	
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<hr class="border border-2">
						<p class="body mt-2 text-light">Boyz2Men &copy; 2023</p>
					</div>
				</div>
			</div>
		</footer>
    </body>
</html>