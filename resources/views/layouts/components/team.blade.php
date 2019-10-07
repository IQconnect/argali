@php
    $block =  $data['block'];
    $team =  $data['person'];
@endphp

<section class="section">
    <div class="container">
        <div class="section__wrapper">
            <div class="section__cell">
                @include('components.text.info', ['data'=>$block])
            </div>
            <div class="section__cell">
                @include('components.team.list', ['data'=>$team])
            </div>
        </div>
    </div>
</section>