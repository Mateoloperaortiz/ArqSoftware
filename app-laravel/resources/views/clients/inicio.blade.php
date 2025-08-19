<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Clientes</title>
    <style>
        body { font-family: Arial, sans-serif; background: #fff; color: #000; margin: 0; padding: 40px; }
        .container { max-width: 720px; margin: 0 auto; }
        h1 { margin-bottom: 24px; }
        .acciones { display: flex; gap: 12px; }
        a.button { display: inline-block; padding: 10px 14px; border: 1px solid #000; color: #000; text-decoration: none; background: #fff; }
        a.button:hover { background: #000; color: #fff; }
        .nota { margin-top: 24px; font-size: 14px; color: #333; }
    </style>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="color-scheme" content="light">
    <meta name="supported-color-schemes" content="light">
    <meta name="robots" content="noindex">
    <meta name="referrer" content="no-referrer">
</head>
<body>
    <div class="container">
        <h1>Gestión de Clientes</h1>
        <p>Seleccione una acción:</p>
        <div class="acciones">
            <a class="button" href="{{ route('clients.crear') }}">Actividad 2: Crear cliente</a>
            <a class="button" href="{{ route('clients.listar') }}">Actividad 4: Listar clientes</a>
        </div>
        <p class="nota">Interfaz en blanco y negro. Todo el contenido está en español.</p>
    </div>
</body>
</html>


