@php
    $link = $data->guid;
    $title = $data->post_title;
    $dsc = $data->post_excerpt;
@endphp

<a class="offert-block link">
    <div class="offert-block__wrapper">
        <header class="offert-block__header">
            <h3 class="offert-block__title subtitle light">
                {{ $title }}
            </h3>
        </header>
        <p class="offert-block__dsc text light">
            {{ $dsc }}
        </p>
    </div>
    {{-- <footer class="offert-block__footer">
        <span class="link link--arrow text">
            {{ __('Zobacz ofertę', 'Argali') }}
        </span>
    </footer> --}}
</a>