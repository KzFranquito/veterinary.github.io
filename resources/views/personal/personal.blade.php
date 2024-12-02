@extends('layouts.base')

@section('contenido')


<style>
       

.container {
    background: linear-gradient(145deg, #ffffff, #f3f4f6); 
    border-radius: 12px; 
    box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1), 0 4px 6px rgba(0, 0, 0, 0.05); 
    padding: 30px 40px;
    width: 320px; 
    text-align: center;
    position: relative;
    overflow: hidden;
}

.container::before {
    content: '';
    position: absolute;
    top: -50px;
    right: -50px;
    width: 120px;
    height: 120px;
    background: rgba(33, 150, 243, 0.2); 
    border-radius: 50%;
    z-index: -1;
}

.container::after {
    content: '';
    position: absolute;
    bottom: -40px;
    left: -40px;
    width: 100px;
    height: 100px;
    background: rgba(33, 150, 243, 0.1); 
    border-radius: 50%;
    z-index: -1;
}

/* Títulos */
h1 {
    font-size: 1.8rem;
    color: #1e88e5; 
    margin-bottom: 20px;
}

/* Párrafos */
p {
    font-size: 1rem;
    color: #424242; 
    margin: 10px 0;
}


.action {
    margin-top: 20px;
}

input[type="checkbox"] {
    margin-right: 10px;
    accent-color: #1e88e5; 
    transform: scale(1.3); 
}

label {
    font-size: 1rem;
    color: #1e88e5;
    cursor: pointer;
    transition: color 0.3s ease;
}

input[type="checkbox"]:checked + label {
    color: #388e3c; 
    font-weight: bold;
}

.container:hover {
    transform: scale(1.02); 
    transition: transform 0.3s ease;
}




    </style>
<br><br>
<br><br>
<script type="module" src="{{asset('/js/firestore.js')}}"></script>
<div class="container">
    <h1>Entrada Personal</h1>
    <br><br>
    <p id="id">ID: </p>
    <p id="hora">Hora:</p>
    <center>
        <input id="abrir" type="checkbox" name="abrir" checked onchange="abrir()"> 
        <label for="abrir">ABRIR ENTRADA</label>
    </center>
</div>



</div>
@endsection
