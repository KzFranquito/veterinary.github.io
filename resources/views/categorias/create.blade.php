@extends('layouts.base')
@section('contenido')
<div class="contenedor-catalogo">
    <div class="container">
        <br><br><br><br><br>
        <h1>Nueva Categoría</h1>
        <br><br>
        <form action="{{route('clientes.store')}}" method="POST">
            @csrf
            <div class="row justify-content-center">
                <div class="col-6">
                    
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre Completo</label>
                    <input type="text" class="form-control" name="nombre" aria-describedby="nombrehelpId" placeholder="Nombre" required pattern="[a-zA-Z\s]+" title="El nombre solo puede contener letras y espacios">
                </div>

                <div class="mb-3">
                    <label for="domicilio" class="form-label">Domicilio</label>
                    <input type="text" class="form-control" name="domicilio" id="domicilio" aria-describedby="domiciliohelpId" placeholder="Domicilio" required>
                </div>

                <div class="mb-3">
                    <label for="telefono" class="form-label">Teléfono (10 dígitos)</label>
                    <input type="tel" class="form-control" name="telefono" id="telefono" aria-describedby="telefonohelpId" placeholder="Teléfono" maxlength="10" pattern="[0-9]{10}" required>
                </div>

                        <!-- <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="nombreHelp" required>
                        <div id="nombreHelp" class="form-text">Nombre de la categoría (ej: POSTRES, PASTELES).</div>
                      </div> -->
                      <button type="reset" class="btn btn-warning">Limpiar</button>
                      <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
          </form>
    </div>
</div>
@endsection