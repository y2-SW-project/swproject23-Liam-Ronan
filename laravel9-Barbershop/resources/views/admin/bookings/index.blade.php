<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Bookings</title>
		<link rel="stylesheet" href="{{ asset('css/app.css') }}" />
        <script src="//unpkg.com/alpinejs" defer></script>
		@vite(['resources/js/app.js'])
	</head>
	<body>
		<x-nav></x-nav>
				
		@include('components.bgImageText', ['heading' => 'All Appointments', 'image' => 'pexels-obsahovka-obsahovka-4449791-min.jpg'])

        <main>
            
            <div class="container-fluid bg-colour p-5">
                <div class="container">
                    <div class="row">
                            @unless(count($bookings) == 0)
            
                            @foreach($bookings as $booking)
                            <div class="col-md-6 p-3">
                                <div class="card mb-3" style="max-width: 600px"> 
                                    <div class="col bg-black">
                                        <div class="card-body text-light text-start mx-3">
                                        <x-booking-card :booking="$booking"/>
                                        </div>
                                    </div>               
                                </div>
                            </div>
                            @endforeach
                            @else
                                <p class="para">No Bookings found</p>
                            @endunless

                            <div class="text-light">
                                {{$bookings->links()}}
                            </div>
                            
                            <div class="text-center">
                                @if(Auth::user()->hasRole('user'))
                                    <button class="gradient btn fs-5 my-2 btn-lg mx-3">
                                        <a class="text-light p-3 text-decoration-none fw-semibold" href="{{ route('user.bookings.create')}}">Book Appointment</a>
                                    </button>
                                @else
                                    <button class="gradient btn fs-5 my-2 btn-lg mx-3">
                                        <a class="text-light heading p-3 text-decoration-none fw-normal" href="{{ route('admin.bookings.create')}}">Book Appointment</a>
                                    </button>
                                @endif
                            </div>
                    </div>
                </div>
            </div>

            <x-info></x-info>
            <x-enquire image="andre-hunter-o48W6ydWSUA-unsplash.jpg" heading="Interested in joining the Team?" buttonText="Enquire" buttonLink="{{ route('contact') }}" />

        </main>
        
        <x-footer></x-footer>
        <x-flash-message/>
    </body>
</html>