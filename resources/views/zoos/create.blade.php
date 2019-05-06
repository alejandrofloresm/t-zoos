<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Nuevo zoológico</title>
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body>
    <h1>Nuevo zoológico</h1>
    <form method="POST" action="{{ route('zoos.store') }}">
        @csrf
        <p>Nombre</p>
        <input type="text" value="" name="name">
        <p>Ciudad</p>
        <input type="text" value="" name="city">
        <p>País</p>
        <input type="text" value="" name="country">
        <p>Tamaño</p>
        <input type="text" value="" name="size">
        <p>Presupuesto</p>
        <input type="text" value="" name="budget">
        <input type="submit">
    </form>
</body>
</html>
