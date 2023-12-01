@extends('layouts.plantillaLogin')

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
            Registros de Ventas
        </div>
    
    
            <div class="card-body">
                <form method='POST' action='/guardarVentas'>
                    @csrf 

                    <div class="mb-3">
                        <label class="form-label">Producto</label>
                        <input type="text" name="Producto" class="form-control" placeholder="Nombre del producto" value="{{ old('txtNombre') }}">
                        <p class="text-danger fw-bold">{{$errors->first('Producto')}}</p>
                    </div>
                
                    <div class="mb-3">
                        <label class="form-label">Fecha</label>
                        <input type="text" name="Fecha" class="form-control" placeholder="#" value="{{ old('Fecha') }}">
                        <p class="text-danger fw-bold">{{$errors->first('Fecha')}}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nombre del cliente</label>
                        <input type="text" name="Cliente" class="form-control" placeholder="Marca" value="{{ old('Cliente') }}">
                        <p class="text-danger fw-bold">{{$errors->first('Cliente')}}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Producto</label>
                        <input type="number" name="CantidadPro" class="form-control" placeholder="nombre del producto" value="{{ old('Cantidad') }}">
                        <p class="text-danger fw-bold">{{$errors->first('Cantidad')}}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Marca</label>
                        <input type="text" name="Marca" class="form-control" placeholder="Costo Compra" value="{{ old('Marca') }}">
                        <p class="text-danger fw-bold">{{$errors->first('Marca')}}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Cantidad</label>
                        <input type="number" name="Cantidad" class="form-control" placeholder="Precio Venta" value="{{ old('Cantidad') }}">
                        <p class="text-danger fw-bold">{{$errors->first('Cantidad')}}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Precio</label>
                        <input type="number" name="Precio" class="form-control" placeholder="Fecha Ingreso" value="{{ old('Precio') }}">
                        <p class="text-danger fw-bold">{{$errors->first('Precio')}}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Total </label>
                        <input type="number" name="total" class="form-control" placeholder="Total compra" value="{{ old('Total') }}">
                        <p class="text-danger fw-bold">{{$errors->first('total')}}</p>
                    </div>
        
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="submit">Registrar Venta</button>
                    </div>

                </form>
            </div>
    </div> <!-- Div de la tarjeta -->
    </div> <!-- Div del contenedor -->


@endsection