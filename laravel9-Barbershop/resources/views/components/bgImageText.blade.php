{{-- When I call the component, i will pass two parameters, $image & $heading  --}}
<div class="my-background-image" style="background-image: url('{{ asset('images/' . $image) }}');">
    {{-- The preg_replace is used to make the last word red, done this way to be reusable --}}
    <h1 class="display-3 text-center heading slider-link text-light">{!! preg_replace('/(\w+)\z/', '<span class="bg-Text">$1</span>', $heading) !!}</h1>
</div>