<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Zoológicos</title>
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body>
    <h1>Zoológicos</h1>
    <a href="{{ route('zoos.create') }}">
        Crear un nuevo zoológico
    </a>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Ciudad</th>
                <th>País</th>
                <th>Tamaño</th>
                <th>Presupuesto</th>
            </tr>
        </thead>
        <tbody>
            @foreach($zoos as $zoo)
                <tr>
                    <td>
                        <a href="{{ route('zoos.show', ['zoo' => $zoo]) }}">
                            {{ $zoo->id }}
                        </a>
                    </td>
                    <td>{{ $zoo->name }}</td>
                    <td>{{ $zoo->city }}</td>
                    <td>{{ $zoo->country }}</td>
                    <td>{{ $zoo->size }}</td>
                    <td>{{ $zoo->annual_budget }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>