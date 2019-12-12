@php
    $contact = option('contact');
@endphp

<form action="./" method="POST" class="form" validation data-form>
    {{-- <h3 class="form__title uppercase text light">
        {{ $contact['title'] }}
    </h3> --}}
    <div class="form__wrapper">
        <div class="form__input-wrapper form__input-wrapper--contact-form">
            <label class="form__label" for="name">{{ $contact['name'] }}</label>
            <input class="form__input" id="name" name="name" type="text" required> 
        </div>
        <div class="form__input-wrapper form__input-wrapper--contact-form">
            <label class="form__label" for="phone"> {{ $contact['phone'] }}</label>
            <input class="form__input" type="phone" id="phone" name="phone" required>
        </div>
        <div class="form__input-wrapper form__input-wrapper--contact-form">
            <label class="form__label" for="email"> {{ $contact['email'] }}</label>
            <input class="form__input" name="email" id="email" type="email" required>
        </div>
        <div class="form__input-wrapper form__input-wrapper--nolabel form__input-wrapper--contact-form">
            <label class="form__label"> Preferowany roadzaj kontaktu</label>
            <div class="form__checkbox-group">
                <label class="form__checkbox-wrapper form__label form__label--select" for="emailcheck">
                    <input type="checkbox" name="emailcheck" id="emailcheck" class="form__checkbox">
                    <span class="form__checkbox-trigger"></span>
                    E-MAIL
                </label>
                <label class="form__checkbox-wrapper form__label form__label--select" for="phonecheck">
                    <input type="checkbox" name="phonecheck" id="phonecheck" class="form__checkbox">
                    <span class="form__checkbox-trigger"></span>
                    TELEFON
                </label>
            </div>
        </div>
        <div class="form__input-wrapper form__input-wrapper--contact-form form__input-wrapper--textarea">
            <label class="form__label" for="message"> {{ $contact['message'] }}</label>
            <textarea class="form__input form__input--textarea" name="message" id="message" rows="1" data-textarea></textarea>
        </div>
    </div>
    <label class="form__checkbox-wrapper small-text" for="terms2">
        <input type="checkbox" name="terms2" id="terms2" class="form__checkbox" required>
        <span class="form__checkbox-trigger"></span>
        {!! $contact['terms'] !!}
    </label>
    <div class="form__button-wrapper">
        <button class="form__button button">
            {{ $contact['button'] }}
        </button>
    </div>
    <p class="form__thankyou text">
        {!! $contact['thankyou'] !!}
        @if ($contact['link'])
            <a href="{{ $contact['link']['url'] }}" class="text bold link link--arrow link--invert">{{ $contact['link']['title'] }}</a>    
        @endif
    </p>
</form>
