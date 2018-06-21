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
                        {!! Form::open(['url' => 'create']) !!}
                        {!! Form::label('title') !!}
                        {!! Form::text('title') !!}
                        {!! Form::label('Release date') !!}
                        {!! Form::date('releaseDate') !!}
                        {!! Form::label('Duration') !!}
                        {!! Form::time('duration',null,['step' => '1']) !!}
                        {!! Form::label('Synopsis') !!}
                        {!! Form::text('synopsis') !!}
                        {!! Form::label('Director') !!}
                        {!! Form::select('director', $values, null, ['class' => 'browser-default'])!!}
                        {!! Form::submit('Submit') !!}
                        {!! Form::close() !!}
                </div>
            </div>
        </div>
    </body>
</html>
