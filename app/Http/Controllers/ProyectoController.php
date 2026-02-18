<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proyectos = Proyecto::with('user')->get();

        return Inertia::render('Proyectos/Index', [
            'proyectos' => $proyectos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         if (auth()->user()->role !== 'profesor') {
            abort(403, 'No tienes permiso para crear proyectos');
        }

        return Inertia::render('Proyectos/Create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        if (auth()->user()->role !== 'profesor') {
            abort(403, 'No tienes permiso para crear proyectos');
        }

        $request->validate([
            'titulo' => 'required',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date',
        ]);

        Proyecto::create([
            'titulo' => $request->titulo,
            'fecha_inicio' => $request->fecha_inicio,
            'fecha_fin' => $request->fecha_fin,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('proyectos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Proyecto $proyecto)
    {
        return Inertia::render('Proyectos/Show', [
            'proyecto' => $proyecto
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proyecto $proyecto)
    {
        if (auth()->user()->role !== 'profesor') {
            abort(403, 'No tienes permiso');
        }

        return Inertia::render('Proyectos/Edit', [
            'proyecto' => $proyecto
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proyecto $proyecto)
    {

        if (auth()->user()->role !== 'profesor') {
            abort(403, 'No tienes permiso');
        }

        $request->validate([
            'titulo' => 'required',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date',
        ]);

        $proyecto->update([
            'titulo' => $request->titulo,
            'fecha_inicio' => $request->fecha_inicio,
            'fecha_fin' => $request->fecha_fin,
        ]);

        return redirect()->route('proyectos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proyecto $proyecto)
    {
        if (auth()->user()->role !== 'profesor') {
            abort(403, 'No tienes permiso');
        }
        
        $proyecto->delete();

        return redirect()->route('proyectos.index');
    }
}
