@php
  $menu = $data['menu'];
@endphp

@if ($menu)
<nav class="extra-menu">
  <div class="container">
    <ul class="extra-menu__list list">
      @foreach ($menu as $item)
      <li class="list__elem">
        <a class="button button--full-sm button--primary text  main text--thin" href="{{ $item['link']['url'] }}" target="{{ $item['link']['target'] }}" data-extra-menu>
          {{ $item['link']['title'] }}
        </a>
      </li>
      @endforeach
    </ul>
  </div>
</nav>
@endif

