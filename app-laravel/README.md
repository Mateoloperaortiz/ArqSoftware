## Taller 1 – Gestión de Clientes (Laravel)

### 1) Requisitos
- PHP 8.2+ y Composer instalados

### 2) Cómo ejecutar el proyecto
1. En la carpeta `app-laravel`.
2. Instalo dependencias: `composer install`
3. Ya dejé SQLite listo. Si se borra, creo el archivo `database/database.sqlite`.
4. Corro migraciones: `php artisan migrate`
5. Levanto el servidor: `php artisan serve --host=127.0.0.1 --port=8087`
6. Abro en el navegador: `http://127.0.0.1:8087`

### 3) Qué hace la app (Actividades)
- Actividad 1 (Inicio): Página con 2 botones para ir a crear cliente o listar.
- Actividad 2 (Formulario creación): Formulario para crear un cliente con atributos primitivos.
- Actividad 3 (Inserción): Valido datos y guardo en BD. Si todo ok, muestro “Elemento creado satisfactoriamente”.
- Actividad 4 (Listar): Muestro `id` y `nombre` de cada cliente con enlace al detalle.
- Actividad 5 (Ver): Muestro todos los atributos del cliente y habilito botón para borrar.
- Actividad 6 (Borrar): Borro el cliente y regreso a la lista con mensaje de éxito.

### 4) Rutas principales
- Inicio: `GET /`
- Crear cliente: `GET /clientes/crear`
- Guardar cliente: `POST /clientes`
- Listar clientes: `GET /clientes`
- Ver cliente: `GET /clientes/{id}`
- Borrar cliente: `DELETE /clientes/{id}`
