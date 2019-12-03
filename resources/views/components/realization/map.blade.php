@php
    $image = get_field('map_image');
    $flats = get_field('flats_info');
    $colors = [
        'free' => '20ff49',
        'take' => 'ffdd1b',
        'sold' => 'fa0909',
    ] 
@endphp
<section class="section map" data-tab="map">
    <div class="container">
        <div class="map__wrapper">
            <div class="map__wrapper-title">
                <h2 class="map__title title">Wybierz Dom</h2>
                <div class="map__navigation">
                    <div class="map__color-wrapper" data-map-color="free">
                        <div class="map__color map__color--free"></div>
                        <p class="text">
                            WOLNE
                        </p>
                    </div>
                    <div class="map__color-wrapper" data-map-color="taken">
                        <div class="map__color map__color--taken"></div>
                        <p class="text">
                            ZAREZERWOWANE
                        </p>
                    </div>
                    <div class="map__color-wrapper" data-map-color="sold">
                        <div class="map__color map__color--sold"></div>
                        <p class="text">
                            SPRZEDANE
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="map__wrapper-map">
                <span class="map__info-button">
                    <img class="map__info-img" src="@asset('images/info.png')" alt="Zobacz jak działa nasza mapa">
                </span>
                <div class="map__info">
                    <p class="map__info-title subtitle light">
                        Informacja
                    </p>
                    <p class="text">
                        Najedź na budynek aby zobaczyć szczegóły, 
                        <br><br>
                        Klikając w budynek możesz przejść do rzutu budynku i wybrać mieszkanie które Cię interesuje.
                    </p>
                </div>
                <img src="{{ $image[url] }}" usemap="#image-map" class="map__image">
            </div>
            <map name="image-map" class="foo">
                @foreach ($flats as $item)
                @php
                    $flat = $item['Dane'];
                    $cords = $flat['cords'];
                    $status = $flat['status'];
                @endphp
                <area shape="poly" @if($status == 'free' && $flat['name']) href="./?tab=Znajdz%20mieszkanie&dom={{ $loop->index }}" class="tooltip" data-tooltip-content="#tooltip_content{{ $loop->index }}" title="{{ $loop->index }}" @endif data-status="{{ $status }}" alt="{{ $loop->index }}" coords="{{ $cords }}" data-maphilight='{"fillColor":"{{ $colors[$status] }}","fillOpacity":0.5,"stroke":false}'>                     
                @endforeach
            </map>
        </div>
    </div>
    @foreach ($flats as $item)
    <div class="tooltip_templates" hidden>
        <div class="tooltip__wrapper" id="tooltip_content{{ $loop->index }}">
            @php
                $flat = $item['Dane'];
                $name = $flat['name'];
                $area = $flat['area'];
                $rooms = $flat['rooms'];
                $baths = $flat['baths'];
                $garage = $flat['garage'];
                $garden = $flat['garden'];
            @endphp
            <h2 class="tooltip__title subtitle light">
                {{ $name }}
            </h2>
            <p class="tooltip__content text">
                Wymiar: {{ $area or "-" }}
                <br>
                Pokoje: {{ $rooms or "-" }}
                <br>
                Łazienki: {{ $baths or "-" }}
                @if ($garage || $garden)
                <br>
                <br>
                Dom dodatkowo posiada:
                @if ($garage) 
                    <br>
                    Garaż: {{ $garage }}
                    @endif
                    @if ($garage) 
                    <br>
                    Ogród: {{ $garden }}
                    @endif
                @endif
            </p>
        </div>
    </div>
    @endforeach
</section>

