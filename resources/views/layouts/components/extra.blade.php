@php
    $extra = $data;
@endphp

@if ($extra)
<section class="section section--clear-top">
    <div class="container">
        <div class="section__wrapper">
            <div class="section__cell">
                @include('components.text.info', ['data'=>$data])
            </div>
            <div class="section__cell">
                {!! image($extra['image']['ID'], 'full', 'section__image section__image--normalize section__image--auto-width') !!}
            </div>
        </div>
    </div>
</section>
@endif
