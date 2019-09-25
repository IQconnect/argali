@php
  $list = $data['list'];
@endphp

@if ($list)
<section class="super-list section">
  <div class="container">
    <ul class="super-list__list">
      @foreach ($list as $item)
      <li class="super-list__elem">
        @include('blocks.small-content', ['data'=>$item])
      </li>
      @endforeach
    </ul>
  </div>
</section>
@endif

