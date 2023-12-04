<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Almacén</title>
    <link rel="stylesheet" href="css/stylesAlma.css">
</head>
<body>
    <p class="move-down fs-1 fw-bold text-center text-white">Productos</p>

    <table>
        <thead>
            <tr>
                <th>No. Serie</th>
                <th>Nombre</th>
                <th>Marca</th>
                <th>Cantidad</th>
                <th>Costo</th>
                <th>Precio Venta</th>
                <th>Fecha ingreso</th>
                <th>Foto</th>
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
                </tr>
            @empty
                <tr>
                    <td colspan="8">No hay productos en el almacen.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
