@props(['barber'])

<div class="row pt-5">
    <div class="col-md-6">
        <img class="d-block w-100" src="{{$barber->image ? asset('storage/' . $barber->image) : asset('/images/pexels-stefan-lorentz-668196.jpg')}}" alt=""/>
    </div>
    <div class="col-md-6 text-light align-items-center mt-5">
      <img class="img-fluid pb-3 px-5" src="{{asset('icons/icons8-barber-64.png')}}" alt="">
      <div class="para text-center px-5">
          <h5 class="heading display-5 text-center text-light">{{$barber->name}}</h5>
          <p>
            {{Str::words($barber->bio, 20)}} 
          </p>
          <button class="gradient btn btn-md my-4">
            <a class="text-light p-3 text-decoration-none fw-semibold" href="{{ route('user.barbers.show', $barber)}}">Learn more about {{{$barber->name}}}</a>
        </button>
      </div>
    </div>
    <hr class="border border-danger border-2 opacity-50 my-5">
  </div>