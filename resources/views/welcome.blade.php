<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Composite keys? It doesn't matter</title>
  <style>
    dd {
      max-width: 400px;
      background: #fcfcfc;
      border: 1px solid #f0f0f0;
      padding: 10px;
      margin: 20px;
    }
  </style>
</head>
<body>

  <dl>

    @foreach($rooms as $room)

    <dd class="row">

        A: {{ $room->kode_a }}
        B: {{ $room->kode_b }}
        C: {{ $room->kode_c }}
        D: {{ $room->kode_d }}
        E: {{ $room->kode_e }}

      <!--
      .............................................................
      Cara pertama menggunakan hidden input
      .............................................................
      -->
      <form method="POST" action="/rooms/cara1">
        {{ csrf_field() }} {{ method_field('DELETE') }}

        @php($keys = "{$room->kode_a},{$room->kode_b},{$room->kode_c},{$room->kode_d},{$room->kode_e}")

        <input type="hidden" name="keys" value="{{ $keys }}">
        <button type="submit">Delete cara 1</button>
      </form>


      <!--
      .............................................................
      Cara kedua - menggunakan multiple hidden input dengan array
      .............................................................
      -->
      <form method="POST" action="/rooms/cara2">
        {{ csrf_field() }} {{ method_field('DELETE') }}

        <input type="hidden" name="keys[kode_a]" value="{{ $room->kode_a }}">
        <input type="hidden" name="keys[kode_b]" value="{{ $room->kode_b }}">
        <input type="hidden" name="keys[kode_c]" value="{{ $room->kode_c }}">
        <input type="hidden" name="keys[kode_d]" value="{{ $room->kode_d }}">
        <input type="hidden" name="keys[kode_e]" value="{{ $room->kode_e }}">

        <button type="submit">Delete cara 2</button>
      </form>


      <!--
      .............................................................
      Cara ketiga - menggunakan query string parameter
      .............................................................
      -->
      @php
        $query = http_build_query([
          'kode_a' => $room->kode_a,
          'kode_b' => $room->kode_b,
          'kode_c' => $room->kode_c,
          'kode_d' => $room->kode_d,
          'kode_e' => $room->kode_e,
        ]);
      @endphp
          
      <form method="POST" action="/rooms/cara3?{!! $query !!}">
        {{ csrf_field() }} {{ method_field('DELETE') }}

        <button type="submit">Delete cara 3</button>
      </form>

    </dd>

    @endforeach

  </dl>

</body>
</html>
