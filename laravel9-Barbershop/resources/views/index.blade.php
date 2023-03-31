@extends('layouts.layout')

@section('content')

    <div class="bg-colour container-fluid text-center text-light fw-semi-bold pb-3 p-5">
        <img class="iconOne img-fluid pb-3" src="{{asset('/icons/razor.png')}}" alt="">
        <h2 class="heading display-4">Welcome to our <strong class="other-colour text-danger fw-bold"> Barbershop</strong></h2>
        <div class="row justify-content-center pb-3 pt-3">
            <div class="col-md-8">
                <p class="para fs-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin faucibus porttitor dui.Lorem ipsum dolor sit amet consectetur. Neque morbi sed mauris facilisi pulvinar nisl elit. Lacus elementum fringilla et habitant tellus a massa</p>
            </div>
        </div>
        <div class="container mb-5">
            <div class="row pt-3 justify-content-center">
                <div class="col-md-12 hidden">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                          <img
                            src="{{asset('/images/arthur-humeau-Twd3yaqA2NM-unsplash.jpg')}}"
                            class="w-100 shadow-1-strong rounded mb-4"
                            alt="Boat on Calm Water"
                          />
                      
                          <img
                            src="{{asset('/images/jose-pinto-yG0Z9OwXWks-unsplash.jpg')}}"
                            class="w-100 shadow-1-strong rounded mb-4"
                            alt="Wintry Mountain Landscape"
                          />
                        </div>
                      
                        <div class="col-lg-4 mb-4 mb-lg-0">
                          <img
                            src="{{asset('images/agustin-fernandez-1Pmp9uxK8X8-unsplash-min.jpg')}}"
                            class="w-100 shadow-1-strong rounded mb-4"
                            alt="Mountains in the Clouds"
                          />
                      
                          <img
                            src="{{asset('images/allef-vinicius-IvQeAVeJULw-unsplash.jpg')}}"
                            class="w-100 shadow-1-strong rounded mb-4"
                            alt="Boat on Calm Water"
                          />
                        </div>
                      
                        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                          <img
                            src="{{asset('images/andre-hunter-QjwghSDCy_s-unsplash.jpg')}}"
                            class="w-100 shadow-1-strong rounded mb-4"
                            alt="Waves at Sea"
                          />
                      
                          <img
                            src="{{asset('images/pexels-maria-orlova-4969842.jpg')}}"
                            class="w-100 shadow-1-strong rounded mb-4"
                            alt="Yosemite National Park"
                          />
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-black p-5">
        <div class="container">
            <div class="row py-5">
                <div class="col-md-6">
                    <img class="w-100 h-100 img-fluid rounded pt-2" src="{{asset('images/christian-koch-mQ4Ty8VmnPk-unsplash.jpg')}}" alt="">
                </div>
                <div class="col-md-6 text-light px-5 pt-3">
                    <img class="" src="{{asset('icons/icons8-barber-67.png')}}" alt="">
                    <h3 class="heading display-5 pt-3">
                        This is our <strong class="other-colour text-danger fw-bold"> Story</strong>
                    </h3>
                    <div class="para">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin faucibus porttitor dui.Lorem ipsum dolor sit amet consectetur. Neque morbi sed mauris facilisi pulvinar nisl elit. Lacus elementum fringilla et habitant tellus a massa 
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin faucibus porttitor dui.Lorem ipsum dolor sit amet consectetur.
                        </p>
                        <button class="gradient btn fs-5 my-2">
                            <a class="text-light p-3 text-decoration-none fw-semibold" href={{ route('user.bookings.create')}}>Learn More</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-colour text-center">
        <div class="container text-center text-light p-5">
          <img class="iconOne img-fluid pb-3" src="{{asset('/icons/icons8-cut-67.png')}}" alt="">
          <h2 class="heading display-4 pb-3">We Cut Hair, not <strong class="other-colour text-danger fw-bold"> Corners</strong></h2>
            <div class="row justify-content-center">
              <div class="col-md-10">
                  <p class="para fs-5 pb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin faucibus porttitor dui.Lorem ipsum dolor sit amet consectetur. Neque morbi sed mauris facilisi pulvinar nisl elit. Lacus elementum fringilla et habitant tellus a massa</p>
              </div>
            </div>
            <div class="row g-5 hidden">
                    @unless(count($services) == 0)

                    @foreach ($services as $service)
                    <div class="col-md-6 bg-black">
                      <div class="card mb-3 p-3 text-light text-start bg-black border border-danger-subtle" style="max-width: 540px;">
                        <div class="row g-0">
                          <x-service-card :service="$service"/>
                        </div>
                      </div>
                    </div>
                    @endforeach

                    @endunless

                </div>
            </div>
            <button class="gradient btn fs-5 my-5 btn-lg">
              <a class="text-light p-3 text-decoration-none fw-semibold" href={{ route('user.bookings.create')}}>Book Appointment</a>
            </button>
        </div>

    <x-info></x-info>

    <x-work></x-work>


@endsection
