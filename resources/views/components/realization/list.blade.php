@php
    $args = array(
    'numberposts' => 10,
    'post_type'   => 'inwestycje',
    'orderby'     => 'date',
    'category'    => 1
    );

    if ($_GET['cat']) {
        $cat = get_term_by( 'slug', $_GET['cat'], 'category');

        $args = array(
            'numberposts' => 10,
            'post_type'   => 'inwestycje',
            'orderby'     => 'date',
            'category'    =>  $cat->term_id
        );
    }
 
    $invests = get_posts( $args );
@endphp

<section id="posts" class="section posts">
    <div class="container">
        @if ($invests)
        <ul class="posts__list">
            @foreach ($invests as $invest)
            <li class="post__item">
                <a href="{{ get_permalink($invest->ID) }}" class="posts__elem">
                    <h3 class="posts__title subtitle bold">
                        {{ $invest->post_title }}
                    </h3>
                    <p class="posts__label text">
                        {{ get_field('short_loc', $invest->ID) }}
                    </p>
                    {!! image(get_post_thumbnail_id($invest->ID), 'full', 'posts__image') !!}
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