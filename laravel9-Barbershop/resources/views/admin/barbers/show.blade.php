<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Boys2Men | Meet {{$barber->name}}</title>
		<link rel="stylesheet" href="{{ asset('css/app.css') }}" />
		@vite(['resources/js/app.js'])
	</head>
	<body>
		<x-nav></x-nav>
				
		<x-otherBg></x-otherBg>

        <main>
            <div class="container-fluid bg-colour p-5">
              <div class="container text-center">
                <img class="iconOne img-fluid pb-1" src="{{asset('/icons/icons8-imperial-mustache-64.png')}}" alt="">
               <h3 class="heading display-4 text-center text-light">Meet <strong class="other-colour text-danger fw-bold"> {{$barber->name}}</strong></h3>
                <div class="row pt-5">
                  <div class="col-md-6">
                    <img src="{{$barber->image ? asset('storage/' . $barber->image) : asset('/images/pexels-stefan-lorentz-668196.jpg')}}" class="img-fluid pb-3" style="max-height: 600px" alt="...">
                  </div>
                  <div class="col-md-6 text-light text-start d-flex align-items-center">
                    <div class="col-md-12">
                        <hr class="border border-danger border-2 opacity-50 mb-4">
                        <div class="para px-3">
                            <h3 class="heading display-5">
                                My <strong class="other-colour text-danger fw-bold"> Story</strong>
                            </h3>
                            <p>
                                {{Str::words($barber->bio, 50)}};
                            </p>
                            <p>
                                Email: <strong class="fw-bolder fs-5 other-colour">{{$barber->email}}</strong>
                            </p>
                            <p>
                                Phone Number: <strong class="fw-bolder fs-5 other-colour">{{$barber->phone_number}}.00</strong>
                            </p>    
                            <div class="d-flex flex-row mb-3">
                                <button class="gradient btn my-2 btn-md">
                                    <a class="text-light text-decoration-none fw-semibold" href="{{ route('admin.barbers.edit', $barber)}}">Edit Barber</a>
                                </button> 
                                <form method="POST" action="{{route('admin.barbers.destroy', $barber)}}">
                                    {{-- Using csrf to prevent Cross-site request forgeries --}}
                                    @csrf
                                    {{-- Delete methods --}}
                                    @method('DELETE')
                                    <button class="gradient btn my-2 btn-md mx-3">
                                        <a class="text-light text-decoration-none fw-semibold">Delete Barber</a>
                                    </button>   
                                </form>
                            </div>         
                        </div>
                        <hr class="border border-danger border-2 opacity-50 mt-4">
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </main>
        
        <x-footer></x-footer>
    </body>
</html>