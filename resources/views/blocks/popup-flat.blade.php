<section class="popup-flat" data-popup-flat="{{ $data['nr'] }}">
  <div class="container">
    <div class="popup-flat__wrapper">
      <button class="form__close popup-flat__close" data-close-popup="{{ $data['nr'] }}">

      </button>
      <div class="popup-flat__cell">
        <div class="popup-flat__gallery">
            <a href="{{ $data['rzut']['url'] }}" data-fancybox="flat-gallery{{ $data['nr'] }}" class="popup-flat__image">
              {!! image($data['rzut']['id'], 'full', 'popup-flat__s-image') !!}
            </a>
          @foreach ($gallery as $item)
            <a href="{{ $item['url'] }}" data-fancybox="flat-gallery{{ $data['nr'] }}" class="popup-flat__image">
              {!! image($item['id'], 'full', 'popup-flat__s-image') !!}
            </a>
          @endforeach
        </div>
        <div class="popup-flat__cart">
          {!! image($data['extraRzut']['id'], 'full', 'popup-flat__cart-img') !!}
          <a class="popup-flat__karta" href="{{ $data['karta']['url'] }}" data-fancybox="rzut-flat-{{ $data['nr'] }}">
            Karta Domu
            <img src="@asset('images/icons/icon-pdf.png')" class="table-pdf" alt="Karta mieszkania {{ $flat['nr'] }}">
          </a>
        </div>
      </div>
      <div class="popup-flat__cell">
          <div class="popup-flat__header">
            <h2 class="popup-flat__title">
              DOM {{ $data['nr'] }} Budynek {{ $data['budynek'] }}
            </h2>
            <p class="popup-flat__content">
              POWIERZCHNIA UŻYTKOWA: {{ $data['powierzchnia'] }} m²
              <br>
              OGRÓD: {{ $data['ogrodek'] }} m²
            </p>
          </div>
          <div class="popup-flat__form">
            @include('blocks.form-flat')
          </div>
      </div>
    </div>
  </div>
</section>
