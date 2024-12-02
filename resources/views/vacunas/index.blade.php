@extends('layouts.base')
@section('contenido')
<div class="contenedor-catalogo">
    <div class="container">
        <br><br><br><br><br>
        <h1>Vacunas</h1>
        <br><br>
        <div class="row">
            <div class="col-8"></div>
            <div class="col-4">
                <a href="{{route('vacunas.create')}}" class="btn btn-info boton-mas"><i class="fa-regular fa-square-plus"></i></a>
            </div>
        </div>
        <br>
        <table class="table tabla-angosta">
            <thead>
            <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Tipo de vacuna</th>
                        <th scope="col">Observaciones</th>
                        <th scope="col">Acciones</th>
                    </tr>

            </thead>
            <tbody>
                @foreach( $lista as $cat)
                <tr>
                    <td class="texto-tabla">{{$cat->id_v}}</td>
                    <td class="texto-tabla">{{$cat->tipo_vacuna}}</td>
                    <td class="texto-tabla">{{$cat->observacion}}</td>
                @endforeach
                
            </tbody>
        </table>
    </div>
</div>
@endsection