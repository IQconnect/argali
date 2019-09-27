@php
    $placeholder = new Placeholder;

    $hero = get_field('hero', 'options');
@endphp



<section class="hero">
    <div class="container">

        @if ($hero)
        @foreach ( $hero as $elem)

        <div class="hero__info @if($loop->first) -is-active @endif" slide>
          @include('components.realization.info')
          <nav class="hero__nav">
            <button class="button button--nav-arrow" slide-button data-direction="prev">
              <span class="icon icon--prev"></span>
            </button>
            <button class="button button--nav-arrow" slide-button data-direction="next">
              <span class="icon icon--next"></span>
            </button>
          </nav>
        </div>

        @endforeach
        @endif
    </div>

    @if ($hero)
    @foreach ( $hero as $elem)
      <img class="hero__image @if($loop->first) -is-active @endif" slide-img src="{{$elem['img']['url']}}" alt="placeholder">
      @endforeach
    @endif
</section>
