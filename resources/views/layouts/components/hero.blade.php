@php
    $placeholder = new Placeholder;

    $hero = option('hero');
@endphp



<section class="hero">
    <div class="container">

        @if ($hero)
        @foreach ( $hero as $elem)

        <div class="hero__info @if($loop->first) -is-active @endif" slide>
          @include('components.realization.info', ['data'=>$elem])
        </div>

        @endforeach
        @endif
    </div>

    @if ($hero)
    @foreach ( $hero as $elem)
    @php
        $img = get_the_post_thumbnail_url($elem->ID);
    @endphp
      <img class="hero__image @if($loop->first) -is-active @endif" slide-img src="{{ $img }}" alt="{{ $elem->the_title }}">
      @endforeach
    @endif

    @if (count($hero) > 1)
      <nav class="hero__nav">
        <button class="button button--nav-arrow" slide-button data-direction="prev">
          <span class="icon icon--prev"></span>
        </button>
        <button class="button button--nav-arrow" slide-button data-direction="next">
          <span class="icon icon--next"></span>
        </button>
      </nav>
    @endif
</section>
