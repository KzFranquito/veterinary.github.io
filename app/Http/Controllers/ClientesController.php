<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
            $lista = Clientes::all();
            return view('clientes.index')->with(compact('lista'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cat = new Clientes;
        $cat->nombre = $request->nombre;
        $cat->domicilio = $request->domicilio;
        $cat->telefono = $request->telefono;
        
        $cat->save();

        return redirect(route('clientes.index')); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Clientes $clientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Clientes $clientes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Clientes $clientes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Clientes $clientes)
    {
        //
    }
    public function indexRest()
    {
        //past.mx/Clientess  Get
        $lista = Clientes::all();
        // return $lista;
        return $lista;
    }

    public function showRest($id)
    {
        //past.mx/Clientess/1  GET
        $cat = Clientes::find($id);
        return $cat;
    }

    public function storeRest(Request $request)
    {
        if ($request->nombre && $request->domicilio && $request->telefono){ 
            $cat = new Clientes;
            $cat->nombre = $request->nombre;
            $cat->domicilio = $request->domicilio;
            $cat->telefono = $request->telefono;
            $cat->save();

            $response['mensaje'] = 'OK';
        } else {

            $response ['mensaje'] = 'Falta el parámetro "nombre"';
        }
        return $response;
    }
    

    public function updateRest(Request $request,$id)
    { 
        if($request->nombre && $request->domicilio && $request->telefono){ 
            $cat = Clientes::find($id);
            if($cat!=null) { 
                $cat->nombre = $request->nombre;
                $cat->domicilio = $request->domicilio;
                $cat->telefono = $request->telefono;
                $cat->save();

                $response['mensaje'] = 'OK';
            } else {
                $response ['mensaje'] = 'El id no existe';
            }
        }  else {
            $response ['mensaje'] = 'Falta el parametro nombre';
        }
        return $response;
    }


    public function destroyRest($id)
    {
        $cat = Clientes::find($id);
        if($cat!=null) { 
            $cat->delete();
            $response['mensaje'] = 'OK';
        } else {
            $response ['mensaje'] = 'El id no existe';
        }
        return $response;
    }

}

