@php
  $pins = $data['pins'];
  $pinsArray = [];

  foreach ($pins as $pin) {
      $pinObject = '';
      $pinObject->pin = $pin['pin'];
      $pinObject->content = $pin['tooltip'];

      array_push($pinsArray, $pinObject);
  }

  $pinsJSON = json_encode($pinsArray);
@endphp

<section class="section" id="lokalizacja" data-single-section="lokalizacja">
  <div class="google-map" id="google-map" google-map data-pins="{{ $pinsJSON }}"></div>
</section>
