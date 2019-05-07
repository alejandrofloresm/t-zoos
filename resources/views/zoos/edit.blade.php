<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Editar zoológico</title>
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body>
    <h1>Editar zoológico</h1>
    <form method="POST" action="{{ route('zoos.update', ['zoo' => $zoo])}}">
        @csrf
        {{ method_field('PUT') }}
        <p>Nombre</p>
        <input type="text" value="{{ $zoo->name }}" name="zoo[name]">
        <p>Ciudad</p>
        <input type="text" value="{{ $zoo->city }}" name="zoo[city]">
        <p>País</p>
        <input type="text" value="{{ $zoo->country }}" name="zoo[country]">
        <p>Tamaño</p>
        <input type="text" value="{{ $zoo->size }}" name="zoo[size]">
        <p>Presupuesto</p>
        <input type="text" value="{{ $zoo->annual_budget }}" name="zoo[annual_budget]">
        <input type="submit" value="Editar">
    </form>
</body>
</html>
