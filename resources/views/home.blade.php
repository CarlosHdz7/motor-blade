<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Home</h1>
    <header>
        <nav>
            <a href="{{route('home')}}">Inicio</a>
            <a href="{{route('saludo','Invitado')}}">Saludo</a>
            <a href="{{route('contacto')}}">Contacto</a>
        </nav>
    </header>
</body>
</html>