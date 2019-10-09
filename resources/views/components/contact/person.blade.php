@php
    $person = get_field('person')[0] ? get_field('person')[0] : option('contact')['person'][0];
    $id = $person->ID;
    $title = get_field('job_title', $id);
    $image = get_post_thumbnail_id($id);
    $name = $person->post_title;
    $mail = get_field('mail', $id);
    $tel = get_field('phone', $id);
@endphp

<div class="person">
    <div class="person__header">
        <h3 class="person__title uppercase text light">
            {{ $title }}
        </h3>
    </div>
    {!! image($image, 'full', 'person__image') !!}
    <address class="person__info">
        <h4 class="person__name subtitle light">
            {{ $name }}
        </h4>
        <p class="text light">
            tel. : <a href="tel:{{ str_replace(' ', '', $tel) }}">{{ $tel }}</a>
            <br>
            mail : <a href="mailto:{{ $mail }}">{{ $mail }}</a>
        </p>
    </address>
</div>
