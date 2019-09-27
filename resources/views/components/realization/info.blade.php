@php
  $location = "12 KM OD CENTRUM WARSZAWY,<br>REGUŁY, GMINA MICHAŁOWICE";
  $title = "Gotowe domy szeregowe Żytnia 21";
  $dsc = "Osiedle Żytnia 21 położone z dala wielkomiejskiego zgiełku.  Idealne miejsce do zamieszkania dla rodzin. Każdy z segmentów będzie posiadał własny ogród oraz garaż";
  $link = array('title'=>'Wybierz dom', 'url'=>'#');
@endphp

<div class="realization-info">
  <header class="realization-info__header">
    <span class="realization-info__icon icon icon--location"></span>
    <p class="realization-info__label text bold">
      {!! $location !!}
    </p>
  </header>
  <h2 class="realization-info__title title">
    {!! $title !!}
  </h2>
  <p class="realization-info__description text">
    {!! $dsc !!}
  </p>
  <footer class="realization-info__footer">
    <a href="{{ $link['url'] }}" class="link link--arrow text bold">
      {{ $link['title'] }}
    </a>
  </footer>
</div>
