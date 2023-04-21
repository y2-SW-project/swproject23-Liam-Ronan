{{-- When I call the component, i will pass two parameters, $image & $heading  --}}
<div class="home-background-image text-center" style="background-image: url('{{ asset('images/' . $image) }}');">
    <div class="align-self-center text-center text-light col-md-8">
    {{-- The preg_replace is used to make the last word red, done this way to be reusable --}}
        <h1 class="display-1 text-center heading text-light">{!! preg_replace('/(\w+)\z/', '<span class="bg-Text slider-link">$1</span>', $heading) !!}</h1>

        <div class="row text-center d-flex justify-content-center text-light">
            <div class="col-md-8">
                <p class="body lead pb-3">Whether you need a simple trim or a more elaborate style, our barbers will work with you to achieve the look you want. So why wait? Book your next appointment today and start looking and feeling your best!</p>  
            </div>
        </div>

        @if(Auth::user()->hasRole('user'))
            <button class="gradient btn fs-5 my-2 btn-lg mx-3">
                <a class="heading text-light p-3 text-decoration-none fw-normal" href="{{ route('user.bookings.create')}}">Book Appointment</a>
            </button>
        @else
            <button class="gradient btn fs-5 my-2 btn-lg mx-3">
                <a class="text-light p-3 text-decoration-none heading
                fw-normal" href="{{ route('admin.bookings.create')}}">Book Appointment</a>
            </button>
        @endif
            <button class="btn btn-outline-light btn-lg fs-5 bg-transparent">
                <a class="text-light p-5 text-decoration-none heading
                fw-normal" href="{{ route('contact')}}">Contact Us</a>
            </button>	
    </div>	
</div>