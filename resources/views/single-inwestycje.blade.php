@extends('layouts.app')

@section('content')
  @include('layouts.components.hero-small')
  @include('components.realization.single-menu')

  @if ($_GET['tab'] == remove_accents('Znajdź mieszkanie') && !$_GET['dom'] || !$_GET['tab'])
    @include('components.realization.map')

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
  @endif

  @if ($_GET['tab'] == remove_accents('Znajdź mieszkanie') && $_GET['dom'])
    @include('components.realization.flat')
  @endif

  @if ($_GET['tab'] == remove_accents('Tabelka'))
    @include('components.realization.table')
  @endif

  @if ($_GET['tab'] == remove_accents('Lokalizacja'))
    @include('components.realization.localization')
  @endif

  @if ($_GET['tab'] == remove_accents('Finansowanie'))
    @include('components.realization.finanse')
  @endif

  {{-- @dump( $flat) --}}
@endsection
