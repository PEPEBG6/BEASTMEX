@extends('layouts.plantillaHome')

@section('titulo','Gerenica')

@section('name')

@section('contenido')
  
    <link rel="stylesheet" href="css/stylesAlma.css"> 
   
  <p class="move-down fs-1 fw-bold text-center text-white">Gerencia</p>

  <div class="container col-md-4 p-4">


    <div class="d-grid gap-5">
        <a class="btn btn-primary" type="button" href="/consultaUsu">Usuarios</a>
        <a class="btn btn-primary" type="button" href="/consultaCom">Compras</a>
        <a class="btn btn-primary" type="button" href="/consultaVen">Ventas</a>
        <a class="btn btn-primary" type="button" href="/">Ganancias</a>
    </div>

         

  </div>
    
@endsection
