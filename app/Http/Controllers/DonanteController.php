<?php
namespace App\Http\Controllers;

use App\Models\Donante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DonanteController extends Controller
{
    public function index()
    {
        $donantes = Donante::all();
        return view('donantes.index', compact('donantes'));
    }

    public function create()
    {
        return view('donantes.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'correo' => 'required|email|unique:donantes,correo',
            'telefono' => 'nullable|string|max:20',
            'usuario' => 'required|string|unique:donantes,usuario',
            'contrasena' => 'required|string|min:6',
        ]);

        $validated['contrasena'] = Hash::make($validated['contrasena']);

        Donante::create($validated);

        return redirect()->route('donantes.index')->with('success', 'Donante creado correctamente.');
    }

    public function show(Donante $donante)
    {
        return view('donantes.show', compact('donante'));
    }

    public function edit(Donante $donante)
    {
        return view('donantes.edit', compact('donante'));
    }

    public function update(Request $request, Donante $donante)
    {
        $validated = $request->validate([
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'correo' => 'required|email|unique:donantes,correo,' . $donante->id,
            'telefono' => 'nullable|string|max:20',
            'usuario' => 'required|string|unique:donantes,usuario,' . $donante->id,
            'contrasena' => 'nullable|string|min:6',
        ]);

        if ($validated['contrasena']) {
            $validated['contrasena'] = Hash::make($validated['contrasena']);
        } else {
            unset($validated['contrasena']);
        }

        $donante->update($validated);

        return redirect()->route('donantes.index')->with('success', 'Donante actualizado correctamente.');
    }

    public function destroy(Donante $donante)
    {
        $donante->delete();
        return redirect()->route('donantes.index')->with('success', 'Donante eliminado correctamente.');
    }
}