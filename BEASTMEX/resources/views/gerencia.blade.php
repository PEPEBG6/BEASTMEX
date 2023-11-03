@extends('layouts.plantillaHome')

@section('titulo','Almacen')

@section('name')

@section('contenido')
  
    <link rel="stylesheet" href="css/stylesAlma.css">
   
  <p class="move-down fs-1 fw-bold">Gerencia</p>

  <div class="container col-md-11 p-4">

        <div class="button-container">
            <button type="button" class="btn btn-secondary" href="/">PDF</button>
            <a type="button" class="btn btn-primary " href="/regGer">+Registrar</a>
        </div>
      

        <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No. Serie</th>
                    </tr>
                </thead>
            
        </table>

  </div>
    
@endsection
