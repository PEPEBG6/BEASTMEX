@extends('layouts.plantilla')

@section('titulo','Compras')


@section('contenido')



    <link rel="stylesheet" href="css/stylesAlma.css">
    
    <p class="move-down fs-1 fw-bold">Compras</p>

    <div class="container col-md-11 p-4">

        <div class="button-container">
            <button type="button" class="btn btn-secondary" href="/">Reportes</button>
            <a type="button" class="btn btn-secondary " href="/">Graficas</a>
        </div>


        <table class="table">
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

   


@endsection