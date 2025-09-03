<?php
namespace App\Http\Controllers;

use App\Models\PuntoDonacion;
use Illuminate\Http\Request;

class PuntoDonacionController extends Controller
{
    public function index()
    {
        $puntos = PuntoDonacion::all();
        return view('puntosdonacion.index', compact('puntos'));
    }

    public function create()
    {
        return view('puntosdonacion.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre_punto' => 'required|string|max:255',
            'longitud' => 'required|numeric',
            'latitud' => 'required|numeric',
        ]);

        PuntoDonacion::create($validated);

        return redirect()->route('puntosdonacion.index')->with('success', 'Punto de donación creado correctamente.');
    }

    public function show(PuntoDonacion $puntosdonacion)
    {
        return view('puntosdonacion.show', compact('puntosdonacion'));
    }

    public function edit(PuntoDonacion $puntosdonacion)
    {
        return view('puntosdonacion.edit', compact('puntosdonacion'));
    }

    public function update(Request $request, PuntoDonacion $puntosdonacion)
    {
        $validated = $request->validate([
            'nombre_punto' => 'required|string|max:255',
            'longitud' => 'required|numeric',
            'latitud' => 'required|numeric',
        ]);

        $puntosdonacion->update($validated);

        return redirect()->route('puntosdonacion.index')->with('success', 'Punto de donación actualizado correctamente.');
    }

    public function destroy(PuntoDonacion $puntosdonacion)
    {
        $puntosdonacion->delete();
        return redirect()->route('puntosdonacion.index')->with('success', 'Punto de donación eliminado correctamente.');
    }
}