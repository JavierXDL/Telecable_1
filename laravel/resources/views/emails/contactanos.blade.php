<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Correo Electronico</h1>
    primer correo de prueba
    <p><strong>Nombre:</strong> {{$contacto['name']}}</p>
    <p><strong>Numero Telefonico:</strong> {{$contacto['telephone']}}</p>
    <p><strong>Corrreo Electronico:</strong> {{$contacto['email']}}</p>
    <p><strong>Mensaje:</strong> {{$contacto['message']}}</p>
</body>
</html>