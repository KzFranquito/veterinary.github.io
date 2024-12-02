<?php

namespace App\Http\Controllers;

use App\Models\Mascotas;
use Illuminate\Http\Request;

class MascotasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lista = Mascotas::all();
        return view('mascotas.index')->with(compact('lista'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mascotas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cat = new Mascotas;
        $cat->nombre = $request->nombre;
        $cat->genero = $request->genero;
        $cat->tipo = $request->tipo;
        $cat->especie = $request->especie;
        $cat->dueño = $request->dueño;
        $cat->save();

        return redirect(route('clientes.index')); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Mascotas $mascotas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mascotas $mascotas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mascotas $mascotas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mascotas $mascotas)
    {
        //
    }
}
