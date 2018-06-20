@section('title')
  Séance d'un film
@endsection
LLLL
<div class="title m-b-md">Un film<br><br></div>
<?php

 ?>
@foreach($showings as $showing)

  echo {{$showing->language_showing }}
@endforeach
