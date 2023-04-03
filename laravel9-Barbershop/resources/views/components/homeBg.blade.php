<div class="bg d-flex min-vh-100">
    <div class="align-self-center text-center text-light col-md-8 offset-md-2">
        <h1 class="heading display-1 fw-semi-bold pb-3 mt-5 pt-3">Looking Your Best Never Goes Out of<strong class="other-colour text-danger fw-bold"> Style</strong><h1>
        
        <div class="row justify-content-center">
            <div class="col-md-10">
                <p class="body lead pb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin faucibus porttitor dui.Lorem ipsum dolor sit amet consectetur. Neque morbi sed mauris facilisi pulvinar nisl elit. Lacus elementum fringilla et habitant tellus a massa</p>
            </div>
        </div>

        @if(Auth::user()->hasRole('user'))
            <button class="gradient btn fs-5 my-2 btn-lg mx-3">
                <a class="text-light p-3 text-decoration-none fw-semibold" href="{{ route('user.bookings.create')}}">Book Appointment</a>
            </button>
        @else
            <button class="gradient btn fs-5 my-2 btn-lg mx-3">
                <a class="text-light p-3 text-decoration-none fw-semibold" href="{{ route('admin.bookings.create')}}">Book Appointment</a>
            </button>
        @endif
        <button class="btn btn-outline-light btn-lg fs-5 bg-transparent">
            <a class="text-light p-5 text-decoration-none fw-semibold" href="{{ route('contact')}}">Contact Us</a>
        </button>				
    </div>
</div>