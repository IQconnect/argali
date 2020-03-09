@if($data['status'] == 'wolne')
<section class="popup-flat" data-popup-flat="{{ $data['nr'] }}" data-staus="{{ $data['status'] }}" @if($data['status'] != 'wolne') hidden @endif>
  <div class="container">
    <div class="popup-flat__wrapper">
      <button class="form__close popup-flat__close" data-close-popup="{{ $data['nr'] }}">

      </button>
      <div class="popup-flat__cell">
        <div class="popup-flat__gallery @if (!$gallery) popup-flat__gallery--single  @endif">
            <a href="{{ $data['rzut']['url'] }}" data-fancybox="flat-gallery{{ $data['nr'] }}" class="popup-flat__image">
              {!! image($data['rzut']['id'], 'full', 'popup-flat__s-image') !!}
            </a>
            @if ($gallery)
            @foreach ($gallery as $item)
              <a href="{{ $item['url'] }}" data-fancybox="flat-gallery{{ $data['nr'] }}" class="popup-flat__image">
                {!! image($item['id'], 'full', 'popup-flat__s-image') !!}
              </a>
            @endforeach
            @endif
        </div>
        <div class="popup-flat__cart">
          <a href="{{ $data['extraRzut']['url'] }}" data-fancybox="rzut-extra-rzut-{{ $data['nr'] }}">
            {!! image($data['extraRzut']['id'], 'full', 'popup-flat__cart-img') !!}
          </a>
          
          <a class="popup-flat__karta" href="{{ $data['karta']['url'] }}" data-fancybox="rzut-flat-{{ $data['nr'] }}">
            Karta Domu
            <img src="@asset('images/icons/icon-pdf.png')" class="table-pdf" alt="Karta mieszkania {{ $flat['nr'] }}">
          </a>
        </div>
      </div>
      <div class="popup-flat__cell">
          <div class="popup-flat__header">
            <h2 class="popup-flat__title">
              DOM {{ $data['nr'] }} @if($data['budynek'] != '') Budynek {{ $data['budynek'] }} @endif
            </h2>
            <p class="popup-flat__content">
              POWIERZCHNIA UŻYTKOWA: {{ $data['powierzchnia'] }} m²
              <br>
              OGRÓD: {{ $data['ogrodek'] }} m²
            </p>
          </div>
          @php
            if($data['budynek']) {
              $flatMessage = 'DOM '. $data['nr'] .' Budynek '.$data['budynek']. ' '.get_the_title();
            }
            
            else {
              $flatMessage = 'DOM '. $data['nr'] . ' ' .get_the_title();
            }
          @endphp
          <div class="popup-flat__form">
            @include('blocks.form-flat', ['flatMessage'=>$flatMessage, 'flatNr'=>$data['nr'], 'inwestycja'=>get_the_title()])
          </div>
      </div>
    </div>
  </div>
</section>
@endif