@if(session()->has('message'))
    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 5000)" x-show="show" class="fixed-top text-center pt-4 pb-4 bg-black text-light">
        <div class="container">
            <h3 class="heading fs-4">{{session('message')}}</h3>
        </div>
    </div>
@endif