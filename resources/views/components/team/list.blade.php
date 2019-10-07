@php
    $team = $data;
@endphp

@if ($team)
<ul class="team-list">
    @foreach ($team as $person)
    <li class="team-list__elem">
        @include('components.team.person', ['data'=>$person])
    </li>
    @endforeach 
</ul>
@endif