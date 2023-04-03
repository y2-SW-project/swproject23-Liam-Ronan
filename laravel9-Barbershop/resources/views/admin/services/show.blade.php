<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Boys2Men | Haircut | {{$services->haircut}}</title>
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
               <h3 class="heading display-4 text-center text-light">The <strong class="other-colour text-danger fw-bold"> {{$services->haircut}}</strong></h3>
                <div class="row pt-5">
                  <div class="col-md-6">
                    <img src="{{$services->image ? asset('storage/' . $services->image) : asset('/images/michael-demoya-Q82AM6BWBPM-unsplash.jpg')}}" class="img-fluid pb-3" style="max-height: 600px" alt="...">
                  </div>
                  <div class="col-md-6 text-light text-start d-flex align-items-center">
                    <div class="col-md-12">
                        <hr class="border border-danger border-2 opacity-50 mb-4">
                        <div class="para px-3">
                            <p>
                                {{$services->description}};
                            </p>
                            <p>
                                This Haircut takes approximately <strong class="fw-bolder fs-5 other-colour">{{$services->duration}}</strong>
                            </p>
                            <p>
                                Total Cost of <strong class="fw-bolder fs-5 other-colour">&euro;{{$services->price}}.00</strong>
                            </p>    
                    
                            <div class="row">
                                <div class="col-md-3">
                                    <button class="gradient btn my-2 btn-md">
                                        <a class="text-light text-decoration-none fw-semibold" href="{{ route('admin.services.edit', $services)}}">Edit Service</a>
                                    </button>   
                                </div>
                                <div class="col-md-4">
                                    <form method="POST" action="{{route('admin.services.destroy', $services)}}">
                                        {{-- Using csrf to prevent Cross-site request forgeries --}}
                                        @csrf
                                        {{-- Delete methods --}}
                                        @method('DELETE')
                                        <button class="gradient btn my-2 btn-md mx-3">
                                            <a class="text-light text-decoration-none fw-semibold">Delete Service</a>
                                        </button>   
                                    </form>
                                </div>
                            </div>   
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