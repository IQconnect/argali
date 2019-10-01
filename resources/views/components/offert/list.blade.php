@php
    $offerts = $data;
@endphp

<ul class="offert-list">
    @foreach ( $offerts as $offert)
    <li class="offert-list__elem">
        @include('components.offert.block', ['data'=>$offert])
    </li>
    @endforeach
</ul>