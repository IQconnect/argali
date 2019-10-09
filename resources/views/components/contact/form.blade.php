@php
    $contact = option('contact');
@endphp

<form action="./" method="POST" class="form" validation data-form>
    <div class="form__header">
        <h3 class="form__title uppercase text light">
            {{ $contact['title'] }}
        </h3>
    </div>
    <div class="form__wrapper">
        <div class="form__input-wrapper">
            <input class="form__input" placeholder="{{ $contact['name'] }}" name="name" type="text" required> 
        </div>
        <div class="form__input-wrapper">
            <input class="form__input" value="{{ $title }}" placeholder="{{ $title or $contact['topic'] }}" name="topic" type="text" required>
        </div>
        <div class="form__input-wrapper">
            <input class="form__input" placeholder="{{ $contact['email'] }}" name="email" type="email" required>
        </div>
        <div class="form__input-wrapper">
            <input class="form__input" placeholder="{{ $contact['phone'] }}" type="phone" name="phone" required>
        </div>
        <div class="form__input-wrapper form__input-wrapper--textarea">
            <textarea class="form__input form__input--textarea" rows="1" placeholder="{{ $contact['message'] }}" data-textarea>{{ $message }}
            </textarea>
        </div>
    </div>
    <label class="form__checkbox-wrapper small-text" for="terms">
        <input type="checkbox" name="terms" id="terms" class="form__checkbox" required>
        <span class="form__checkbox-trigger"></span>
        {!! $contact['terms'] !!}
    </label>
    <button class="text link link--arrow link--invert bold">
        {{ $contact['button'] }}
    </button>
    <p class="form__thankyou text">
        {!! $contact['thankyou'] !!}
        @if ($contact['link'])
            <a href="{{ $contact['link']['url'] }}" class="text bold link link--arrow link--invert">{{ $contact['link']['title'] }}</a>    
        @endif
    </p>
</form>
