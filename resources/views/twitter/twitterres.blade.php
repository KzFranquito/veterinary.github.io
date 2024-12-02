@extends('layouts.base')

@section('contenido')

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
