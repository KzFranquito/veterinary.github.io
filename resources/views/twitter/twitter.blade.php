@extends('layouts.base')

@section('contenido')

<br><br><br>
<div class="search-container">
        <h2>Buscar Usuario en X</h2>
        <form method="POST" action="/twitter"> @csrf <div class="form-group mb-3"> <label for="username">Usuario:</label>
                <input type="text" class="form-control" id="username" name="username"
                    placeholder="Introduce un usuario">
            </div> <button type="submit" class="btn btn-primary">Buscar</button> </form>
    </div>

    <div class="result-container">
    @if (isset($error))
        <div class="alert alert-danger">{{ $error }}</div>
    @else
        <div class="card">
            <div class="card-header">{{ $username }}</div>
            <div class="card-body">
                <h5 class="card-title">{{ $id }}</h5>
                <p class="card-text">{{ $name }}</p>
            </div>
        </div>
    @endif
</div>

@endsection












