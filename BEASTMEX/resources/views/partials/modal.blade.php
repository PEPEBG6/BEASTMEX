<!-- Modales -->
@foreach ($consR as $item)
    <!-- Modal de Edición -->
    <div class="modal fade" id="editar{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Editar Producto</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method='POST' action='/editar/{{$item->id}}'>
                        @csrf 
                        {!! method_field('PUT')!!}
                        <div class="mb-3">
                            <label class="form-label">Nombre</label>
                            <input type="text" name="almNombre" class="form-control" value="{{$item->almNombre}}">
                            <p class="text-danger fw-bold">{{$errors->first('almNombre')}}</p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">No. Serie</label>
                            <input type="text" name="almNoSerie" class="form-control" value="{{$item->almNoSerie}}">
                            <p class="text-danger fw-bold">{{$errors->first('almNoSerie')}}</p>
                        </div>
                        <!-- Agrega aquí los demás campos que desees editar -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endforeach

<!-- Vista -->
@extends('layouts.plantillaHome')

@section('titulo','Almacen')

@section('name')

@section('contenido')
  
  <link rel="stylesheet" href="css/stylesAlma.css">

   <p class="move-down fs-1 fw-bold text-center text-white">Productos</p>
   
   <div class="card card-shadow container">
        <div class=" col-md-11 p-4">
            <form class="d-flex " role="search">
                <input class="form-control me-2 w-25" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <div class="button-container">
                <button type="button" class="btn btn-secondary" href="/">Reporte</button>
                <a type="button" class="btn btn-primary " href="/registrarAlmacen">Registrar</a>
            </div>
            <table class="table table-striped table-hover m-1 border-1">
                <thead>
                    <tr>
                        <th scope="col">No. Serie</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Costo</th>
                        <th scope="col">Precio Venta</th>
                        <th scope="col">Fecha ingreso</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($consR as $item)
                        <tr>
                            <td>{{$item->almNoSerie}}</td>
                            <td>{{$item->almNombre}}</td>
                            <td>{{$item->almMarca}}</td>
                            <td>{{$item->almCantidad}}</td>
                            <td>{{$item->almCostoC}}</td>
                            <td>{{$item->almPrecioVen}}</td>
                            <td>{{$item->almFechaIn}}</td>
                            <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editar{{$item->id}}">
                                    Editar
                                </button>
                                <!-- Agrega aquí el botón para eliminar si lo necesitas -->
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
