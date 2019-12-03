@php
  $id = $data -> ID;
  $permalink = get_permalink( $id );
  $title = get_field('slogan', $id);
  $dsc = get_field('dsc', $id);
  $link = get_field('link', $id);
@endphp

<div class="realization-info">
  <a href="{{ $permalink  }}">
    <h2 class="realization-info__title title">
      {!! $title !!}
    </h2>
  </a>
  <footer class="realization-info__footer">
    <a href="{{ $permalink }}" class="button">
      {{ $link['title'] }}
    </a>
  </footer>
</div>
