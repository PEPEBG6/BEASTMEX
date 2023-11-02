@extends('layouts.plantillaLogin')

@section('titulo','Registros')


@section('name')



<div class="container col-md-4 p-4">


   <div class="card">
     <div class="card-header fs-4  fw-medium text-center">
         Registros de Gerencia
     </div>
 
   
        <div class="card-body">
            <form method='POST' action='/guardarProducto'>
                @csrf 

                <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input type="text" name="txtNombre" class="form-control" required placeholder="Nombre del producto" value="{{ old('txtNombre') }}">
                    <p class="text-danger fw-bold">{{$errors->first('txtNombre')}}</p>
                </div>
    
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit">Registrar Libro</button>
                </div>

            </form>
        </div>
   </div> <!-- Div de la tarjeta -->
</div> <!-- Div del contenedor -->


@section('contenido')