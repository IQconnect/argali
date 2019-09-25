@php
    $title = $data['title'];
    $content = $data['content'];
@endphp
<div class="small-content">
  <h3 class="small-content__title subtitle">
    {{ $title }}
  </h3>
  <p class="small-text">
    {!! $content !!}
  </p>
</div>
