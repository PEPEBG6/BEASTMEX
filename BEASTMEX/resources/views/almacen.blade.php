@extends('layouts.plantillaHome')

@section('titulo', 'Almacen')

@section('name')

@section('contenido')
  
  <link rel="stylesheet" href="css/stylesAlma.css">

   <p class="move-down fs-1 fw-bold text-center text-white">Productos</p>
   
   <div class="card card-shadow container">
        <div class="col-md-11 p-4">

            <form class="d-flex" role="search" method="GET" action="{{ route('almacen.index') }}">
                <input class="form-control me-2 w-25" type="text" name="search" placeholder="Buscar por nombre o número de serie" value="{{ request('search') }}" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>

            <div class="button-container">
                <a type="button" class="btn btn-secondary" href="{{ route('almacen.pdf') }}" target="_blank">Reporte PDF</a>
                <a type="button" class="btn btn-primary" href="/registrarAlmacen">Registrar</a>
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
                    </tr>
                </thead>
                <tbody>
                    @forelse ($consR as $item)
                        <tr>
                            <td>{{ $item->almNoSerie }}</td>
                            <td>{{ $item->almNombre }}</td>
                            <td>{{ $item->almMarca }}</td>
                            <td>{{ $item->almCantidad }}</td>
                            <td>{{ $item->almCostoC }}</td>
                            <td>{{ $item->almPrecioVen }}</td>
                            <td>{{ $item->almFechaIn }}</td>
                            <td>
                                @if($item->almImagen)
                                    <img src="{{ asset('imagenes/' . $item->almImagen) }}" alt="Imagen del Producto" style="max-width: 100px; max-height: 100px;">
                                @endif
                            </td>
                            <td></td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8">No hay productos que coincidan con la búsqueda.</td>
                        </tr>
                    @endforelse
                    
                </tbody>
            </table>

        </div>
    </div>
@endsection
