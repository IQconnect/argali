@php
    $slider = $data['slide']
@endphp

@if ($slider)
<section class="slider @if(count($slider) == 1) slider--just-one @endif">
    <div class="slider__carousel">
    @foreach ( $slider as $elem)
        <div class="slider__cell">
            {!! image($elem['image']['ID'], 'full', 'slider__image') !!}
            @if ($elem['content'])
                <div class="slider__content">
                    {!! $elem['content'] !!}
                </div>
            @endif
        </div>
        @endforeach
    </div>
</section>
@endif