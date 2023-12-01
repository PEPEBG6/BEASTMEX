@extends('layouts.plantilla')

@section('titulo','Registros')


@section('name')

@section('contenido')

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <div class="container col-md-4 p-4">



        @if(session()->has('confirmacion'))

            <script>

                Swal.fire({
                title: "Good job!",
                text: '{{session('confirmacion')}}',
                icon: "success"
                });



            </script>

        @endif


        <div class="card">
            <div class="card-header fs-4  fw-medium text-center">
                Registros de productos
            </div>
    
        
            <div class="card-body">
                <form method='POST' action='/guardarAlmacen'>
                    @csrf 
    
                    <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text" name="almNombre" class="form-control"  placeholder="Nombre del producto" value="{{ old('almNombre') }}">
                        <p class="text-danger fw-bold">{{$errors->first('almNombre')}}</p>
                    </div>
                
                    <div class="mb-3">
                        <label class="form-label">No. Serie</label>
                        <input type="text" name="almNoSerie" class="form-control" placeholder="Numero de Serie" value="{{ old('almNoSerie') }}">
                        <p class="text-danger fw-bold">{{$errors->first('almNoSerie')}}</p>
                    </div>
    
                    <div class="mb-3">
                        <label class="form-label">Marca</label>
                        <input type="text" name="almMarca" class="form-control" placeholder="Marca" value="{{ old('almMarca') }}">
                        <p class="text-danger fw-bold">{{$errors->first('almMarca')}}</p>
                    </div>
    
                    <div class="mb-3">
                        <label class="form-label">Cantidad</label>
                        <input type="number" name="almCantidad" class="form-control" placeholder="Cantidad" value="{{ old('almCantidad') }}">
                        <p class="text-danger fw-bold">{{$errors->first('almCantidad')}}</p>
                    </div>
    
                    <div class="mb-3">
                        <label class="form-label">Costo compra</label>
                        <input type="number" name="almCostoC" class="form-control" placeholder="Costo Compra" value="{{ old('almCostoCom') }}">
                        <p class="text-danger fw-bold">{{$errors->first('almCostoC')}}</p>
                    </div>
    
                    <div class="mb-3">
                        <label class="form-label">Precio de venta</label>
                        <input type="number" name="almPrecioVen" class="form-control" placeholder="Precio Venta" value="{{ old('almPrecioVen') }}">
                        <p class="text-danger fw-bold">{{$errors->first('almPrecioVen')}}</p>
                    </div>
    
                    <div class="mb-3">
                        <label class="form-label">Fecha Ingreso</label>
                        <input type="text" name="almFechaIn" class="form-control" placeholder="Fecha Ingreso" value="{{ old('almFechaIn') }}">
                        <p class="text-danger fw-bold">{{$errors->first('almFechaIn')}}</p>
                    </div>
    
                    <div class="mb-3">
                        <label class="form-label">Imagen</label>
                        <input type="file" name="almImagen" class="form-control"   value="{{ old('almImagen') }}">
                        <p class="text-danger fw-bold">{{$errors->first('almImagen')}}</p>
                    </div>
        
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="submit">Registrar Producto</button>
                    </div>
    
                </form>
            </div>
        </div> <!-- Div de la tarjeta -->
    </div> <!-- Div del contenedor -->


@endsection