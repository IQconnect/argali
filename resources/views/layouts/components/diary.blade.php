@php
$note = $data['note'];
@endphp

@foreach ($note as $item)
@php
    $rand = rand();
@endphp
<section class="section columns" @if(!$firstDiary) id="diary" data-single-section="diary" @endif>
    @php
        $firstDiary = true;
    @endphp
    <div class="container">
        <div class="columns__wrapper">
            <div class="columns__cell">
                @php
                $label = $item['header']['date'];
                $title = $item['header']['title'];
                @endphp
                <h2>
                    {!! $title !!}
                </h2>
                <p class="columns__text">
                    {!! $label !!}
                </p>
            </div>
        </div>
        @php
        $gallery = $item['gallery'];
        @endphp
        @if($gallery)
        <div class="gallery">
            <div class="gallery__wrapper">
                @foreach ($gallery as $img)
                <div class="gallery__cell">
                    <a href="{{$img['url']}}" data-fancybox="gallery-{{$rand}}">
                        {!! image($img['ID'], 'full','') !!}
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</section>
@endforeach