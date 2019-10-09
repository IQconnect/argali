@php
    $features = $data['features'];
@endphp

@if ($features)
<section class="section">
    <div class="container">
        <div class="section__wrapper">
            <div class="section__cell">
                @include('components.text.info', ['data'=>$data])
            </div>
        </div>
    </div>
    <div class="container">
        <ul class="features">
            @foreach ($features as $feature)
            <li class="features__item">
                @php
                    $img = $feature['img']['ID'];
                    $title = $feature['features_title'];
                @endphp
                {!! image($img, 'full', 'features__img') !!}
                <h3 class="features__title">
                    {{ $title }}
                </h3>
            </li>
            @endforeach
        </ul>
    </div>
</section>
@endif
