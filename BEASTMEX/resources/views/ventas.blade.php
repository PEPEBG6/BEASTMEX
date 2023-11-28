@extends('layouts.plantillaHome')

@section('titulo','Ventas')

@section('name')

@section('contenido')
  
    <link rel="stylesheet" href="css/stylesAlma.css">

   
  <p class="move-down fs-1 fw-bold text-center text-white">Ventas</p>



        <div class="button-container">
            <button type="button" class="btn btn-secondary" href="/">PDF</button>
            <a type="button" class="btn btn-primary " href="/regVen">+Registrar</a>
        </div>
        <form class="d-flex" role="search">
            <input class="form-control me-2 w-25" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        
  <div class="card card-shadow container">


        <div class="col-md-11 p-4">

            <div class="button-container">
                <button type="button" class="btn btn-secondary" href="/">PDF</button>
                <a type="button" class="btn btn-primary " href="/regVen">+Registrar</a>
            </div>
        

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Productos</th>
                        <th scope="col">stock</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Costo</th>
                        <th scope="col">Foto</th>
                    </tr>
                </thead>
            
            </table>
        </div>           
    </div>
    
@endsection
