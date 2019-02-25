<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@if(Auth::check())
    <H1>Dang Nhap Thanh Cong</H1>
    @if (isset($user))
        {{"Ten : ".$user->name}}
        <br>
        {{"Email : ".$user->email}}
        <a href="{{url('logout')}}">Logout</a>
    @endif
@else
    <H1>Ban chua dang nhap</H1>
@endif
</body>
</html>
