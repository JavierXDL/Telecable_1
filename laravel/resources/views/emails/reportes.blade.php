<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Reporte de Fallo del Cliente con el Numero:{{ $reporte['contractNumber'] }} </h1>
    <p>El cliene reporta el siguiente Fallo:</p>
    <p><strong>Numero de Cliente:</strong> {{ $reporte['contractNumber'] }}</p>
    <p><strong>Numero Telefonico:</strong> {{ $reporte['telephoneR'] }}</p>
    <p><strong>Corrreo Electronico:</strong> {{ $reporte['emailR'] }}</p>
    <p><strong>Descripcion de la Falla:</strong> {{ $reporte['Faultdescription'] }}</p>

</body>

</html>
