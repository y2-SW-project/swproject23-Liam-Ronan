<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Project</title>
		<link rel="stylesheet" href="css/app.css" />
		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
		/>
	</head>
	<body>
		<header>
			<nav class="navbar fixed-top bg-blur navbar-expand-lg py-4">
				<div class="container-xl">
						<a class="heading text-primary navbar-brand fs-2 fw-bold" href="#">EasyEvents</a>
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
                                        <a class="nav-link text-light" href="../Pages/events.html">Events</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-light" href="../Pages/aboutUs.html">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-light" href="#">Your tickets</a>
                                    </li>
                                </ul>
                            </div>
				
                            
							<button class="main-btn gradient btn btn-outline-primary rounded-pill fs-5 mt-2">
								<a class="text-light text-center p-3 text-decoration-none fw-semibold" href="../Pages/register.html">Register</a>
							</button>
						</div>

					</div>
				</div>
			</nav>
        </header>

        <main>
            @yield('content')
        </main>
        
        <footer>
			<div class="container-fluid bg-black pb-5 pt-4">
				<div class="container">
					<div class="row">
						<div class="col-md-9">
							<h4 class="heading text-decoration-none text-primary fw-normal display-4 py-4" href="#">EasyEvents</h4>
						</div>
						<div class="col-md-3 my-5">
							<a class="social" href="#"><img class="img-fluid mx-2" src="social/FB.png" alt="Facebook"></a>
							<a class="social" href="#"><img class="img-fluid mx-2" src="social/instagram.png" alt="instagram"></a>
							<a class="social" href="#"><img class="img-fluid mx-2" src="social/linkedin.png" alt="LinkedIn"></a>
							<a class="social" href="#"><img class="img-fluid mx-2" src="social/Twitter.png" alt="Twitter"></a>
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