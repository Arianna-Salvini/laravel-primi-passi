<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello</title>
</head>

<body>
    <header>
        <nav>
            <a href="{{route('contacts')}}">{{$contacts}}</a>
            <a href="{{route('about')}}">{{$about}}</a>
        </nav>
    </header>
    <h1>Hello Word</h1>
    <h2> {{$hello}}</h2>
</body>

</html>