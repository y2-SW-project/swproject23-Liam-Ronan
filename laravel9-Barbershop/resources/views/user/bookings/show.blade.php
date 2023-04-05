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
				
		@include('components.bgImageText', ['heading' => 'Your Appointment Details', 'image' => 'pexels-vitaly-gorbachev-10775073-min.jpg'])

        <main>

        <div class="container-fluid bg-colour p-5">
            <div class="container text-center">
              <img class="iconOne img-fluid pb-1" src="{{asset('/icons/icons8-imperial-mustache-64.png')}}" alt="">
             <h3 class="heading display-4 text-center fw-normal text-light">Appointment <strong class="other-colour text-danger fw-bold"> Details</strong></h3>
              <div class="row pt-5">
                <div class="col-md-6">
                  <img src="{{asset('/images/michael-demoya-Q82AM6BWBPM-unsplash.jpg')}}" class="img-fluid" style="max-height: 800px" alt="...">
                </div>
                <div class="col-md-6 text-light text-start d-flex align-items-center">
                  <div class="col-md-12">
                      <hr class="border border-danger border-2 opacity-50">
                      <div class="heading px-3">
                          <p>
                            {{-- Formatting the date to be day and month with text --}}
                            <h5 class="heading card-title">Appointment Date: <strong class="fw-bolder text-danger">{{
                               \Carbon\Carbon::parse($booking->date)->format('jS F')}}</strong></h5>
                          </p>
                           {{-- Formatting the time to be hours and minutes --}}
                          <p>
                              Time: <strong class="fw-bolder fs-5 text-danger">{{\Carbon\Carbon::createFromFormat('H:i:s',$booking->time)->format('h:i')}}</strong>
                          </p>
                          <p>
                              Haircut: <a href="{{ route('user.services.show', ['id' => $booking->services->id]) }}" class="slider-link text-decoration-none text-light">{{$booking->services->haircut}}</a>
                          </p>
                          <p>
                            Barber: <a href="{{ route('user.barbers.show', ['id' => $booking->barber->id]) }}"" class="slider-link text-decoration-none text-light">{{$booking->barber->name}}</a>
                          </p>
                          <p>
                              Total Cost of <strong class="fw-bolder fs-5 text-danger">&euro;{{$booking->services->price}}.00</strong>
                          </p>    
                          <p>Duration: <strong class="text-danger">{{$booking->services->duration}}</strong></p>
                          <div class="d-flex flex-row mb-3">
                                
                                <button class="gradient btn my-1 btn-md">
                                    <a class="heading text-light text-decoration-none fw-normal" href="{{ route('user.bookings.edit', $booking)}}">Edit Appointment</a>
                                </button>
                             
                          
                                <form method="POST" action="{{route('user.bookings.destroy', $booking)}}">
                                    {{-- Using csrf to prevent Cross-site request forgeries --}}
                                    @csrf
                                    {{-- Delete methods --}}
                                    @method('DELETE')
                                    <button class="gradient btn my-1 btn-md mx-3">
                                        <a class="heading text-light text-decoration-none fw-normal">Cancel Appointment</a>
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
