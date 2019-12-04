@php
    $left = $data['left'];
    $right = $data['right'];
@endphp

<section class="columns section" id="opis">
    <div class="container">
        <div class="columns__wrapper">
            <div class="columns__cell">
                {!! $left !!}
            </div>
            <div class="columns__cell">
                {!! $right !!}
            </div>
        </div>
    </div>
</section>