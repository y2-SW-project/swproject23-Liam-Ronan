@props(['booking'])
    <a href="#" class="text-decoration-none text-light">
        <div class="row">
            <div class="col-md-8">
                <h5 class="card-title para">Booking Date: {{ \Carbon\Carbon::parse($booking->date)->format('jS F')}}</h5>
                <p class="card-text para">Time: {{\Carbon\Carbon::createFromFormat('H:i:s',$booking->time)->format('h:i')}}</p>
                <p class="para">Price: &euro;{{$booking->services->price}}.00
            </div>
            <div class="col-md-4">
                <p class="para">Barber: {{$booking->barber->name}}</p>
                <p class="para mt-4">Duration: {{$booking->services->duration}}</p>
            </div>
        </div>
    </a>



