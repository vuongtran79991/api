<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vuong</title>
</head>
<body>
@extends('layousts.master')

@section('NoiDung')
    {{--<h2>PHP</h2>--}}

    <?php $khoahoc = array('PHP','C#',"NODEJS",'IOS');?>
    @if(!empty($khoahoc)){
    @foreach ($khoahoc as $value)
        {{$value}}
        }
    @endforeach
        @else {{"Mang rong"}}

    @endif
@endsection
</body>
</html>
