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
            Registros de usuarios
        </div>
    
        
            <div class="card-body">
                <form method='POST' action='/guardarUsuarios'>
                    @csrf 
    
                    <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text" name="Nombre" class="form-control" placeholder="Nombre" value="{{ old('Nombre') }}">
                        <p class="text-danger fw-bold">{{$errors->first('Nombre')}}</p>
                    </div>
                
                    <div class="mb-3">
                        <label class="form-label">Apellido Paterno</label>
                        <input type="text" name="AP" class="form-control" placeholder="Apellido Paterno" value="{{ old('AP') }}">
                        <p class="text-danger fw-bold">{{$errors->first('AP')}}</p>
                    </div>
    
                    <div class="mb-3">
                        <label class="form-label">Apellido Materno</label>
                        <input type="text" name="AM" class="form-control" placeholder="Apellido Materni" value="{{ old('AM') }}">
                        <p class="text-danger fw-bold">{{$errors->first('AM')}}</p>
                    </div>
    
                    <div class="mb-3">
                        <label class="form-label">Correo</label>
                        <input type="email" name="CorreoUsu" class="form-control" placeholder="Correo" value="{{ old('Correo') }}">
                        <p class="text-danger fw-bold">{{$errors->first('CorreoUsu')}}</p>
                    </div>
    
                    <div class="mb-3">
                        <label class="form-label">Puesto</label>
                        <select name="puesto" class="form-select">
                            <option value="">Selecciona un puesto</option>
                            <option value="Puesto 1">Gerente</option>
                            <option value="Puesto 2">Coordinador compras</option>
                            <option value="Puesto 3">Coordinador ventas</option>
                            <option value="Puesto 4">Auxiliar</option>
                            
                        </select>
                        <p class="text-danger fw-bold">{{$errors->first('puesto')}}</p>
                    </div>
                    
    
                    <div class="mb-3">
                        <label class="form-label">Contraseña</label>
                        <input type="txt" name="Contraseña" class="form-control" placeholder="Contraseña" value="{{ old('Contraseña') }}">
                        <p class="text-danger fw-bold">{{$errors->first('Contraseña')}}</p>
                    </div>
    
                    
                    
        
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="submit">Registrar Usuario</button>
                    </div>
    
                </form>
            </div>
        </div> <!-- Div de la tarjeta -->
    </div> <!-- Div del contenedor -->


@endsection