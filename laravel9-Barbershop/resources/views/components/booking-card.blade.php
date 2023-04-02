@props(['booking'])
    
        <div class="row">
            <h5 class="heading fs-4 card-title">Appointment Date: {{ \Carbon\Carbon::parse($booking->date)->format('jS F')}}</h5>
            <div class="col-sm-8">
              <hr class="border border-danger border-1 opacity-50">
            </div>
                <p class="card-text para">Time: {{\Carbon\Carbon::createFromFormat('H:i:s',$booking->time)->format('h:i')}}</p>
                <p class="para">Price: &euro;{{$booking->services->price}}.00
                <p class="para">Barber: {{$booking->barber->name}}</p>
                <p class="para text-muted">Duration: {{$booking->services->duration}}</p>
            <div class="col-sm-8">
                <hr class="border border-danger border-1 opacity-50">
            </div>
        </div>
        <button class="gradient btn btn-md my-4">
            <a class="text-light p-3 text-decoration-none fw-semibold" href="{{ route('user.bookings.show', $booking)}}">View Details</a>
        </button>
    



