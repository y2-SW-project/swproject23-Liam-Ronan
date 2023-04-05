<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Boyz2Men | Update Booking</title>
		<link rel="stylesheet" href="{{ asset('css/app.css') }}" />
		@vite(['resources/js/app.js'])
	</head>
	<body>
		<x-nav></x-nav>
				
		<x-bookingBg></x-bookingBg>

        <main>

			<div class="container-fluid bg-colour p-5">
				<div class="container d-flex justify-content-center">
					<div class="row bg-black p-5 rounded-5">
						<div class="text-light text-center pt-2">
							<img class="iconOne img-fluid" src="{{asset('/icons/icons8-imperial-mustache-64.png')}}" alt="">
							<h3 class="heading display-5">
								Edit Your <strong class="other-colour text-danger fw-bold"> Appointment</strong>
							</h3>
							<form method="POST" action="{{ route('admin.bookings.update', $booking)}}" enctype="multipart/form-data" class="fs-5 para mt-5">

                                @csrf
                                @method('PUT')

								<div class="mt-4 mb-2 pt-1">
									<label for="date" class="form-label">Date</label>
									<input type="date" class="form-control text-muted" name="date" value="{{$booking->date}}"/>

									@error('date')
										<p class="text-danger para mt-1">{{$message}}</p>
									@enderror
								</div>
								<div class="mb-3 pt-3">
									<div class="cs-form">
										<label for="time">Time</label>
										<input type="time" class="form-control" name="time" value="{{\Carbon\Carbon::createFromFormat('H:i:s',$booking->time)->format('h:i')}}"/>

										@error('time')
											<p class="text-danger para mt-1">{{$message}}</p>
										@enderror
									</div>
								<div class="mb-3 pt-3">
									<label for="barber_id" class="form-label">Barber</label>
									<select name="barber_id" class="form-control">
                                        <option value="{{$booking->barber->id}}">{{$booking->barber->name}}</option>
										@foreach ($barbers as $barber)
											<option value="{{$barber->id}}"
												 {{(old('barber_id') == $barber->id) ? "selected" : ""}}>
												{{$barber->name}}
											</option>										
										@endforeach
									
										@error('barber_id')
											<p class="para text-danger mt-1">{{$message}}</p>
										@enderror
									</select>
								</div>
								<div class="mb-3 pt-3">
									<label for="services_id" class="form-label">Type of Service</label>
									<select name="services_id" class="form-control">
                                        <option value="{{$booking->services->id}}">{{$booking->services->haircut}}</option>
										@foreach ($services as $service)
											<option value="{{$service->id}}"
												 {{(old('services_id') == $service->id) ? "selected" : ""}}>
												{{$service->haircut}}
											</option>
										@endforeach
									
										@error('services_id')
											<p class="para text-danger mt-1">{{$message}}</p>
										@enderror
									</select>
								</div>
								<button class="gradient btn fs-5 mt-4">
									<a class="text-light p-3 text-decoration-none fw-semibold">Update Appointment</a>
								</button>
							  </form>
						</div>
					</div>
				</div>
			</div>
		</div>

            <x-info></x-info>
            <x-work></x-work>

        </main>
        
        <x-footer></x-footer>
    </body>
</html>
