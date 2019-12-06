{{--
  Template Name: Kontakt
--}}

@extends('layouts.app')

  @php
  $contactInfo = option('contact');
  @endphp

  <section class="section section--dark" id="contact">
  <div class="container">
      <div class="section__wrapper">
          <div class="section__cell">
              @include('components.text.info', ['data'=>$contactInfo])
          </div>
          <div class="section__cell">
              <div class="google-map" id="google-map" google-map data-lng={{ $map['lng'] }} data-title="Argali" data-lat={{ $map['lat'] }}></div>
          </div>
      </div>
  </div>
  </section>
  @include('layouts.components.contact')

@endsection
