<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        {!! MaterializeCSS::include_full() !!}
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Film Add</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="" href="{{ route('login') }}">Sign in</a>
                        <a class="" href="{{ route('register') }}">Sign up</a>
                    @endauth
                </div>
            @endif

            <div class="content container">
                <!-- FORM-->

                <div class="row">
                    <form class="col s12" method="post" action="{{route('create')}}">
                        {{csrf_field()}}
                        {{ config('app.name') }}
                        <!--<input type="hidden" name="_method" value="post">-->
                        <div class="row">
                            <div class="input-field col s6">
                                <input placeholder="Title" id="title" type="text" class="validate" required>
                                <label for="title">Title</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="releaseDate" type="date" class="validate" required>
                                <label for="releaseDate">Release date</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input placeholder="Duration" id="duration" type="time" class="validate" required>
                                <label for="duration">Duration</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="synopsis" type="text" class="validate">
                                <label for="synopsis">Synopsis</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="director" type="text" class="validate" required>
                                <label for="director">Director</label>
                            </div>
                        </div>
                        <input type="submit" value="Submit" class="btn-flat">
                    </form>
                </div>


            </div>
        </div>
    </body>
</html>
