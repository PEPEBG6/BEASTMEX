@extends('layouts.plantilla')

@section('titulo','Compras')


@section('name')



<div class="container col-md-4 p-4">


   <div class="card">
     <div class="card-header fs-4  fw-medium text-center">
         Registros de Compras
     </div>
 
   
        <div class="card-body">
            <form method='POST' action='/guardarCompras'>
                @csrf 

                <div class="mb-3">
                    <label class="form-label">Datos de la empresa</label>
                    <input type="text" name="Empresa" class="form-control"  placeholder="Datos de la empresa" value="{{ old('Empresa') }}">
                    <p class="text-danger fw-bold">{{$errors->first('Empresa')}}</p>
                </div>
            
                <div class="mb-3">
                    <label class="form-label">Productos requeridos</label>
                    <input type="number" name="Productos" class="form-control"  placeholder="Numero de productos" value="{{ old('Productos') }}">
                    <p class="text-danger fw-bold">{{$errors->first('Productos')}}</p>
                </div>

                <div class="mb-3">
                    <label class="form-label">Proveedor</label>
                    <input type="text" name="Proveedor" class="form-control" placeholder="Nombre Proveedor" value="{{ old('Proveedor') }}">
                    <p class="text-danger fw-bold">{{$errors->first('Proveedor')}}</p>
                </div>

                <div class="mb-3">
                    <label class="form-label">Enviar a correo</label>
                    <input type="email" name="CorreoCom" class="form-control" placeholder="Correo electronico" value="{{ old('Correo') }}">
                    <p class="text-danger fw-bold">{{$errors->first('CorreoCom')}}</p>
                </div>


    
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit">Registrar Compra</button>
                </div>

            </form>
        </div>
   </div> <!-- Div de la tarjeta -->
</div> <!-- Div del contenedor -->


@section('contenido')