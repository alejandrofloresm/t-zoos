<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Nuevo zoológico</title>
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body>
    <h1>Nueva especie</h1>
    <form method="POST" action="{{ route('species.store') }}">
        @csrf
        <p>Nombre vulgar</p>
        <input type="text" value="" name="species[vulgar_name]">
        <p>Nombre científico</p>
        <input type="text" value="" name="species[scientific_name]">
        <p>Familia</p>
        <input type="text" value="" name="species[family]">
        <p>Esta en peligro</p>
        <input type="text" value="" name="species[is_on_danger]">
        <input type="submit">
    </form>
</body>
</html>
