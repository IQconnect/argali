@php
$note = get_field('note');
@endphp

@foreach ($note as $item)
<section class="section">
    <div class="container">
        <div class="section__wrapper">
            <div class="section__cell">
                @php
                $label = $item['header']['date'];
                $title = $item['header']['title'];
                @endphp

                <div class="text-info {{ $class }}">
                    <header class="text-info__header">
                        <p class="text-info__label text">
                            {!! $label !!}
                        </p>
                    </header>
                    <h2 class="text-info__title title">
                        {!! $title !!}
                    </h2>

                </div>
            </div>
        </div>
        @php
        $gallery = $item['gallery'];
        @endphp
        @if($gallery)
        <div class="gallery">
            @foreach ($gallery as $img)
            <div class="gallery__cell">
                {!! image($img['ID'], 'full','') !!}
            </div>
            @endforeach
        </div>
        @endif
    </div>
</section>
@endforeach