@php
    $textLeft = $data['text-left'];
    $textRight = $data['text-right']['text'];
    $type = $data['type'];
@endphp

@if ($type == 'text-text')
<section class="section flex">
    <div class="container">
        <div class="section__wrapper">
            <div class="section__cell">
                @include('components.text.info', ['data'=>$textLeft, 'onlyHeader' => true])
            </div>
        </div>
        <div class="section__wrapper">
            <div class="section__cell">
                @include('components.text.info', ['data'=>$textLeft, 'onlyContent' => true])
            </div>
            <div class="section__cell">
                <p class="text-info__description text">
                    {{ $textRight }}
                </p>
            </div>
        </div>
    </div>
</section>
@endif
