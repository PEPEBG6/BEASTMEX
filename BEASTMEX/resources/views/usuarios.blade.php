@extends('layouts.plantillaHome')

@section('titulo','Ventas')

@section('name')

@section('contenido')
  
    <link rel="stylesheet" href="css/stylesAlma.css">

   
  <p class="move-down fs-1 fw-bold text-center text-white">Ventas</p>


  <div class="card card-shadow container">

        <div class="col-md-11 p-4">

            <div class="button-container">
                <button type="button" class="btn btn-secondary" href="/">PDF</button>
                <a type="button" class="btn btn-primary " href="/registrarUsuarios">+Registrar</a>
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
                @foreach ($consR as $item)
                    <tr>
                        <td>{{$item->Nombre}}</td>
                        <td>{{$item->AP }}</td>
                        <td>{{$item->AM }}</td>
                        <td>{{$item->CorreoUsu }}</td>
                        <td>{{$item->puesto }}</td>
                        <td>{{$item->Contraseña }}</td>
                    </tr>
                @endforeach 

                </thead>
                
            </table>
        </div>   
  </div>
    
@endsection