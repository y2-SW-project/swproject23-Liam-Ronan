<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Boyz2Men | Update Service</title>
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
						<div class="align-items-center text-light text-center pt-2">
							<img class="iconOne img-fluid" src="{{asset('/icons/icons8-imperial-mustache-64.png')}}" alt="">
							<h3 class="heading display-5">
								Edit <strong class="other-colour text-danger fw-bold"> Service</strong>
							</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <form method="POST" action="{{ route('admin.services.update', $services)}}" enctype="multipart/form-data" class="fs-5 para mt-5 rounded-5">

                                        @csrf
                                        @method('PUT')
        
                                        <div class="mt-4 mb-3 pt-1">
                                            <label for="haircut" class="mb-2 para">Haircut</label>
                                            <input type="text" class="form-control" name="haircut" value="{{$services->haircut}}"/>
        
                                            @error('haircut')
                                                <p class="text-danger para mt-1">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="mb-3 pt-3">
                                            <label for="description" class="mb-2 para">Description</label>
                                            <textarea type="text" class="form-control" name="description" rows="5">{{$services->description}}</textarea>
        
                                            @error('description')
                                                <p class="text-danger para mt-1">{{$message}}</p>
                                            @enderror
                                            </div>
                                        <div class="mb-3 pt-3">
                                            <label for="price" class="mb-2 para">Price</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="price" value="{{$services->price}}"/>
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
                                            <input type="text" class="form-control" name="duration" value="{{$services->duration}}"/>
                                                @error('duration')
                                                    <p class="para text-danger mt-1">{{$message}}</p>
                                                @enderror
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex justify-content-center mt-5">
                                        <div class="mt-4 pt-5 px-5">
                                            <img class="h-50 w-100 rounded-5" src="{{$services->image ? asset('storage/' . $services->image) : asset('/images/michael-demoya-Q82AM6BWBPM-unsplash.jpg')}}" alt="..."/>
                                            <input type="file" class="form-control mt-3" name="image"/>
        
                                            @error('image')
                                                <p class="para text-danger mt-1">{{$message}}</p>
                                            @enderror                              
                                        </div>
                                    </div>
                                </div>
                                    <button class="gradient btn mt-2 text-center">
                                        <a class="text-light p-3 text-decoration-none fw-semibold">Update Service</a>
                                    </button>
                                  </form>
                            </div>
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
