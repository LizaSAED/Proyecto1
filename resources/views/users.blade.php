<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Usuarios - Pagina de ejemplo</title>
</head>
<body>
    <h1>{{$title}}</h1>

    <ul> 
        @foreach ($users as $user)
            <li>{{$user}}</li>
        @endforeach
    </ul>
</body>
</html>