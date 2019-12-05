@php
    $gallery = $data['gallery'];
@endphp

@if($gallery)
<section class="gallery" id="galeria" data-single-section="galeria">
    <div class="container">
        <div class="gallery__wrapper">
            @foreach ($gallery as $img)
            <div class="gallery__cell">
                <a href="{{$img['url']}}" data-fancybox="gallery">
                    {!! image($img['ID'], 'full','') !!}
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
