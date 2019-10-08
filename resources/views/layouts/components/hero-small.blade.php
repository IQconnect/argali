@php
  $img = get_post_thumbnail_id();
@endphp

<section class="hero hero--small">
    <div class="container">
      <h1 class="hero__title title">
        {{ the_title() }}
      </h1>
    </div>
    {!! image($img, 'full', 'hero__image -is-active') !!}
</section>
