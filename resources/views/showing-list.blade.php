
@extends('single-film')


@section('content')

      Les séances
      <br><br>
      <ul>
        @foreach($showings as $showing)
          {{ $showing->language_showing }}
        @endforeach
      </ul>

@endsection
