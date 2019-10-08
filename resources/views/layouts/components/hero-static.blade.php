@php
  $img = $data['img_id'] ? $data['img_id']  : $data['image']['ID'];
  $info = $data['text-info'];
@endphp

<section class="hero hero--static">
    <div class="container">
      @include('components.text.info', ['data'=>$info, 'class'=>'text-info--light text-info--center'])
    </div>
    {!! image($img, 'full', 'hero__image -is-active') !!}
</section>
