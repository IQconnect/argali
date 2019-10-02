@php
  $contactInfo = option('contact');
@endphp

<section class="section section--dark">
  <div class="container">
      <div class="section__wrapper">
          <div class="section__cell">
              @include('components.text.info', ['data'=>$contactInfo])
          </div>
          <div class="section__cell section__cell--2col">
            @include('components.contact.form')
            @include('components.contact.person')
          </div>
      </div>
  </div>
</section>