<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Animales</title>
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body>
    <h1>Animales</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Número de identificación</th>
                <th>Género</th>
                <th>Año de nacimiento</th>
                <th>País</th>
                <th>Continente</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($animals as $item)
                <tr>
                    <td>
                        {{ $item->id }}
                    </td>
                    <td>{{ $item->id_number }}</td>
                    <td>{{ $item->genre }}</td>
                    <td>{{ $item->birth_date }}</td>
                    <td>{{ $item->country }}</td>
                    <td>{{ $item->continent }}</td>
                    <td>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
