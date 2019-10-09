<div class="colage">
    @foreach ($data as $item)
        {!! image($item['ID'], 'full', 'colage__img') !!}
    @endforeach
</div>