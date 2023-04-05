<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Boyz2Men | Update {{$services->haircut}}</title>
		<link rel="stylesheet" href="resources/css/app.css" />
		@vite(['resources/js/app.js'])
	</head>
	<body>
		<x-nav></x-nav>
				
        @include('components.bgImageText', ['heading' => 'Edit Service', 'image' => 'pexels-kevin-bidwell-9971239-min.jpg'])

        <main>
			<div class="container-fluid bg-colour p-5">
				<div class="container">
					<div class="row bg-black p-5 rounded-5">
						<div class="align-items-center text-light text-center pt-2">
							<img class="iconOne img-fluid" src="{{asset('/icons/icons8-imperial-mustache-64.png')}}" alt="">
							<h3 class="heading display-5">
								Edit <strong class="other-colour text-danger fw-bold"> Service</strong>
							</h3>
                            
                            <div class="container d-flex justify-content-center">
                                <form method="POST" action="{{ route('admin.services.update', $services)}}" enctype="multipart/form-data" class="fs-5 heading mt-1 rounded-5 w-75">

                                    @csrf
                                    @method('PUT')

                                    <div class="mt-4 mb-3 pt-1">
                                        <label for="haircut" class="mb-2 ">Haircut</label>
                                        <input type="text" class="para form-control" name="haircut" value="{{$services->haircut}}"/>

                                        @error('haircut')
                                            <p class="text-danger  mt-1">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3 pt-3">
                                        <label for="description" class="mb-2 ">Description</label>
                                        <textarea type="text" class="para form-control" name="description" rows="5">{{$services->description}}</textarea>

                                        @error('description')
                                            <p class="text-danger  mt-1">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3 pt-3">
                                        <label for="price" class="mb-2 ">Price</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">&euro;</span>
                                            <input type="text" class="form-control para" name="price" value="{{$services->price}}"/>
                                            <div class="input-group-append">
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                            @error('price')
                                                <p class=" text-danger mt-1">{{$message}}</p>
                                            @enderror
                                        </select>
                                    </div>

                                    <div class="mb-3 pt-3">
                                        <label for="duration" class="mb-2 ">Duration</label>
                                        <input type="text" class="para form-control" name="duration" value="{{$services->duration}}"/>
                                            @error('duration')
                                                <p class=" text-danger mt-1">{{$message}}</p>
                                            @enderror
                                        </select>
                                    </div>
                            
                                    <div class="pt-4">
                                        <img class="h-50 w-100 rounded-5" src="{{$services->image ? asset('storage/' . $services->image) : asset('/images/michael-demoya-Q82AM6BWBPM-unsplash.jpg')}}" alt="..."/>
                                        <input type="file" class="para form-control mt-3" name="image"/>
                                        

                                        @error('image')
                                            <p class=" text-danger mt-1">{{$message}}</p>
                                        @enderror                              
                                    </div>
                                
                                    <button class="gradient btn mt-5 text-center">
                                        <a class="heading text-light p-3 text-decoration-none fw-normal">Update Service</a>
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
