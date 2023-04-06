@if(session()->has('message'))
    <div x-data="{show: true}" x-effect="setTimeout(() => show = false, 4500)" x-show="show" class="text-center pt-5 pb-5 bg-colour text-light fixed-top w-100">
        <div class="container">
            <h3 class="heading fs-1 text-danger">{{session('message')}}</h3>
        </div>
    </div>
@endif

