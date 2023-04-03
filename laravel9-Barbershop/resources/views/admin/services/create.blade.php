<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Boyz2Men | Create Service</title>
		<link rel="stylesheet" href="resources/css/app.css" />
		@vite(['resources/js/app.js'])
	</head>
	<body>
		<x-nav></x-nav>
				
		<x-bookingBg></x-bookingBg>

        <main>
			<div class="container-fluid bg-colour p-5">
				<div class="container">
					<div class="row bg-black p-5 rounded-5">
						<div class="align-items-center text-light text-center p-2">
                            <img class="iconOne img-fluid" src="{{asset('/icons/icons8-imperial-mustache-64.png')}}" alt="">
                            <h3 class="heading display-5">
                                Create a <strong class="other-colour text-danger fw-bold"> Service</strong>
                            </h3>
                            
                            <div class="container d-flex justify-content-center">
                                <form method="POST" action="{{ route('admin.services.store')}}" enctype="multipart/form-data" class="para mt-1 rounded-5 w-50">

                                    @csrf
    
                                    <div class="mt-4 mb-3 pt-1">
                                        <label for="haircut" class="mb-2 para">Haircut</label>
                                        <input type="text" class="form-control text-muted" name="haircut" placeholder="Haircut Name"
                                        {{-- Keeping the form data when the form gets validated --}}
                                        value="{{old('haircut')}}"/>
    
                                        {{-- Showing the error when the validation finds an inaccuracy --}}
                                        @error('haircut')
                                            <p class="text-danger para mt-1">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 pt-3">
                                        <label for="description" class="mb-2 para">Description</label>
                                        <textarea type="text" class="form-control text-muted" name="description" rows="5" placeholder="Enter a Description">{{old('description')}}</textarea>
    
                                        @error('description')
                                            <p class="text-danger para mt-1">{{$message}}</p>
                                        @enderror
                                        </div>
                                    <div class="mb-3 pt-3">
                                        <label for="price" class="mb-2 para">Price</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">&euro;</span>
                                            <input type="number" class="form-control" name="price" value="{{old('price')}}"/>
                                            <div class="input-group-append">
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                            @error('price')
                                                <p class="para text-danger mt-1">{{$message}}</p>
                                            @enderror
                                        </select>
                                    </div>
                                    <div class="mb-3 pt-3">
                                        <label for="duration" class="mb-2 para">Duration</label>
                                        <input type="text" class="form-control" placeholder="Example: 25 mins" name="duration" value="{{old('duration')}}"/>
                                            @error('duration')
                                                <p class="para text-danger mt-1">{{$message}}</p>
                                            @enderror
                                        </select>
                                    </div>
                                
                        
                                    <div class="mb-3 pt-3">
                                        <label for="image" class="mb-2 para">Image</label>
                                        <input type="file" class="form-control" name="image"/>
                                        @error('image')
                                            <p class="para text-danger mt-1">{{$message}}</p>
                                        @enderror                              
                                    </div>
                                
                                    <button class="gradient btn mt-5 text-center">
                                        <a class="text-light p-3 text-decoration-none fw-semibold">Create Service</a>
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
