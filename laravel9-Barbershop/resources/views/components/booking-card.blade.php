@props(['booking'])

              <h5 class="card-title">Your booking is on the: {{ \Carbon\Carbon::parse($booking->date)->format('jS F')}}</h5>
              <p class="card-text para mt-1">Time: {{$booking->time}}</p>
              <p class="para pt-3">Barber: {{$booking->barber->name}}</p>


