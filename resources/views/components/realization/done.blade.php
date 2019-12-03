@php
    $gallery = get_field('gallerywiz');

    $info = [
        'text-info' => [
            'label' => get_field('loc'),
            'title' => get_field('slogan'),
            'dsc' => get_field('dsc'),
        ]
    ];
@endphp

<section class="section">
  <div class="container">
    <div class="section__wrapper">
      <div class="section__cell">
        @include('components.text.info', ['data'=>$info, 'class'=>'text-info--auto-height'])
      </div>
      <div class="section__cell">
        @include('components.realization.gallery', ['data'=>['gallery' => $gallery]])
      </div>
    </div>
  </div>
</section>
