@extends('layouts.plantillaHome')

@section('titulo','Compras')

@section('name')

@section('contenido')
  
    <link rel="stylesheet" href="css/stylesAlma.css">
   
  <p class="move-down fs-1 fw-bold text-white text-center">Compras</p>



        <div class="button-container">
            <button type="button" class="btn btn-secondary" href="/">PDF</button>
            <a type="button" class="btn btn-primary " href="/regCom">Orden de Compra</a>
        </div>
        <form class="d-flex" role="search">
            <input class="form-control me-2 w-25" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

  <div class="card card-shadow container">
        <div class="col-md-11 p-4">

            <form class="d-flex" role="search">
                <input class="form-control me-2 w-25" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

            <div class="button-container">
                <button type="button" class="btn btn-secondary" href="/">PDF</button>
                <a type="button" class="btn btn-primary " href="/regCom">Orden de Compra</a>
            </div>


            
        

            <table class="table table-striped table-hover m-1 border-1">
                <thead>
                    <tr>
                        <th scope="col">Productos</th>
                        <th scope="col">Existencia</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Provedor Alta y Baja</th>

                        
                    </tr>
                </thead>
                
            </table>
        </div>
    </div>
    
@endsection
