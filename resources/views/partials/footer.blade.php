@php
    $footer = option('footer');
    $links = $footer['footer_links'];
    $copyright = $footer['copyright'];
    $madeby = option('logo-madeby')['url'];
@endphp

<footer class="section footer">
  <div class="container">
    <div class="section__wrapper">
        <div class="section__cell">
          <h2 class="footer__title title">
            {{ $footer['footer_title'] }}
          </h2>
          <div class="footer__dsc text light">
            <p>
              {!! $footer['footer_address'] !!}
            </p>
            <p>
              tel. : <a href="tel:{{ str_replace(' ', '', $footer['tel']) }}">{{ $footer['tel'] }}</a>
              <br>
              mail : <a href="mailto:{{ $footer['mail'] }}">{{ $footer['mail'] }}</a>
            </p>
            <p>
                NIP: {{ $footer['footer_nip'] }} <br>
                REGON: {{ $footer['footer_regon'] }} <br>
                KRS: {{ $footer['footer_krs'] }} <br>
            </p>
          </div>
        </div>
        <div class="section__cell">
          @if ($links)
          <div class="footer__links">
            @foreach ($links as $item)
            <div class="footer__menu">
              <h3 class="text light uppercase">
                {{ $item['title'] }}
              </h3>
              @if ($item['links'])
              <ul class="footer__list">
                @foreach ($item['links'] as $elem)
                <li>
                  <a class="footer__link text light" href="{{ $elem['link']['url'] }}">
                    {{ $elem['link']['title'] }}
                  </a>
                </li>
                @endforeach
              </ul>
              @endif
            </div>
            @endforeach
          </div>
          @endif
        </div>
    </div>
  </div>
  <div class="footer__copyright-wrapper">
    <div class="container">
        <div class="section__wrapper section__wrapper--no-wrap">
            <div class="section__cell">
              <p class="text light">
                  {!! $copyright !!}
              </p>
            </div>
            <div class="section__cell section__cell--end">
              <a href="http://iqconnect.pl/">
                <img src="{{ $madeby }}" alt="IQ Connect - Strony internetowe" class="footer__madeby">
              </a>
            </div>
        </div>
    </div>
  </div>
</footer>