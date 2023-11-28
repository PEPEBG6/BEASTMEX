@extends('layouts.plantilla')

@section('titulo','Usuarios')

@section('name')

@section('contenido')
  
    <link rel="stylesheet" href="css/stylesAlma.css">


    
    <nav class="navbar navbar-expand-lg bg-primary">

        <link rel="stylesheet" href="css/stylesNav.css">
    
        <div class="container-fluid">
    
          <a class="navbar-brand fw-bold fs-3 text-white" >BEASTMEX</a>
    
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
    
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

    
                    <div class="b">
                        <a type="button" class="btn btn-light" href="/gerencia">Regresar</a>
                    </div>
    
                    
    
                </ul>
                
          </div>
        </div>
    </nav>



   
  <p class="move-down fs-1 fw-bold text-center text-white">Usuarios</p>

  <div class="card card-shadow container">

        <div class="col-md-11 p-4">

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
  </div>
    
@endsection