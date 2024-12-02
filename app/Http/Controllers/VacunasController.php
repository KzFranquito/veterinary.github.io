<?php

namespace App\Http\Controllers;

use App\Models\Vacunas;
use Illuminate\Http\Request;

class VacunasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lista = Vacunas::all();
        return view('vacunas.index')->with(compact('lista'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vacunas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cat = new Vacunas;
        $cat->tipo_vacuna = $request->tipo_vacuna;
        $cat->observacion = $request->observacion;
        $cat->save();

        return redirect(route('vacunas.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Vacunas $vacunas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vacunas $vacunas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vacunas $vacunas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vacunas $vacunas)
    {
        //
    }
}
