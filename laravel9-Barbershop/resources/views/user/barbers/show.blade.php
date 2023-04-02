<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Boys2Men | Meet {{$barbers->name}}</title>
		<link rel="stylesheet" href="resources/css/app.css" />
		@vite(['resources/js/app.js'])
	</head>
	<body>
		<x-nav></x-nav>
				
		<x-otherBg></x-otherBg>

        <main>
            <div class="container-fluid bg-colour p-5">
              <div class="container text-center">
                <img class="iconOne img-fluid pb-1" src="{{asset('/icons/icons8-imperial-mustache-64.png')}}" alt="">
               <h3 class="heading display-4 text-center text-light">Meet <strong class="other-colour text-danger fw-bold"> {{$barbers->name}}</strong></h3>
                <div class="row pt-5">
                  <div class="col-md-6">
                    <img src="{{$barbers->image ? asset('storage/' . $barbers->image) : asset('/images/pexels-stefan-lorentz-668196.jpg')}}" class="img-fluid pb-3" style="max-height: 600px" alt="...">
                  </div>
                  <div class="col-md-6 text-light text-start d-flex align-items-center">
                    <div class="col-md-12">
                        <hr class="border border-danger border-2 opacity-50 mb-4">
                        <div class="para px-3">
                            <h3 class="heading display-5">
                                My <strong class="other-colour text-danger fw-bold"> Story</strong>
                            </h3>
                            <p>
                                {{Str::words($barbers->bio, 45)}};
                            </p>
                            <p>
                                Email: <strong class="fw-bolder fs-5 other-colour">{{$barbers->email}}</strong>
                            </p>
                            <p>
                                Phone Number: <strong class="fw-bolder fs-5 other-colour">{{$barbers->phone_number}}.00</strong>
                            </p>    
                            <button class="gradient btn my-2 btn-md">
                              <a class="text-light text-decoration-none fw-semibold" href="{{ route('user.bookings.create')}}">Book Haircut with {{$barbers->name}}</a>
                          </button>                
                        </div>
                        <hr class="border border-danger border-2 opacity-50 mt-4">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <x-info></x-info>
            <x-work></x-work>

        </main>
        
        <x-footer></x-footer>
        <x-flash-message></x-flash-message>
    </body>
</html>