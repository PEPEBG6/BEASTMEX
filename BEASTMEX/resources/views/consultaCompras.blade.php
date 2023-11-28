@extends('layouts.plantilla')

@section('titulo','Compras')


@section('contenido')



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





    <link rel="stylesheet" href="css/stylesAlma.css">
    
    <p class="move-down fs-1 fw-bold text-white ">Compras</p>

    <div class="card card-shadow container">

        <div class="col-md-11 p-4">

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
    </div>

   


@endsection