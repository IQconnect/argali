  
@php
$gallery = $data['gallery'];
@endphp

<div class="gallery-invest -is-active">
    <!-- Flickity HTML init -->
    <div class="gallery-invest__wrapper flickity-main-gallery">
    @foreach ($gallery as $img)
        <a class="gallery-invest__cell" href="{{ $img['url'] }}" data-fancybox="gallery">
        {!! image($img['ID'], 'full', 'gallery-invest__image') !!}
        </a>
    @endforeach
    </div>
    <!-- NAV -->
    <div class="gallery-invest__wrapper gallery-invest__wrapper--nav @if(count($images) < 3) gallery-invest__wrapper--dont-transform @endif flickity-gallery-nav">
    @foreach ($gallery as $img)
        <div class="gallery-invest__cell">
        {!! image($img['ID'], 'full', 'gallery-invest__image') !!}
        </div>
    @endforeach
    </div>
</div>