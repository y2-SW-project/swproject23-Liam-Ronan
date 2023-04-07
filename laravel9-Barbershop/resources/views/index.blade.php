@extends('layouts.layout')

@section('content')

    <div class="bg-colour container-fluid text-center text-light fw-semi-bold pb-3 p-5">
        <img class="iconOne img-fluid pb-3" src="{{asset('/icons/razor.png')}}" alt="">
        <h2 class="heading display-4 fw-lighter">Welcome to our <strong class="other-colour text-danger heading
          fw-bold slider-link"> Barbershop</strong></h2>
        <div class="row justify-content-center pb-3 pt-3">
            <div class="col-md-8">
                <p class="para fs-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin faucibus porttitor dui.Lorem ipsum dolor sit amet consectetur. Neque morbi sed mauris facilisi pulvinar nisl elit. Lacus elementum fringilla et habitant tellus a massa</p>
            </div>
        </div>
        <x-image-grid></x-image-grid>
    </div>

    <div class="container-fluid bg-black p-5">
        <div class="container">
            <div class="row py-5">
                <div class="col-md-6">
                    <img class="w-100 h-100 img-fluid rounded pt-2" src="{{asset('images/christian-koch-mQ4Ty8VmnPk-unsplash.jpg')}}" alt="">
                </div>
                <div class="col-md-6 text-light px-5 pt-3">
                    <img class="" src="{{asset('icons/icons8-barber-67.png')}}" alt="">
                    <h3 class="heading display-5 pt-3 fw-lighter">
                        This is our <strong class="other-colour text-danger heading
                        fw-bold slider-link"> Story</strong>
                    </h3>
                    <div class="para">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin faucibus porttitor dui.Lorem ipsum dolor sit amet consectetur. Neque morbi sed mauris facilisi pulvinar nisl elit. Lacus elementum fringilla et habitant tellus a massa 
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin faucibus porttitor dui.Lorem ipsum dolor sit amet consectetur.
                        </p>
                        <button class="gradient btn fs-5 my-2">
                            <a class="heading text-light p-3 text-decoration-none fw-normal" href={{ route('about')}}>Learn More</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-colour text-center">
        <div class="container text-center text-light p-5">
          <img class="iconOne img-fluid pb-3" src="{{asset('/icons/icons8-cut-67.png')}}" alt="">
          <h2 class="heading display-4 pb-3 fw-light">We Cut Hair, not <strong class="other-colour text-danger heading fw-bold slider-link"> Corners</strong></h2>
            <div class="row justify-content-center">
              <div class="col-md-10">
                  <p class="para fs-5 pb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin faucibus porttitor dui.Lorem ipsum dolor sit amet consectetur. Neque morbi sed mauris facilisi pulvinar nisl elit. Lacus elementum fringilla et habitant tellus a massa</p>
              </div>
            </div>
            <div class="row g-5 hidden" id="pagination-Fixed">
                    @unless(count($services) == 0)

                    @foreach ($services as $service)
                    <div class="col-md-6">
                      <div class="card mb-3 p-3 text-light text-start bg-black" style="max-width: 600px;">
                        <div class="row g-0">
                          <x-service-card :service="$service"/>
                        </div>
                      </div>
                    </div>
                    @endforeach

                    @else
                      <p class="para">No services found</p>
                    @endunless

                    <div class="text-light" id="pagination-links">
                      {{$services->fragment('pagination-Fixed')->links()}}
                    </div>
                </div>
            </div>
            @if(Auth::user()->hasRole('user'))
              <button class="gradient btn fs-5 my-5 btn-lg">
                <a class="text-light heading p-3 text-decoration-none fw-normal" href={{ route('user.bookings.create')}}>Book Appointment</a>
              </button>
            @else
              <button class="gradient btn fs-5 my-5 mx-3 btn-lg">
                <a class="text-light heading p-3 text-decoration-none fw-normal" href={{ route('admin.services.create')}}>Create Service</a>
              </button>
            @endif
        </div>

    <x-info></x-info>
    <x-enquire image="andre-hunter-o48W6ydWSUA-unsplash.jpg" heading="Interested in joining the Team?" buttonText="Enquire" buttonLink="{{ route('contact') }}" />
    {{-- <x-work></x-work> --}}

@endsection
