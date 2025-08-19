<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class ClientController extends Controller
{
    // Actividad 1: vista inicial
    public function inicio()
    {
        return view('clients.inicio');
    }

    // Actividad 2: formulario creación
    public function crear()
    {
        return view('clients.crear');
    }

    // Actividad 3: inserción objeto
    public function guardar(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('clients', 'email')],
            'password' => ['required', 'string', 'min:6'],
            'email_verified_at' => ['nullable', 'date'],
            'remember_token' => ['nullable', 'string', 'max:100'],
        ]);

        $client = new Client();
        $client->name = $validated['name'];
        $client->email = $validated['email'];
        $client->password = Hash::make($validated['password']);
        $client->email_verified_at = $validated['email_verified_at'] ?? null;
        $client->remember_token = $validated['remember_token'] ?? null;
        $client->save();

        return redirect()->route('clients.crear')->with('exito', 'Elemento creado satisfactoriamente');
    }

    // Actividad 4: listar objetos
    public function listar()
    {
        $clients = Client::select('id', 'name')->orderBy('id', 'desc')->get();
        return view('clients.listar', compact('clients'));
    }

    // Actividad 5: ver un objeto
    public function ver($id)
    {
        $client = Client::findOrFail($id);
        return view('clients.ver', compact('client'));
    }

    // Actividad 6: borrar objeto
    public function borrar($id)
    {
        $client = Client::findOrFail($id);
        $client->delete();
        return redirect()->route('clients.listar')->with('exito', 'Elemento eliminado satisfactoriamente');
    }
}
