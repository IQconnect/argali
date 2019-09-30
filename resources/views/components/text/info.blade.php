@php
  $label = "Nasza misja";
  $title = "Gotowe domy szeregowe Żytnia 21";
  $dsc = "Osiedle Żytnia 21 położone z dala wielkomiejskiego zgiełku.  Idealne miejsce do zamieszkania dla rodzin. Każdy z segmentów będzie posiadał własny ogród oraz garaż";
  $link = array('title'=>'Wybierz dom', 'url'=>'#');
@endphp

<div class="text-info">
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
  <footer class="text-info__footer">
    <a href="{{ $link['url'] }}" class="link link--arrow text bold">
      {{ $link['title'] }}
    </a>
  </footer>
</div>
