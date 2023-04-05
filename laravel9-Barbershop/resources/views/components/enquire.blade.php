<div class="enquire-background-image" style="background-image: url('{{ asset('images/' . $image) }}');">
    <div class="text-center pt-5">
        <h1 class="display-3 text-center fw-light heading text-light">{!! preg_replace('/(\w+\W*)\z/', '<span class="bg-Text slider-link fw-bold">$1</span>', $heading) !!}</h1>
        <button class="gradient btn fs-5 my-3 btn-lg">
            <a href="{{ route('contact') }}" class="text-light heading p-3 text-decoration-none fw-normal">{{ $buttonText }}</a>
        </button>
    </div>
</div>