<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
</head>
<body>

<form action="/reg" method="post">
    {{csrf_field()}}
    <input type="email" name="email" value="{{old('email')}}">
    <br>
    <input type="password" name="password">
    <br>
    <button type="submit">Submit</button>

</form>
@yield('content')
</body>
</html>
