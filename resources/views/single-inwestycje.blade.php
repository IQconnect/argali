@extends('layouts.app')

@section('content')
@include('layouts.components.hero-small')

@if(in_category(1))
  @include('components.realization.single-menu')

  @if ($_GET['tab'] == remove_accents('Znajdź mieszkanie') && !$_GET['dom'] || !$_GET['tab'])
  @include('components.realization.map')
  @include('components.realization.table')
  @php
  $features = [
  ['text-info' => [
  'label' => get_field('features_label'),
  'title' => get_field('features_title')
  ],
  'features' => get_field('features')]
  ]
  @endphp
  @include('layouts.components.features', ['data'=>$features[0]])
  @include('layouts.components.extra', ['data'=>get_field('extra')])
  @endif
  
  @if ($_GET['tab'] == remove_accents('Znajdź mieszkanie') && $_GET['dom'])
  @include('components.realization.flat')
  @include('components.realization.table')
  @endif
  
  @if ($_GET['tab'] == remove_accents('Tabela ofertowa'))
  @include('components.realization.table')
  @endif
  
  @if ($_GET['tab'] == remove_accents('Lokalizacja'))
  @include('components.realization.localization')
  @endif

  @if ($_GET['tab'] == remove_accents('Dziennik budowy'))
  @include('components.realization.note')
  @endif
  
  @if ($_GET['tab'] == remove_accents('Galeria'))
  <section class="section">
    <div class="container">
      <div class="section__wrapper">
        @php
        $gallery = get_field('gallerywiz');
        @endphp
        <div class="section__cell">
          <div class="gallery-invest -is-active">
            <!-- NAV -->
            <div class="gallery-invest__wrapper gallery-invest__wrapper--nav  gallery-invest__wrapper--grid @if(count($gallery) < 3) gallery-invest__wrapper--dont-transform @endif flickity-gallery-nav">
              @foreach ($gallery as $img)
              <div class="gallery-invest__cell">
                {!! image($img['ID'], 'full', 'gallery-invest__image') !!}
              </div>
              @endforeach
            </div>
          </div>
        </div>
        <div class="section__cell">
          <div class="gallery-invest -is-active">
            <!-- Flickity HTML init -->
            <div class="gallery-invest__wrapper gallery-invest__wrapper--full flickity-main-gallery">
              @foreach ($gallery as $img)
              <a class="gallery-invest__cell" href="{{ $img['url'] }}" data-fancybox="gallery">
                {!! image($img['ID'], 'full', 'gallery-invest__image') !!}
              </a>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endif
@else 
@include('components.realization.done')
@endif

{{-- @dump( $flat) --}}
@endsection