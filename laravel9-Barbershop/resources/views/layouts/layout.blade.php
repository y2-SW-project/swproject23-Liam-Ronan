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
						<a class="heading text-light navbar-brand fs-2 fw-bold" href="#">Boyz2Men</a>
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
					<div class="row">
						<div class="col-md-3">
							<h3 class="heading">All events</h3>
							<ul class="list-group text-light py-5">
								<li
									class="list-group-item bg-black text-light fs-5 border-0 px-0 py-1"
								>
									Your Tickets
								</li>
								<li
									class="list-group-item bg-black text-light fs-5 border-0 px-0 py-1"
								>
									Events
								</li>
								<li
									class="list-group-item bg-black text-light fs-5 border-0 px-0 py-1"
								>
									Terms & Conditions
								</li>
							</ul>
							<p class="body mt-5">EasyEvents &copy; 2023</p>
						</div>
						<div class="col-md-3">
							<h3 class="heading">About</h3>
							<ul class="list-group text-light py-5">
								<li
									class="list-group-item bg-black text-light fs-5 border-0 px-0 py-1"
								>
									Contact Us
								</li>
								<li
									class="list-group-item bg-black text-light fs-5 border-0 px-0 py-1"
								>
									Partners
								</li>
								<li
									class="list-group-item bg-black text-light fs-5 border-0 px-0 py-1"
								>
									Privacy & Cookies
								</li>
								<li
									class="list-group-item bg-black text-light fs-5 border-0 px-0 py-1"
								>
									Guide
								</li>
							</ul>
						</div>
						<div class="col-md-3">
							<h3 class="heading">Help Center</h3>
							<ul class="list-group text-light py-5">
								<li
									class="list-group-item bg-black text-light fs-5 border-0 px-0 py-1"
								>
									Get Started
								</li>
								<li
									class="list-group-item bg-black text-light fs-5 border-0 px-0 py-1"
								>
									Policies
								</li>
								<li
									class="list-group-item bg-black text-light fs-5 border-0 px-0 py-1"
								>
									Newsletters
								</li>
								<li
									class="list-group-item bg-black text-light fs-5 border-0 px-0 py-1"
								>
									FAQs
								</li>
							</ul>
						</div>
						<div class="col-md-3">
							<h3 class="heading">Download Our App</h3>
							<a href="#"><img class="pt-5" src="logos/AppStore.png" alt=""></a>
							<a href="#"><img class="pt-4" src="logos//GooglePlay.png" alt=""></a>
						</div>
					</div>
				</div>
			</div>
		</footer>
    </body>
</html>