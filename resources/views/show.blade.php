{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--    <title>Posts</title>--}}
{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"--}}
{{--          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">--}}
{{--</head>--}}
{{--<body>--}}


@extends('layouts.app')

@section('shape')
    <div class="card">
        <div class="card-header">
           Post
        </div>
        <div class="card-body">
            <h5 class="card-title">{{$ShowPost->title}}</h5>
            <p class="card-text">{{$ShowPost->Description}}</p>
{{--            <a href="#" class="btn btn-primary">Go somewhere</a>--}}
        </div>
    </div>

@endsection




