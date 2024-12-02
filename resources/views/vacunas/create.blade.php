@extends('layouts.base')
@section('contenido')
<div class="contenedor-catalogo">
    <div class="container">
        <br><br><br><br><br>
        <h1>Agregar Vacunas</h1>
        <br><br>
        <form action="{{route('vacunas.store')}}" method="POST">
            @csrf
            <div class="row justify-content-center">
                <div class="col-6">
                    
                <div class="mb-3">
                    <label for="tipo_vacuna" class="form-label">Tipo de vacuna</label>
                    <input type="text" class="form-control" name="tipo_vacuna" aria-describedby="nombrehelpId" placeholder="tipo de vacuna" title="El nombre solo puede contener letras y espacios">
                </div>

                <div class="mb-3">
                    <label for="observacion" class="form-label">Observaciones</label>
                    <input type="text" class="form-control" name="observacion" id="observacion" aria-describedby="observacionhelpId" placeholder="observaciones" required>
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