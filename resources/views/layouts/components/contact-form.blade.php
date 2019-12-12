@php
  $contactInfo = option('contact-section');
@endphp
@if ($contactInfo)
<section class="contact-form">
  <div class="container container--fluid">
    <div class="contact-form__wrapper">
      <div class="contact-section">
        @foreach ($contactInfo as $item)
          <div class="contact-section__wrapper">
            {!! $item['content'] !!}
          </div>
        @endforeach
      </div>
      @include('components.contact.form')
    </div>
  </div>
</section>
@endif