<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Walter</title>
</head>
<body>
@include('layousts.header')
<div id="content">
    <h1>Walter</h1>
    @yield('NoiDung')
</div>
@include('layousts.footer')
</body>
</html>
