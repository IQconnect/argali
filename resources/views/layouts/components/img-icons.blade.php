@php
  $image = $data['image']['ID'];
  $icons = $data['icons'];
@endphp

{{-- @dump($data) --}}

<section class="section">
    <div class="container">
        <div class="section__wrapper">
            <div class="section__cell">
                {!! image($image, 'full', 'section__image section__image--normalize') !!}
            </div>
            <div class="section__cell section__cell--center">
                @if ($icons)
                <ul class="contact-icons">
                    @foreach ($icons as $item)
                    <li class="contact-icons__elem">
                        {!! image($item['icon']['ID'], 'full', 'contact-icons__icon') !!}
                        <p class="contact-icons__dsc text">
                            {!! $item['title'] !!}
                        </p>
                    </li>
                    @endforeach
                </ul>
                @endif
            </div>
        </div>
    </div>
</section>