@props(['barber'])

<div class="row pt-5">
    <div class="col-md-6">
        <img class="d-block w-100" src="{{$barber->image ? asset('storage/' . $barber->image) : asset('/images/pexels-stefan-lorentz-668196.jpg')}}" alt=""/>
    </div>
    <div class="col-md-6 text-light mt-5">
        <img class="img-fluid pb-3 px-5" src="{{asset('icons/icons8-barber-64.png')}}" alt="">
        <div class="para text-center px-5">
            <h5 class="heading display-5 text-center text-light">{{$barber->name}}</h5>
            <p>
              {{Str::words($barber->bio, 20)}} 
            </p>
        </div>
        @if(Auth::user()->hasRole('user'))
          <a class="text-danger para fs-5 text-center text-decoration-underline" href="{{route('user.barbers.show', $barber)}}">Learn More about {{$barber->name}}</a>
        @else
          <a class="text-danger heading fs-5 text-center text-decoration-underline" href="{{route('admin.barbers.show', $barber)}}">Learn More about {{$barber->name}}</a>
        @endif

    </div>
    <hr class="border border-danger border-2 opacity-50 my-5">
  </div>