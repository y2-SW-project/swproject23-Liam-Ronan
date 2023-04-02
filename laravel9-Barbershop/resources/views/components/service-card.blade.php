@props(['service'])
<a href="{{route('user.services.show', $service)}}" class="text-decoration-none text-light">
  <h5 class="heading fs-4 card-title">{{$service->haircut}}</h5>
    <div class="col-sm-12">
      <hr class="border border-danger border-1 opacity-50">
  	</div>
    <p class="card-text para">{{Str::words($service->description, 30)}}</p>
    <p class="para">&euro;{{$service->price}}.00</p>
    <p class="para">{{$service->duration}}</p>
  <div class="col-sm-12">
    <hr class="border border-danger border-1 opacity-50">
  </div>
</a>

