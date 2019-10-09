@php
  $block1 = get_field('1st');
  $collage = $block1['image'];
  $map = $block1['gmap'];
@endphp

<section class="section">
  <div class="container">
    <div class="section__wrapper">
      <div class="section__cell">
        @if ($block1)
        @include('components.text.info', ['data'=>$block1])
        @else 
        <p class="text">
          Brak informacji o lokalizacji
        </p>
        @endif
      </div>
      <div class="section__cell">
        @include('components.colage', ['data'=>$collage])
      </div>
    </div>
  </div>
</section>
<section class="section section--clear-top">
  <div class="container">
    <div class="google-map" id="google-map" google-map data-lng={{ $map['lng'] }} data-title="{{ get_the_title() }}" data-lat={{ $map['lat'] }}></div>
  </div>
</section>
