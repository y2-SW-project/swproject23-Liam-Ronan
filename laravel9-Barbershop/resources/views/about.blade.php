<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>About Us</title>
		<link rel="stylesheet" href="resources/css/app.css" />
		@vite(['resources/js/app.js'])
	</head>
	<body>
		<x-nav></x-nav>
				
		<x-otherBg></x-otherBg>

        <main>
            <div class="container-fluid bg-black p-5">
                <div class="container text-center text-light p-5">
                    <img class="iconOne img-fluid pb-3" src="{{asset('/icons/icons8-barber-66.png')}}" alt="">
                    <h2 class="heading display-4">The story of our <strong class="other-colour text-danger fw-bold"> Barbershop</strong></h2>
                    <div class="row justify-content-center pb-3 pt-3">
                    
                    <div class="col-md-6 pt-5">
                        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner rounded">
                              <div class="carousel-item active">
                                <img src="{{asset('/images/arthur-humeau-Twd3yaqA2NM-unsplash.jpg')}}" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="{{asset('images/andre-hunter-QjwghSDCy_s-unsplash.jpg')}}" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="{{asset('/images/pexels-stefan-lorentz-668196.jpg')}}" class="d-block w-100" alt="...">
                              </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>
                    </div>
                    <div class="col-md-6 text-start text-light px-5 pt-5">
                      <img class="img-fluid pb-3" src="{{asset('icons/icons8-barber-67.png')}}" alt="">
                      <div class="para text-start">
                          <p>
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin faucibus porttitor dui.Lorem ipsum dolor sit amet consectetur. Neque morbi sed mauris facilisi pulvinar nisl elit. Lacus elementum fringilla et habitant tellus a massa 
                          </p>
                          <p>
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin faucibus porttitor dui.Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin faucibus porttitor dui.Lorem ipsum dolor sit amet consectetur.
                          </p>
                      </div>
                    </div>
                  </div>
                </div>
            </div>

            <div class="container-fluid bg-colour p-5">
              <div class="container text-center">
                <img class="iconOne img-fluid pb-1" src="{{asset('/icons/icons8-imperial-mustache-64.png')}}" alt="">
                <h3 class="heading display-4 text-center text-light mb-3">Meet the <strong class="other-colour text-danger fw-bold"> Team</strong></h3>
                @unless(count($barbers) == 0)

                @foreach ($barbers as $barber)
                    <x-barber-card :barber="$barber"/>
                @endforeach

                @else
                  <p class="para">No Barbers Found</p>
                @endunless
              </div>
            </div>

            <x-info></x-info>
            <x-work></x-work>

        </main>
        
        <x-footer></x-footer>
    </body>
</html>