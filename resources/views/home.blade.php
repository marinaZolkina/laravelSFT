@extends('master')

@section('meta')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="laravel">
    <meta name="author" content="Eric Hu">
@endsection

@section('title')
    <title>Simulator for Football teams</title>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1 class="my-4">Simulator for Football teams:</h1>
            <a href="/week/next/{{$week++}}" class="btn btn-primary">Next week</a>

            @include('object')

        </div>
    </div>
@endsection
