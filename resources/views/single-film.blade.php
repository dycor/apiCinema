@section('title')
  Séance d'un film
@endsection
<div class="title m-b-md">Les séances de vos films<br><br></div>

@foreach($showings as $showing)

  {{$showing->title}}
  <br>
  {{$showing->languageName}}
  <br>
   {{$showing->schedule}}
  <br>
   {{$showing->day}}
  <br>
   {{$showing->cinemaName}}

@endforeach
