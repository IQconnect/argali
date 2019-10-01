@php
  $info = $data['text-info'];
  $label = $info['label'];
  $title = $info['title'];
  $dsc = $info['dsc'];
  $link = $info['link'];
@endphp

@if ($info)

<div class="text-info {{ $class }}">
  <header class="text-info__header">
    <p class="text-info__label text bold">
      {!! $label !!}
    </p>
  </header>
  <h2 class="text-info__title title">
    {!! $title !!}
  </h2>
  <p class="text-info__description text">
    {!! $dsc !!}
  </p>
  @if ($link)
  <footer class="text-info__footer">
    <a href="{{ $link['url'] }}" class="link link--arrow link--invert text bold">
      {{ $link['title'] }}
    </a>
  </footer>
  @endif
</div>

@endif
