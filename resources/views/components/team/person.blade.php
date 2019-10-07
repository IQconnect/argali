@php
    $name = $data->post_title;
    $img = get_post_thumbnail_id( $data->ID );

    $job = get_field('job_title', $data->ID);
@endphp

<div class="team-person">
    {!! image($img, 'full', 'team-person__img') !!}
    <h3 class="team-person__name large-text bold">
        {{ $name }}
    </h3>
    <p class="team-person__job text light">
        {{ $job }}
    </p>
</div>