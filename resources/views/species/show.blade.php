<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ $species->vulgar_name }}</title>
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body>
    <h1>{{ $species->vulgar_name }}</h1>
    <p>{{ $species->scientific_name }}</p>
    <p><a href="{{ route('species.index') }}">Regresar al listado</a></p>
</body>
</html>
