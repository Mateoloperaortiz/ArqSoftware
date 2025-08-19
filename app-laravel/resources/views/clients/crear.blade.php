<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cliente</title>
    <style>
        body { font-family: Arial, sans-serif; background: #fff; color: #000; margin: 0; padding: 40px; }
        .container { max-width: 720px; margin: 0 auto; }
        label { display: block; margin-top: 12px; }
        input, button { padding: 10px; border: 1px solid #000; background: #fff; color: #000; width: 100%; box-sizing: border-box; }
        button { cursor: pointer; }
        button:hover { background: #000; color: #fff; }
        .row { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; }
        .errores { background: #fff; color: #000; border: 1px solid #000; padding: 10px; margin: 12px 0; }
        .exito { background: #fff; color: #000; border: 1px solid #000; padding: 10px; margin: 12px 0; }
        a { color: #000; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Crear Cliente</h1>

        @if ($errors->any())
            <div class="errores">
                <strong>Se encontraron errores:</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('exito'))
            <div class="exito">{{ session('exito') }}</div>
        @endif

        <form method="POST" action="{{ route('clients.guardar') }}">
            @csrf
            <label>Nombre
                <input type="text" name="name" value="{{ old('name') }}" required>
            </label>
            <label>Correo electrónico
                <input type="email" name="email" value="{{ old('email') }}" required>
            </label>
            <label>Contraseña
                <input type="password" name="password" required>
            </label>
            <div class="row">
                <label>Verificado en (opcional)
                    <input type="datetime-local" name="email_verified_at" value="{{ old('email_verified_at') }}">
                </label>
                <label>Token recordar (opcional)
                    <input type="text" name="remember_token" value="{{ old('remember_token') }}" maxlength="100">
                </label>
            </div>
            <button type="submit">Guardar</button>
        </form>

        <p><a href="{{ route('clients.inicio') }}">Volver al inicio</a> | <a href="{{ route('clients.listar') }}">Ver lista</a></p>
    </div>
</body>
</html>


