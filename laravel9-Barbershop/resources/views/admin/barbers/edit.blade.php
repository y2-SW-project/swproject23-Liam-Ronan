<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Boyz2Men | Update {{$barber->name}}</title>
		<link rel="stylesheet" href="{{ asset('css/app.css') }}" />
		@vite(['resources/js/app.js'])
	</head>
	<body>
		<x-nav></x-nav>
				
        @include('components.bgImageText', ['heading' => 'Barber Details', 'image' => 'andre-hunter-o48W6ydWSUA-unsplash.jpg'])

        <main>
			<div class="container-fluid bg-colour p-5">
				<div class="container">
					<div class="row bg-black p-5 rounded-5">
						<div class="text-light text-center pt-2">
							<img class="iconOne img-fluid pb-3" src="{{asset('/icons/icons8-barber-64.png')}}" alt="">
							<h3 class="heading display-5">
								Edit <strong class="other-colour text-danger fw-bold"> Barber</strong>
							</h3>
                            
                            <div class="container d-flex justify-content-center">
                                <form method="POST" action="{{ route('admin.barbers.update', $barber)}}" enctype="multipart/form-data" class="fs-5 para mt-1 rounded-5 w-75">

                                    @csrf
                                    @method('PUT')

                                    <div class="mt-4 mb-3 pt-1">
                                        <label for="name" class="mb-2 para">Name</label>
                                        <input type="text" class="form-control" name="name" value="{{$barber->name}}"/>

                                        @error('name')
                                            <p class="text-danger para mt-1">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3 pt-3">
                                        <label for="bio" class="mb-2 para">Bio</label>
                                        <textarea type="text" class="form-control" name="bio" rows="5">{{$barber->bio}}</textarea>

                                        @error('bio')
                                            <p class="text-danger para mt-1">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3 pt-3">
                                        <label for="email" class="mb-2 para">Email address</label>
                                        <input type="email" class="form-control" name="email" placeholder="name@example.com" value="{{$barber->email}}">

                                            @error('email')
                                                <p class="para text-danger mt-1">{{$message}}</p>
                                            @enderror
                                        </select>
                                    </div>

                                    <div class="mb-3 pt-3">
                                        <label for="phone_number" class="mb-2 para">Phone number</label>
                                        <input type="text" class="form-control" name="phone_number" value="{{$barber->phone_number}}"/>
                                        
                                        @error('phone_number')
                                            <p class="para text-danger mt-1">{{$message}}</p>
                                        @enderror
                                        </select>
                                    </div>
                            
                                    <div class="pt-4">
                                        <img class="h-50 w-100 rounded-5" src="{{$barber->image ? asset('storage/' . $barber->image) : asset('/images/hair-spies-5P_DABYHK1A-unsplash.jpg')}}" alt="..."/>
                                        <input type="file" class="form-control mt-3" name="image"/>
                                        

                                        @error('image')
                                            <p class="para text-danger mt-1">{{$message}}</p>
                                        @enderror                              
                                    </div>
                                
                                    <button class="gradient btn mt-5 text-center fs-5">
                                        <a class="heading text-light p-3 text-decoration-none fw-normal">Update Barber</a>
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
