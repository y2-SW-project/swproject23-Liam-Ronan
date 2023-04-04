<footer>
    <div class="container-fluid bg-black pb-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h4 class="heading text-decoration-none text-light fw-normal display-4 py-4" href="#">Boyz2Men</h4>
                </div>						
            </div>
        </div>

        <div class="container text-light">
            <div class="row py-3">
                <div class="col-md-3">
                    <ul class="list-group text-light text-decoration-none">

                        @if (Auth::user()->hasRole('user'))
                            <a href="{{ route('user.bookings.index')}}" class="slider-link-other heading bg-black text-decoration-none list-group-item text-light fs-5 px-0">Bookings</a>
                        @else
                            <a href="{{ route('admin.bookings.index')}}" class="slider-link-other heading bg-black text-decoration-none list-group-item text-light fs-5 px-0">Bookings</a>
                        @endif

                        <a href="{{ route('about') }}" class="slider-link-other heading bg-black text-decoration-none list-group-item text-light fs-5 px-0">About</a>

                        <a href="{{ route('contact') }}" class="slider-link-other heading bg-black text-decoration-none list-group-item text-light fs-5 px-0">Contact</a>
                    </ul>

                    <div class="col-md-8 my-4">
                        <a class="social"><img class="img-fluid mx-2" src="{{asset('social/FB.png')}}" alt="Facebook"></a>
                        <a class="social"><img class="img-fluid mx-2" src="{{asset('social/instagram.png')}}" alt="instagram"></a>
                        <a class="social"><img class="img-fluid mx-2" src="{{asset('social/linkedin.png')}}" alt="LinkedIn"></a>
                        <a class="social"><img class="img-fluid mx-2" src="{{asset('social/Twitter.png')}}" alt="Twitter"></a>
                    </div>	

                </div>
                <div class="col-md-3">
                    <h3 class="heading">Hours</h3>
                    <ul class="list-group text-light py-4">
                        <li
                            class="list-group-item bg-black text-light fs-5 border-0 px-0 py-1"
                        >
                            Mon-Fri: 9:30am - 6:00pm
                        </li>
                        <li
                            class="list-group-item bg-black text-light fs-5 border-0 px-0 py-1"
                        >
                            Sat: 8:00am - 5:00pm
                        </li>
                        <li
                            class="list-group-item bg-black text-light fs-5 border-0 px-0 py-1"
                        >
                            Closed Sunday
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3 class="heading">Location</h3>
                    <ul class="list-group text-light py-4">
                        <li
                            class="list-group-item bg-black text-light fs-5 border-0 px-0 py-1"
                        >
                            8 Main St,
                        </li>
                        <li
                            class="list-group-item bg-black text-light fs-5 border-0 px-0 py-1"
                        >
                            Wicklow
                        </li>
                        <li
                            class="list-group-item bg-black text-light fs-5 border-0 px-0 py-1"
                        >
                            A67 T656
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3 class="heading">Book an Appointment</h3>
                    @if(Auth::user()->hasRole('user'))
                        <button class="gradient btn fs-5 my-4">
                            <a class="text-light p-3 text-decoration-none fw-semibold" href="{{ route('user.bookings.create')}}">Book Appointment</a>
                        </button>	
                    @else
                        <button class="gradient btn fs-5 my-4">
                            <a class="text-light p-3 text-decoration-none fw-semibold" href="{{ route('admin.bookings.create')}}">Book Appointment</a>
                        </button>	
                    @endif
 
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <hr class="border border-danger border-2 opacity-50">
                <p class="body mt-2 text-light">Boyz2Men &copy; 2023</p>
            </div>
        </div>
    </div>
</footer>
