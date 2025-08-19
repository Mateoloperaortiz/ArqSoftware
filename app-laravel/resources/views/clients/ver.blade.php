<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Cliente</title>
    <style>
        body { font-family: Arial, sans-serif; background: #fff; color: #000; margin: 0; padding: 40px; }
        .container { max-width: 720px; margin: 0 auto; }
        .campo { display: grid; grid-template-columns: 200px 1fr; gap: 8px; padding: 8px 0; border-bottom: 1px solid #000; }
        .acciones { margin-top: 16px; display: flex; gap: 12px; }
        button, a.button { padding: 10px 14px; border: 1px solid #000; background: #fff; color: #000; text-decoration: none; cursor: pointer; }
        button:hover, a.button:hover { background: #000; color: #fff; }
        form { display: inline; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Detalle del Cliente #{{ $client->id }}</h1>

        <div class="campo"><strong>ID</strong><span>{{ $client->id }}</span></div>
        <div class="campo"><strong>Nombre</strong><span>{{ $client->name }}</span></div>
        <div class="campo"><strong>Correo electrónico</strong><span>{{ $client->email }}</span></div>
        <div class="campo"><strong>Contraseña (hash)</strong><span>{{ $client->password }}</span></div>
        <div class="campo"><strong>Verificado en</strong><span>{{ $client->email_verified_at }}</span></div>
        <div class="campo"><strong>Token recordar</strong><span>{{ $client->remember_token }}</span></div>
        <div class="campo"><strong>Creado</strong><span>{{ $client->created_at }}</span></div>
        <div class="campo"><strong>Actualizado</strong><span>{{ $client->updated_at }}</span></div>

        <div class="acciones">
            <form method="POST" action="{{ route('clients.borrar', $client->id) }}" onsubmit="return confirm('¿Está seguro de borrar este cliente?');">
                @csrf
                @method('DELETE')
                <button type="submit">Borrar (Actividad 6)</button>
            </form>
            <a class="button" href="{{ route('clients.listar') }}">Volver a la lista</a>
            <a class="button" href="{{ route('clients.inicio') }}">Inicio</a>
        </div>
    </div>
</body>
</html>


