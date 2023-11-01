@extends('layouts.plantillaLogin')

@section('titulo','Registros')


@section('name')



<div class="container col-md-4 p-4">


   <div class="card">
     <div class="card-header fs-4  fw-medium text-center">
         Registros de productios
     </div>
 
   
        <div class="card-body">
            <form method='POST' action='/guardarProducto'>
                @csrf 

                <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input type="text" name="txtNombre" class="form-control" required placeholder="Nombre del producto" value="{{ old('txtNombre') }}">
                    <p class="text-danger fw-bold">{{$errors->first('txtNombre')}}</p>
                </div>
            
                <div class="mb-3">
                    <label class="form-label">No. Serie</label>
                    <input type="text" name="txtNoSerie" class="form-control" required placeholder="Numero de Serie" value="{{ old('txtNoSerie') }}">
                    <p class="text-danger fw-bold">{{$errors->first('NoSerie')}}</p>
                </div>

                <div class="mb-3">
                    <label class="form-label">Marca</label>
                    <input type="text" name="txtMarca" class="form-control" required placeholder="Marca" value="{{ old('txtMarca') }}">
                    <p class="text-danger fw-bold">{{$errors->first('txtMarca')}}</p>
                </div>

                <div class="mb-3">
                    <label class="form-label">Cantidad</label>
                    <input type="number" name="Cantidad" class="form-control" required placeholder="Cantidad" value="{{ old('Cantidad') }}">
                    <p class="text-danger fw-bold">{{$errors->first('Cantidad')}}</p>
                </div>

                <div class="mb-3">
                    <label class="form-label">Costo compra</label>
                    <input type="number" name="CostoC" class="form-control" required placeholder="Costo Compra" value="{{ old('CostoCom') }}">
                    <p class="text-danger fw-bold">{{$errors->first('CostoCom')}}</p>
                </div>

                <div class="mb-3">
                    <label class="form-label">Precio de venta</label>
                    <input type="number" name="PrecioVen" class="form-control" required placeholder="Precio Venta" value="{{ old('PrecioVen') }}">
                    <p class="text-danger fw-bold">{{$errors->first('PrecioVen')}}</p>
                </div>

                <div class="mb-3">
                    <label class="form-label">Fecha Ingreso</label>
                    <input type="date" name="FechaIn" class="form-control" required placeholder="Fecha Ingreso" value="{{ old('FechaIn') }}">
                    <p class="text-danger fw-bold">{{$errors->first('FechaIn')}}</p>
                </div>

                <div class="mb-3">
                    <label class="form-label">Imagen</label>
                    <input type="date" name="FechaIn" class="form-control" required placeholder="Fecha Ingreso" value="{{ old('FechaIn') }}">
                    <p class="text-danger fw-bold">{{$errors->first('FechaIn')}}</p>
                </div>
    
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit">Registrar Libro</button>
                </div>

            </form>
        </div>
   </div> <!-- Div de la tarjeta -->
</div> <!-- Div del contenedor -->


@section('contenido')