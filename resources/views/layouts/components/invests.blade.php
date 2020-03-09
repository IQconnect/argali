@php
    $title = $data['title'];
    $invests = $data['invests'];
@endphp

<section class="extra-menu">
    <div class="container">
      <ul class="extra-menu__list list">
        <li class="list__elem">
          <h3 class="list__link list__link--title" data-extra-menu>
            {{ $title  }}
          </h3>
        </li>
      </ul>
    </div>
</section>

<section id="posts" class="section posts">
    {{-- <header class="section__header posts__header">
        <h2 class="title">
            {{ $title }}
        </h2>
    </header> --}}
    <div class="container">
        @if ($invests)
        <ul class="posts__list">
            @foreach ($invests as $invest)
            @php
                $link = get_field('link', $invest->ID);
            @endphp
            <li class="posts__item">
                <a href="{{ $link['url'] }}" class="posts__elem">
                    <div class="posts__image-wrapper">
                        {!! image(get_post_thumbnail_id($invest->ID), 'full', 'posts__image') !!}
                    </div>
                    <h3 class="posts__title subtitle">
                        {{ $invest->post_title }}
                    </h3>
                </a>
            </li>
            @endforeach
        </ul>
        @else
        <p class="text">
            Nie znaleziono żadnych inwestycji
        </p>
        @endif
    </div>
</section>