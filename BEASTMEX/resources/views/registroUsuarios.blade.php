@extends('layouts.plantillaReg')

@section('titulo','Registros')


@section('name')

<div class="container col-md-4 p-4">


    <div class="card">
      <div class="card-header fs-4  fw-medium text-center">
          Registros de usuarios
      </div>
  
    
         <div class="card-body">
             <form method='POST' action='/guardarUsuario'>
                 @csrf 
 
                 <div class="mb-3">
                     <label class="form-label">Nombre</label>
                     <input type="text" name="Nombre" class="form-control" required placeholder="Nombre" value="{{ old('Nombre') }}">
                     <p class="text-danger fw-bold">{{$errors->first('Nombre')}}</p>
                 </div>
             
                 <div class="mb-3">
                     <label class="form-label">Apellido Paterno</label>
                     <input type="text" name="AP" class="form-control" required placeholder="Apellido Paterno" value="{{ old('AP') }}">
                     <p class="text-danger fw-bold">{{$errors->first('AP')}}</p>
                 </div>
 
                 <div class="mb-3">
                     <label class="form-label">Apellido Materno</label>
                     <input type="text" name="AM" class="form-control" required placeholder="Apellido Materni" value="{{ old('AM') }}">
                     <p class="text-danger fw-bold">{{$errors->first('AM')}}</p>
                 </div>
 
                 <div class="mb-3">
                     <label class="form-label">Correo</label>
                     <input type="email" name="Correo" class="form-control" required placeholder="Correo" value="{{ old('Correo') }}">
                     <p class="text-danger fw-bold">{{$errors->first('Correo')}}</p>
                 </div>
 
                 <div class="mb-3">
                    <label class="form-label">Puesto</label>
                    <select name="puesto" class="form-select" required>
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
                     <input type="txt" name="Contraseña" class="form-control" required placeholder="Contraseña" value="{{ old('Contraseña') }}">
                     <p class="text-danger fw-bold">{{$errors->first('Contraseña')}}</p>
                 </div>
 
                 
                  
     
                 <div class="d-grid gap-2">
                     <button class="btn btn-primary" type="submit">Registrar Usuario</button>
                 </div>
 
             </form>
         </div>
    </div> <!-- Div de la tarjeta -->
 </div> <!-- Div del contenedor -->


@section('contenido')