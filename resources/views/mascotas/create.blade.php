@extends('layouts.base')
@section('contenido')
<div class="contenedor-catalogo">
    <div class="container">
        <br><br><br><br><br>
        <h1>Agregar Mascotas</h1>
        <br><br>
        <form action="{{route('mascotas.store')}}" method="POST">
            @csrf
            <div class="row justify-content-center">
                <div class="col-6">
                    
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" aria-describedby="nombrehelpId" placeholder="Nombre" required pattern="[a-zA-Z\s]+" title="El nombre solo puede contener letras y espacios">
                </div>

                <div class="mb-3">
                    <label for="genero" class="form-label">Genero</label>
                    <input type="text" class="form-control" name="genero" id="genero" aria-describedby="generohelpId" placeholder="genero" required>
                </div>

                <div class="mb-3">
                    <label for="tipo" class="form-label">tipo</label>
                    <input type="tipo" class="form-control" name="tipo" id="tipo" aria-describedby="tipohelpId" placeholder="tipo"required>
                </div>

                <div class="mb-3">
                    <label for="especie" class="form-label">Especie</label>
                    <input type="especie" class="form-control" name="especie" id="especie" aria-describedby="especiehelpId" placeholder="especie"required>
                </div>

                <div class="mb-3">
                    <label for="dueño" class="form-label">Dueño</label>
                    <input type="dueño" class="form-control" name="dueño" id="dueño" aria-describedby="dueñohelpId" placeholder="dueño"required>
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