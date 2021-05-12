<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensaje recibido desde tu {{ env('APP_URL')}}</title>
</head>
<body>
    <h1>Mensaje recibido desde tu {{ env('APP_URL')}}</h1>
    <p>
        Nombre: {{$data->nombre}} <br>
        Nombre: {{$data->email}} <br>
        Nombre: {{$data->mensaje}} <br>

    </p>

</body>
</html>