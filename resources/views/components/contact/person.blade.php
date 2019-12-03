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
            Dane kontaktowe
        </h3>
    </div>
    <address class="person__info">
        <p class="text light">
            tel. : <a href="tel:{{ str_replace(' ', '', $tel) }}">{{ $tel }}</a>
            <br>
            mail : <a href="mailto:{{ $mail }}">{{ $mail }}</a>
            <br>
            mail : <a href="mailto:sprzedaz@argali.com.pl ">sprzedaz@argali.com.pl </a>
        </p>
    </address>
</div>
