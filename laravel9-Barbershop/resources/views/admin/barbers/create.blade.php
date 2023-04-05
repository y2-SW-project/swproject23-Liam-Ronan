<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Boyz2Men | Create Barber</title>
		<link rel="stylesheet" href="{{ asset('css/app.css') }}" />
		@vite(['resources/js/app.js'])
	</head>
	<body>
		<x-nav></x-nav>
				
		@include('components.bgImageText', ['heading' => 'Create Barber', 'image' => 'pexels-stephen-andrews-9388519-min.jpg'])

        <main>
			<div class="container-fluid bg-colour p-5">
				<div class="container">
					<div class="row bg-black p-5 rounded-5">
						<div class="align-items-center text-light text-center p-2">
                            <img class="iconOne img-fluid" src="{{asset('/icons/icons8-imperial-mustache-64.png')}}" alt="">
                            <h3 class="heading display-5">
                                Create a <strong class="other-colour text-danger fw-bold"> Barber</strong>
                            </h3>
                            
                            <div class="container d-flex justify-content-center">
                                <form method="POST" action="{{ route('admin.barbers.store')}}" enctype="multipart/form-data" class="para mt-1 rounded-5 w-50">

                                    @csrf
    
                                    <div class="mt-4 mb-3 pt-1">
                                        <label for="name" class="mb-2 heading">Name</label>
                                        <input type="text" class="form-control text-muted" name="name" placeholder="Barber Name"
                                        {{-- Keeping the form data when the form gets validated --}}
                                        value="{{old('name')}}"/>
    
                                        {{-- Showing the error when the validation finds an inaccuracy --}}
                                        @error('name')
                                            <p class="text-danger para mt-1">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3 pt-3">
                                        <label for="bio" class="mb-2 heading">Bio</label>
                                        <textarea type="text" class="form-control text-muted" name="bio" rows="5" placeholder="Enter a Bio">{{old('bio')}}</textarea>
    
                                        @error('bio')
                                            <p class="text-danger para mt-1">{{$message}}</p>
                                        @enderror
                                        </div>

                                        <div class="mb-3 pt-3">
                                            <label for="email" class="mb-2 heading">Email address</label>
                                            <input type="email" class="form-control" name="email" placeholder="name@example.com" value="{{old('email')}}">
    
                                                @error('email')
                                                    <p class="para text-danger mt-1">{{$message}}</p>
                                                @enderror
                                            </select>
                                        </div>

                                        <div class="mb-3 pt-3">
                                            <label for="phone_number" class="mb-2 heading">Phone number</label>
                                            <input type="text" class="form-control" name="phone_number" placeholder="Phone number" value="{{old('phone_number')}}"/>
                                            
                                            @error('phone_number')
                                                <p class="para text-danger mt-1">{{$message}}</p>
                                            @enderror
                                            </select>
                                        </div>
                                
                        
                                        <div class="mb-3 pt-3">
                                            <label for="image" class="mb-2 heading">Barber Picture</label>
                                            <input type="file" class="form-control" name="image"/>
                                            @error('image')
                                                <p class="para text-danger mt-1">{{$message}}</p>
                                            @enderror                              
                                        </div>
                                
                                    <button class="gradient btn mt-5 text-center">
                                        <a class="text-light p-3 text-decoration-none fw-normal heading">Create Barber</a>
                                    </button>
                                </form>
                            </div>                        
                        </div>
                    </div>
                </div>
            </div>


            <x-info></x-info>

        </main>
        
        <x-footer></x-footer>
    </body>
</html>
