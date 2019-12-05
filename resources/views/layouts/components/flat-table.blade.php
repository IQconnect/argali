@php
  $flats = $data['table'];
  $gallery = $data['gallery'];
@endphp

<section class="section table-section">
  <div class="container">
    <h2 class="table__title">DOSTĘPNE LOKALE</h2>
    @if($flats)
    <table class="table" id="myTable">
      <thead>
        <tr>
          <th>
            Budynek
          </th>
          <th>
            Nr domu
          </th>
          <th>
            Powierzchnia uż. [m2]
          </th>
          <th>
            Ogródek [m2]
          </th>
          <th>
            Rzut
          </th>
          <th>
            Karta domu
          </th>
          <th>
            Wyślij zapytanie
          </th>
          <th>
            Status
          </th>
        </tr>
      </thead>

      <tbody>
        @foreach ($flats as $flat)
        @php
        @endphp
        @if ($flat['status'] == 'wolne')
        <tr>
          <td>
            {{ $flat['budynek'] or 'X' }}
          </td>
          <td>
            {{ $flat['nr'] or 'X' }}
          </td>
          <td>
            {{ $flat['powierzchnia'] or 'X' }}
          </td>
          <td>
            {{ $flat['ogrodek'] or 'X' }}
          </td>
          <td>
            @if( $flat['rzut'] )
            <a href="{{ $flat['rzut']['url'] }}" data-fancybox="rzut{{ $flat['nr'] }}">
                <img src="{{ $flat['rzut']['url'] }}" alt="Plan mieszkania {{ $flat['nr'] }}">
            </a>
            @else
            X
            @endif
          </td>
          <td>
            @if( $flat['karta'] )
            <a href="{{ $flat['karta']['url'] }}" data-fancybox="rzut{{ $flat['nr'] }}">
                <img src="@asset('images/icons/icon-pdf.png')" class="table-pdf" alt="Karta mieszkania {{ $flat['nr'] }}">
            </a>
            @else
            X
            @endif
          </td>
          <td>
            <a class="table-link" href="./?message=Jestem zainteresowany mieszkaniem nr {{ $flat['nr'] }} w budynku {{ $flat['budynek']}} w inwestycji {{ the_title() }}">Wyślij</a>
          </td>
          <td>
            <span class="{{$flat['status']}}">
                {{$flat['status']}}
            </span>
          </td>
        </tr>
        @endif

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

@foreach ($flats as $item)
  @include('blocks.popup-flat', ['data'=>$item, 'gallery'=>$gallery])
@endforeach

