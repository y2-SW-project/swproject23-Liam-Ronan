@if(session()->has('message'))
    <div x-data="{show: true}" x-effect="setTimeout(() => show = false, 3000)" x-show="show" class="text-center pt-4 pb-4 bg-black text-light fixed-top w-100">
        <div class="container">
            <h3 class="heading fs-3">{{session('message')}}</h3>
        </div>
    </div>
@endif

