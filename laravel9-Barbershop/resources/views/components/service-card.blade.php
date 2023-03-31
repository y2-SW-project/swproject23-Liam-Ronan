@props(['service'])

                <h5 class="heading card-title">{{$service->haircut}}</h5>
              <p class="card-text para">{{Str::words($service->description, 20)}}</p>
              <p class="para">&euro;{{$service->price}}.00</p>
              <p class="para">{{$service->duration}}</p>
