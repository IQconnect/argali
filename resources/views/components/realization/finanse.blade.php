@php
  $block1 =  get_field('2nd');
  $image =  $block1['image']['ID'];
@endphp

<section class="section">
    <div class="container">
        <div class="section__wrapper">
            <div class="section__cell">
                @include('components.text.info', ['data'=>$block1])
            </div>
            <div class="section__cell">
                {!! image($image, 'full', 'section__image section__image--full') !!}
            </div>
        </div>
    </div>
</section>
@include('layouts.components.contact')
