@php
  $id = $data -> ID;
  $title = get_field('slogan', $id);
  $dsc = get_field('dsc', $id);
  $link = get_field('link', $id);
@endphp

<div class="realization-info">
  <a href="{{ $link['url'] }}">
    <h2 class="realization-info__title title">
      {!! $title !!}
    </h2>
  </a>
  <footer class="realization-info__footer">
    <a href="{{ $link['url'] }}" class="button">
      {{ $link['title'] }}
    </a>
  </footer>
</div>
