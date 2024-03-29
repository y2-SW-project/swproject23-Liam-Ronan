<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Bookings</title>
		<link rel="stylesheet" href="{{ asset('css/app.css') }}" />
		@vite(['resources/js/app.js'])
	</head>
	<body>
		<x-nav></x-nav>
				
    @include('components.bgImageText', ['heading' => 'View Appointment Details', 'image' => 'stefan-schauberger-Tper6bHeSUo-unsplash.jpg'])


        <main>

        <div class="container-fluid bg-colour p-5">
            <div class="container text-center">
              <img class="iconOne img-fluid pb-1" src="{{asset('/icons/icons8-imperial-mustache-64.png')}}" alt="">
             <h3 class="heading display-4 text-center text-light">Appointment <strong class="other-colour text-danger fw-bold"> Details</strong></h3>
              <div class="row pt-5  d-flex justify-content-center">
                <div class="col-md-6">
                  <div class="container d-flex justify-content-center">
                    <img src="{{$booking->services->image ? asset('storage/' . $booking->services->image) : asset('/images/antonio-reynoso-_25iXtaa6oY-unsplash.jpg')}}" class="img-fluid" style="max-height: 800px" alt="...">
                  </div>
                  </div>
                <div class="col-md-6 text-light text-start">
                  <div class="col-md-12">
                    <hr class="border border-danger border-2 opacity-50 p-0 m-0">
               
                      <div class="para px-3">
                          <p>
                            <h5 class="heading card-title fs-3">Appointment Date: <strong class="fw-bolder text-danger">{{ \Carbon\Carbon::parse($booking->date)->format('jS F')}}</strong></h5>
                          </p>
                          <p>
                              Time: <strong class="fw-bolder fs-5 text-danger">{{\Carbon\Carbon::createFromFormat('H:i:s',$booking->time)->format('h:i')}}</strong>
                          </p>
                          <p>
                              Chosen Haircut: <a href="#" class="text-decoration-none text-light">{{$booking->services->haircut}}</a>
                          </p>
                          <p>
                              Haircut Description: <a href="#" class="text-decoration-none text-light">{{Str::words($booking->services->description, 20)}}</a>
                          </p>
                          <p>
                            Barber: <a href="#" class="text-decoration-none text-light">{{$booking->barber->name}}</a>
                          </p>
                          <p>
                              Total Cost of <strong class="fw-bolder fs-5 text-danger">&euro;{{$booking->services->price}}.00</strong>
                          </p>    
                          <p>Duration: <strong class="text-muted">{{$booking->services->duration}}</strong></p>
                          <div class="d-flex flex-row mb-3">
                                
                              <button class="gradient btn my-1 btn-md">
                                  <a class="text-light heading text-decoration-none fw-normal" href="{{ route('admin.bookings.edit', $booking)}}">Edit Appointment</a>
                              </button>
                          
                              <form method="POST" action="{{route('admin.bookings.destroy', $booking)}}">
                                  {{-- Using csrf to prevent Cross-site request forgeries --}}
                                  @csrf
                                  {{-- Delete methods --}}
                                  @method('DELETE')
                                  <button class="gradient btn my-1 btn-md mx-3">
                                      <a class="heading text-light text-decoration-none fw-normal">Delete Appointment</a>
                                  </button>      
                              </form>  
                                
                          </div>                        
                      </div>
                
                    <hr class="border border-danger border-2 opacity-50">
                  </div>
                </div>
              </div>
            </div>
          </div>

            <x-info></x-info>
            <x-enquire image="andre-hunter-o48W6ydWSUA-unsplash.jpg" heading="Interested in joining the Team?" buttonText="Enquire" buttonLink="{{ route('contact') }}" />

        </main>
        
        <x-footer></x-footer>
    </body>
</html>
