@extends('layouts.app')

<div style=" background: url({{asset('images/backgroundForSite.jpg') }}); height: 100%" class="main-block">

    @section('content')

        <!doctype html>
        <html lang="{{ app()->getLocale() }}">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <title>YevgeniyaVentura</title>
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

            <!-- Styles -->
            <style>
                .buttons{
                    margin-left: 400px;

                }

            </style>
        </head>
        <body>
        <div class="buttons">
            <p style="text-align: center; "><button>Edit the schedule of receptions</button>
            <p style="text-align: center; "><button>View user profiles</button>
            <p style="text-align: center; "><button>Delete users</button>

        </div>
        </body>
        </html>

</div>
@endsection