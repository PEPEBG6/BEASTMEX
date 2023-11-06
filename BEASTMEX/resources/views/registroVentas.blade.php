@extends('layouts.plantillaLogin')

@section('titulo','Registros')


@section('name')



<div class="container col-md-4 p-4">


   <div class="card">
     <div class="card-header fs-4  fw-medium text-center">
         Registros de Ventas
     </div>
 
   
        <div class="card-body">
            <form method='POST' action='/guardarProducto'>
                @csrf 
            
                <div class="mb-3">
                    <label class="form-label">Fecha de Venta</label>
                    <input type="date" name="Fecha" class="form-control" required placeholder="#" value="{{ old('Fecha') }}">
                    <p class="text-danger fw-bold">{{$errors->first('Fecha')}}</p>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nombre del cliente</label>
                    <input type="text" name="Cliente" class="form-control" required placeholder="Cliente" value="{{ old('Cliente') }}">
                    <p class="text-danger fw-bold">{{$errors->first('Cliente')}}</p>
                </div>

                <div class="mb-3">
                    <label class="form-label">Producto</label>
                    <input type="number" name="Cantidad" class="form-control" required placeholder="Nombre del producto" value="{{ old('Cantidad') }}">
                    <p class="text-danger fw-bold">{{$errors->first('CantidadPro')}}</p>
                </div>

                <div class="mb-3">
                    <label class="form-label">Marca</label>
                    <input type="text" name="Marca" class="form-control" required placeholder="Nombre de la marca" value="{{ old('Marca') }}">
                    <p class="text-danger fw-bold">{{$errors->first('Marca')}}</p>
                </div>

                <div class="mb-3">
                    <label class="form-label">Cantidad</label>
                    <input type="number" name="Cantidad" class="form-control" required placeholder="Numero de piezas" value="{{ old('Cantidad') }}">
                    <p class="text-danger fw-bold">{{$errors->first('Cantidad')}}</p>
                </div>

                <div class="mb-3">
                    <label class="form-label">Precio</label>
                    <input type="number" name="Precio" class="form-control" required placeholder="Precio" value="{{ old('Precio') }}">
                    <p class="text-danger fw-bold">{{$errors->first('Precio')}}</p>
                </div>

                <div class="mb-3">
                    <label class="form-label">Total </label>
                    <input type="number" name="total" class="form-control" required placeholder="Total compra" value="{{ old('Total') }}">
                    <p class="text-danger fw-bold">{{$errors->first('Total')}}</p>
                </div>
    
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit">Registrar Venta</button>
                </div>

            </form>
        </div>
   </div> <!-- Div de la tarjeta -->
</div> <!-- Div del contenedor -->


@section('contenido')