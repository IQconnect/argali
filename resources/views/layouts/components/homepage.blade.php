@php
    $hero = $data;
    $block1 =  $data['1st'];
    $block2 =  $data['2nd'];
    $image =  $block1['image']['ID'];
    $offert =  $block2['offert'];
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

<section class="section">
    <div class="container">
        <div class="section__wrapper">
            <div class="section__cell">
                @include('components.text.info', ['data'=>$block2, 'class'=>'text-info--space-bottom'])
            </div>
        </div>
        @include('components.offert.list', ['data'=>$offert])
    </div>
</section>
