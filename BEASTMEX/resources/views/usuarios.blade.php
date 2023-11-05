@extends('layouts.plantilla')

@section('titulo','Usuarios')

@section('name')

@section('contenido')
  
    <link rel="stylesheet" href="css/stylesAlma.css">
   
  <p class="move-down fs-1 fw-bold">Usuarios</p>

  <div class="container col-md-9 p-2">

        <div class="button-container">
            <a type="button" class="btn btn-primary " href="/regUsua">+Registrar</a>
        </div>

        

        <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido Paterno</th>
                        <th scope="col">Apellido Materno</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Puesto</th>
                        <th scope="col">Contraseña</th>
                        
                    </tr>
                </thead>
            
        </table>

  </div>
    
@endsection