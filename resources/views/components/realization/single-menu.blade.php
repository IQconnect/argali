@php
    $menus = [
        'Znajdź mieszkanie',
        'Lokalizacja',
        'Galeria',
        'Dziennik budowy',
    ];
@endphp

@if ($menus) 
    
<section class="tabs">
    <div class="container">
        <nav class="tabs__nav">
            <ul class="tabs__list">
                @foreach ($menus as $item)
                <li class="tabs__elem">
                    <a href="./?tab={{ remove_accents($item) }}" class="tabs__link  @if($loop->first && !$_GET['tab'] || $_GET['tab'] == remove_accents($item)) -is-active @endif" tab-link>
                        <span class="tabs__title major-text light">
                            {{ $item }}
                        </span>
                    </a>
                </li>
                @endforeach
            </ul>
        </nav>
    </div>
</section>

@endif