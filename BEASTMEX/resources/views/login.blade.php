@extends('layouts.plantillaLogin')

@section('titulo', 'Login')

@section('name')

@section('contenido')
    <link rel="stylesheet" href="css/styles.css">
    <div class="card container mb-2 p-4">
        <img src="css/logo.png" alt="">
        {{-- <h2 class="fw-light p-2 text-center">Iniciar Sesión</h2> --}}
        <form action="#" method="post">
            <div class="mb-4">
                <label for="usuario" class="col-form-label fw-bold">Usuario:</label>
                <input type="email" class="form-control" id="usuario" required placeholder="Correo Electrónico">
            </div>
            <div class="mb-4">
                <label for="contrasena" class="col-form-label fw-bold">Contraseña:</label>
                <input type="password" class="form-control" id="contrasena" required placeholder="Contraseña">
            </div>
            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="submit" href="/almacen">Iniciar</button>
            </div>
            <div class="d-grid gap-4 p-2 text-center">
                <a href="#">¿Olvidaste tu contraseña?</a>
            </div>
        </form>
    </div>
@endsection
