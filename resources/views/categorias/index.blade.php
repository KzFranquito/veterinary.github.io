@extends('layouts.base')
@section('contenido')
<div class="contenedor-catalogo">
    <div class="container">
        <br><br><br><br><br>
        <h1>Categorías</h1>
        <br><br>
        <div class="row">
            <div class="col-8"></div>
            <div class="col-4">
                <a href="{{route('clientes.create')}}" class="btn btn-info boton-mas"><i class="fa-regular fa-square-plus"></i></a>
            </div>
        </div>
        <br>
        <table class="table tabla-angosta">
            <thead>
            <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre Completo</th>
                        <th scope="col">Domicilio</th>
                        <th scope="col">Teléfono</th>
                    </tr>

            </thead>
            <tbody>
                @foreach( $lista as $cat)
                <tr>
                    <td class="texto-tabla">{{$cat->nombre}}</td>
                    <td class="texto-tabla">{{$cat->domicilio}}</td>
                    <td class="texto-tabla">{{$cat->telefono}}</td>
                    <td class="texto-tabla">Acciones</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection