@php
    $shortcode = $data['shortcode'];
    $tooltips = $data['tooltips'];
@endphp

<section class="image-map" id="domy" data-single-section="domy">
    <div class="container">
        {!! do_shortcode( "[".$shortcode."]" ); !!}

        <div hidden>
            @foreach ($tooltips as $item)
                <div id="item-{{ $loop->index }}">
                    {!! $item['content'] !!}
                </div>
            @endforeach
        </div>
    </div>
</section>
