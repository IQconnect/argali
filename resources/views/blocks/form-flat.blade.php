@php
    $contact = option('contact');
    $customId = rand(1, 300);
@endphp

<form action="./" method="POST" class="form form--flat" validation data-form>
  <h3 class="form__title uppercase text">
    FORMULARZ KONTAKTOWY
  </h3>
  <div class="form__wrapper">
      <div class="form__input-wrapper">
          <label class="form__label" for="name">
              {{ $contact['name'] }}
          </label>
          <input class="form__input" id="name" name="name" type="text" required>
      </div>
      <div class="form__input-wrapper">
          <label class="form__label" for="phone"> {{ $contact['phone'] }}</label>
          <input class="form__input" type="phone" id="phone" name="phone" required>
      </div>
      <div class="form__input-wrapper">
          <label class="form__label" for="email"> {{ $contact['email'] }}</label>
          <input class="form__input" name="email" id="email" type="email" required>
      </div>
      <div class="form__input-wrapper form__input-wrapper--textarea">
          <label class="form__label" for="message"> {{ $contact['message'] }}</label>
          <textarea class="form__input form__input--textarea" name="message" id="message" rows="1" data-textarea></textarea>
      </div>
  </div>
  <label class="form__checkbox-wrapper small-text" for="terms{{$customId}}">
      <input type="checkbox" name="terms" id="terms{{$customId}}" class="form__checkbox" required>
      <span class="form__checkbox-trigger"></span>
      {!! $contact['terms'] !!}
  </label>
    <input type="hidden" name="flat" value="{{ $flatMessage }}">
    <input type="hidden" name="flat_nr" value="{{ $flatNr }}">
    <input type="hidden" name="inwestycja" value="{{ $inwestycja }}">
  <button class="form__button button">
      {{ $contact['button'] }}
  </button>
  <p class="form__thankyou text">
      {!! $contact['thankyou'] !!}
      @if ($contact['link'])
          <a href="{{ $contact['link']['url'] }}" class="text bold link link--arrow link--invert">{{ $contact['link']['title'] }}</a>
      @endif
  </p>
</form>
