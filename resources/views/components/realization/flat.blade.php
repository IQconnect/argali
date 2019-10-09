@php
$flat = get_field('flats_info')[$_GET['dom']]['Dane'];
$contactInfo = option('contact');
$docs = $flat['docs'];
$spec = [
  [
    'title'=>'METRAŻ',
    'icon'=>'m2.png',
    'val'=>$flat['area'],
  ],
  [
    'title'=>'LICZBA PIĘTER',
    'icon'=>'levels.png',
    'val'=>$flat['flors'],
  ],
  [
    'title'=>'LICZBA POKOI',
    'icon'=>'rooms.png',
    'val'=>$flat['rooms'],
  ],
  [
    'title'=>'LICZBA ŁAZIENEK',
    'icon'=>'bath.png',
    'val'=>$flat['baths'],
  ],
  [
    'title'=>'GARAŻ',
    'icon'=>'garage.png',
    'val'=>$flat['area'],
  ],
  [
    'title'=>'OGRÓDEK',
    'icon'=>'garden.png',
    'val'=>$flat['garden'],
  ],
];

$contactText = [
  'text-info'=>
    [
      'label'=>'DO POBRANIA',
      'title'=>'Dokumenty',
    ]
];
@endphp

<section class="section">
  <div class="container">
    <div class="section__wrapper">
      <div class="section__cell">
        @include('components.text.info', ['data'=>$flat, 'class'=>'text-info--auto-height'])
        @if ($spec)
        <ul class="icons">
          @foreach ($spec as $item)
          <li class="icons__elem">
            <div class="icons__icon-wrapper">
              <img src="@asset('images/'.$item['icon'])" alt="{{ $item['title'] }}" class="icons__icon">
              <h4 class="text">{{ $item['title'] }}</h4>
            </div>
            <p class="text">
              {{ $item['val'] or '-' }}
            </p>
          </li>
          @endforeach
        </ul>
        @endif
      </div>
      <div class="section__cell">
        @include('components.realization.gallery', ['data'=>$flat])
      </div>
    </div>
  </div>
</section>

<section class="section section--dark">
  <div class="container">
    <div class="section__wrapper">
      <div class="section__cell">
        @include('components.text.info', ['data'=>$contactText, 'class'=>'text-info--auto-height'])
        @if ($docs)
        <ul class="icons">
          @foreach ($docs as $item)
          <li class="icons__elem">
            <a class="icons__icon-wrapper" href="{{ $item['doc']['url'] }}" data-fancybox="docs">
              <img src="@asset('images/download.png')" alt="{{ $item['doc']['caption'] }}" class="icons__icon">
              <span class="text">{{ $item['doc']['caption'] }}</span>
            </a>
          </li>
          @endforeach
        </ul>
        @endif
      </div>
      <div class="section__cell section__cell--2col">
        @include('components.contact.form', ['title' => get_the_title().' '.$flat['name'], 'message'=>'Chciałbym zapytać o'.' '.get_the_title().' '.$flat['name']])
        @include('components.contact.person')
      </div>
    </div>
  </div>
</section>