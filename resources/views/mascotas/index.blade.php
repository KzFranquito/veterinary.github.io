@extends('layouts.base')
@section('contenido')
<div class="contenedor-catalogo">
    <div class="container">
        <br><br><br><br><br>
        <h1>Mascotas</h1>
        <br><br>
        <div class="row">
            <div class="col-8"></div>
            <div class="col-4">
                <a href="{{route('mascotas.create')}}" class="btn btn-info boton-mas"><i class="fa-regular fa-square-plus"></i></a>
            </div>
        </div>
        <br>

        
        <table class="table tabla-angosta">
            <thead>
            <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Genero</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Especie</th>
                        <th scope="col">Dueño</th>
                        <th scope="col">Acciones</th>
                    </tr>

            </thead>
            <tbody>
                @foreach( $lista as $cat)
                <tr>
                <td class="texto-tabla">{{$cat->id_m}}</td>
                    <td class="texto-tabla">{{$cat->nombre}}</td>
                    <td class="texto-tabla">{{$cat->genero}}</td>
                    <td class="texto-tabla">{{$cat->tipo}}</td>
                    <td class="texto-tabla">{{$cat->especie}}</td>
                    <td class="texto-tabla">{{$cat->dueño}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection