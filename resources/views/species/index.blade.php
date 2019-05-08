<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Especies</title>
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body>
    <h1>Especies</h1>
    <a href="{{ route('species.create') }}">
        Crear una nueva especie
    </a>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre vulgar</th>
                <th>Nombre científico</th>
                <th>Familia</th>
                <th>¿Esta en peligro?</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($species as $item)
                <tr>
                    <td>
                        <a href="{{ route('species.show', ['species' => $item]) }}">
                            {{ $item->id }}
                        </a>
                    </td>
                    <td>{{ $item->vulgar_name }}</td>
                    <td>{{ $item->scientific_name }}</td>
                    <td>{{ $item->family }}</td>
                    <td>{{ $item->is_on_danger }}</td>
                    <td>
                        <a href="{{ route('species.edit', ['species' => $item]) }}">
                            Editar
                        </a>
                        <form method="POST" action="{{ route('species.delete', ['species' => $item]) }}">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input type="submit" value="Eliminar">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
