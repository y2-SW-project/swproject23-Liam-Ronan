<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Contact Us</title>
		<link rel="stylesheet" href="{{ asset('css/app.css') }}" />
		@vite(['resources/js/app.js'])
	</head>
	<body>
		<x-nav></x-nav>
				
        @include('components.bgImageText', ['heading' => 'Contact Us', 'image' => 'andre-reis-1_DAlXy0wng-unsplash.jpg'])

        <main>

        <div class="container-fluid bg-colour p-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 px-5">
                        <img
                            src="{{asset('/images/joshua-lawrence-dU6eE_j2My8-unsplash.jpg')}}"
                            class="w-100 shadow-1-strong rounded"
                            alt="Boat on Calm Water"
                        />
                    </div>
                    <div class="col-md-6 text-light text-start pt-2">
                        <img class="iconOne img-fluid" src="{{asset('/icons/icons8-imperial-mustache-64.png')}}" alt="">
                        <h3 class="heading display-5">
                            Send us a <strong class="other-colour text-danger fw-bold"> Message</strong>
                        </h3>
                        <form class="heading">
                            <div class="mb-3 pt-3">
                              <label for="exampleInputEmail1" class="form-label">Name</label>
                              <input type="email" placeholder="Enter Your Name" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="mb-3 pt-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" placeholder="Enter Your Email" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="mb-3 pt-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Write a message</label>
                                <textarea class="form-control" placeholder="Enter Message" id="exampleFormControlTextarea1" rows="6"></textarea>
                            </div>
                            <button class="gradient btn fs-5 my-3">
                                <a class="text-light p-3 text-decoration-none fw-normal" href={{ route('home')}}>Send Message</a>
                            </button>
                          </form>
                    </div>
                </div>
            </div>
        </div>

        </main>
    
    
        <x-footer></x-footer>
    </body>

</html>