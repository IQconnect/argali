@php
  $contactInfo = option('contact');
@endphp

<section class="section">
  <div class="container">
      <div class="section__wrapper">
          <div class="section__cell">
              @include('components.text.info', ['data'=>$contactInfo])
          </div>
          <div class="section__cell section__cell--2col">
            @include('components.contact.form')
          </div>
      </div>
  </div>
</section>