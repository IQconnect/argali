@php
  $contactInfo = option('contact-section');
@endphp

@if ($contactInfo)
<section class="section" id="contact">
  <div class="container">
    <div class="contact-section">
    @foreach ($contactInfo as $item)
        <div class="contact-section__wrapper">
          {!! $item['content'] !!}
        </div>
    @endforeach
    </div>
  </div>
</section>
@endif