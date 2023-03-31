<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Bookings</title>
		<link rel="stylesheet" href="resources/css/app.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
		<script type="text/javascript” src=”https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
		<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" rel=”stylesheet”>
		<script
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"> </script>

		@vite(['resources/js/app.js'])
	</head>
	<body>
		<x-nav></x-nav>
				
		<x-bookingBg></x-bookingBg>

        <main>

			<div class="container-fluid bg-colour p-5">
				<div class="container d-flex justify-content-center">
					<div class="row">
						<div class="text-light text-center pt-2">
							<img class="iconOne img-fluid" src="{{asset('/icons/icons8-imperial-mustache-64.png')}}" alt="">
							<h3 class="heading display-5">
								Book an <strong class="other-colour text-danger fw-bold"> Appointment</strong>
							</h3>
							<form method="POST" class="para" action="{{ route('user.bookings.store')}}" enctype="multipart/form-data">
								@csrf
								<div class="mt-4 mb-2 pt-1">
									<label for="date" class="form-label">Date</label>
									<input id="time" class="form-control text-muted" type="date"/>

									@error('date')
										<p class="text-danger para">{{$message}}</p>
									@enderror
								</div>
								<div class="mb-3 pt-3">
									<label for="time">Time</label>
									<div class="cs-form">
										<input type="time" class="form-control"/>

										@error('time')
											<p class="text-danger para">{{$message}}</p>
										@enderror
									</div>
								<div class="mb-3 pt-3">
									<label for="barber" class="form-label">Barber</label>
									<select name="barber_id" class="form-control">
										@foreach ($barbers as $barber)
											<option value="{{$barber->id}}"
												 {{(old('barber_id') == $barber->id) ? "selected" : ""}}>
												{{$barber->name}}
											</option>										
										@endforeach
									
										@error('barber')
											<p class="para text-danger">{{$message}}</p>
										@enderror
									</select>
								</div>
								<div class="mb-3 pt-3">
									<label for="service" class="form-label">Type of Service</label>
									<select name="service_id" class="form-control">
										@foreach ($services as $service)
											<option value="{{$service->id}}"
												 {{(old('service_id') == $service->id) ? "selected" : ""}}>
												{{$service->haircut}}
											</option>
										@endforeach
									
										@error('service')
											<p class="para text-danger">{{$message}}</p>
										@enderror
									</select>
								</div>
								<button class="gradient btn fs-5 my-3">
									<a class="text-light p-3 text-decoration-none fw-semibold">Book Appointment</a>
								</button>
							  </form>
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
