@php
    $image = get_field('map_image');
@endphp
<section class="section map" data-tab="map">
    <div class="container">
        <div class="map__wrapper">
            <img src="{{ $image[url] }}" usemap="#image-map" class="map__image">
            <map name="image-map">
                <area target="" alt="" title="" href="" coords="1149,524,1204,441,1216,367,1111,332,1056,408,1045,486" shape="poly">
            </map>
        </div>
    </div>
</section>