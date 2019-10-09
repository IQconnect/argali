@php
  $flats = get_field('flats_info');
@endphp

<section class="section">
  <div class="container">
    @if($flats)
    <table class="table">
      <thead>
        <tr>
          <th>
            NR
          </th>
          <th>
            Powierzchnia
          </th>
          <th>
            Ogród
          </th>
          <th>
            Pokoje
          </th>
          <th>
            Status
          </th>
          <th>
            Cena
          </th>
          <th>
            Zobacz mieszkanie
          </th>
        </tr>
      </thead>

      <tbody>
        @foreach ($flats as $flat)
        @php
            $flat = $flat['Dane'];
        @endphp
        <tr>
          <td>
            {{ $flat['name'] != '' ? $flat['name'] : 'X' }}
          </td>
          <td>
            {{ $flat['area'] != '' ? $flat['area'] : 'X' }}
          </td>
          <td>
            {{ $flat['garden'] != '' ? $flat['garden'] : 'X' }}
          </td>
          <td>
            {{ $flat['rooms'] != '' ? $flat['rooms'] : 'X' }}
          </td>
          <td>
            <span class="{{$flat['status']}}">
              @if ($flat['status'] == 'free')
                Wolne
              @endif

              @if ($flat['status'] == 'taken')
                Zajęte
              @endif

              @if ($flat['status'] == 'sold')
                Sprzedane
              @endif
            </span>
          </td>
          <td>
            @if( $flat['price'])
            {{ $flat['price'] }}
            @else
              @if ($flat['status'] == 'free')
                <a href="./?tab=Znajdz%20mieszkanie&dom={{ $loop->index }}&section=contact"> Zapytaj o cenę</a>   
              @else
              X
              @endif
            @endif
          </td>
          <td class="table__plan">
            @if( $flat['status'] == 'free' && $flat['name'] != '')
            <a data-fancybox href="./?tab=Znajdz%20mieszkanie&dom={{ $loop->index }}">
              <img src="@asset('images/eye.png')" alt="Plan mieszkania...">
            </a>
            @else
            X
            @endif
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    @else
    <p class="text">
      Brak informacji o budnyku
    </p>
    @endif
  </div>
</section>
