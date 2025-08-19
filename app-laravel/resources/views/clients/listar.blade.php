<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
    <style>
        body { font-family: Arial, sans-serif; background: #fff; color: #000; margin: 0; padding: 40px; }
        .container { max-width: 720px; margin: 0 auto; }
        table { width: 100%; border-collapse: collapse; margin-top: 16px; }
        th, td { border: 1px solid #000; padding: 8px; text-align: left; }
        a { color: #000; }
        .exito { background: #fff; color: #000; border: 1px solid #000; padding: 10px; margin: 12px 0; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Clientes</h1>

        @if (session('exito'))
            <div class="exito">{{ session('exito') }}</div>
        @endif

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($clients as $client)
                    <tr>
                        <td><a href="{{ route('clients.ver', $client->id) }}">{{ $client->id }}</a></td>
                        <td>{{ $client->name }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2">No hay clientes registrados.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <p><a href="{{ route('clients.inicio') }}">Volver al inicio</a> | <a href="{{ route('clients.crear') }}">Crear cliente</a></p>
    </div>
</body>
</html>


