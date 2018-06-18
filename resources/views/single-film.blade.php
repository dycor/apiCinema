@extends('layout')
@section('title')
  Séance d'un film
@endsection

@section('content')
      <div class="title m-b-md">Un film<br><br></div>

                <br><br>
                <ul>
                  @foreach($showings as $showing)
                    {{ $showing->language_showing }}
                  @endforeach
                </ul>
@endsection
