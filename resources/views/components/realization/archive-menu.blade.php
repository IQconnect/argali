@php
     $args = array(
        'taxonomy' => 'category',
        'orderby' => 'menu_order',
        'order'   => 'ASC'
    );

   $cats = get_categories($args);
@endphp

@if ($cats)
    
<section class="tabs">
    <div class="container">
        <nav class="tabs__nav">
            <ul class="tabs__list">
                @foreach ($cats as $cat)
                <li class="tabs__elem">
                    <a href="?cat={{ $cat->slug }}" class="tabs__link  @if($loop->first && !$_GET['cat'] || $_GET['cat'] == $cat->slug) -is-active @endif" tab-link>
                        <span class="tabs__title major-text light">
                            {{ $cat->name }}
                        </span>
                    </a>
                </li>
                @endforeach
            </ul>
        </nav>
    </div>
</section>

@endif