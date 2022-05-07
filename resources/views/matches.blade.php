@extends('master')

@section('meta')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="orders">
    <meta name="author" content="Eric Hu">
@endsection

@section('title')
    <title>All Matches</title>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8">
            <table class="table">
                <tbody>
                @foreach($matches as $match)
                    @foreach($match as $value)
                <tr>
                    <td>{{$value['home_name']}}</td>
                    <td>{{$value['home_result']}}</td>
                    <td>-</td>
                    <td>{{$value['visit_result']}}</td>
                    <td>{{$value['visit_name']}}</td>
                </tr>
                    @endforeach
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
