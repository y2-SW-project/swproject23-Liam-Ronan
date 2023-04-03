@props(['service'])

    <div class="row">
      <h5 class="heading fs-4 card-title">{{$service->haircut}}</h5>
      <div class="col-sm-12">
        <hr class="border border-danger border-1 opacity-50">
      </div>
      <p class="card-text para">{{Str::words($service->description, 20)}}</p>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <hr class="border border-danger border-1 opacity-50">
      </div>
    </div>
    <div class="col-md-6">
        @if (Auth::user()->hasRole('user'))
          <button class="gradient btn btn-md my-4">
            <a class="text-light p-3 text-decoration-none fw-semibold" href="{{ route('user.services.show', $service)}}">View Details</a>
          </button>
        @else
          <button class="gradient btn btn-md my-4">
            <a class="text-light p-3 text-decoration-none fw-semibold" href="{{ route('admin.services.show', $service)}}">View Details</a>
          </button>
        @endif
    </div>



