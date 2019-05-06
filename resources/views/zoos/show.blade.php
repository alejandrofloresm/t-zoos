<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ $zoo->name }}</title>
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body>
    <h1>{{ $zoo->name }}</h1>
    <p>{{ $zoo->country }}</p>
    <p><a href="{{ route('zoos.index') }}">Regresar al listado</a></p>
</body>
</html>
