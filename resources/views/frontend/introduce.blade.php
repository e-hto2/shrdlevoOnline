@extends('layouts.frontend')
@section('header-section')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}">
    <style>
        body,html {
            font-family: 'Droid Sans', sans-serif;
            background-image: url("{{ asset('frontend/images/SkyBackground.png') }}");
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-5 welcome-header">
                <div class="welcome-to-blockworld">
                    <h1>Welcome to BlockWorld</h1>
                    <p>
                        In BlockWorld, language is randomly generated!
                    </p>
                    <p>
                        BlockWorld Locals use this language to solve their block related puzzles.
                    </p>
                    <p>
                        With your input, the language will permanently evolve. Incorporating your unique style and lingo.
                    </p>
                    <a class="btn" href="{{ route('consept') }}">Begin</a>
                </div>
            </div>
            <div class="col-5">
                <div class="game-block">
                    <img src="{{ asset('frontend/images/introduce-image.png') }}"/>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer-section')

@endsection
