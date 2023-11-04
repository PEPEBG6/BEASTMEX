@extends('layouts.plantillaHome')

@section('titulo','Almacen')

@section('name')

@section('contenido')
  
    <link rel="stylesheet" href="css/stylesGer.css"> 
   
  <p class="move-down fs-1 fw-bold">Gerencia</p>

  <div class="container col-md-4 p-4">


    <div class="d-grid gap-5">
        <a class="btn btn-primary" type="button" href="/usuarios">Usuarios</a>
        <a class="btn btn-primary" type="button" href="/">Compras</a>
        <a class="btn btn-primary" type="button" href="/">Ventas</a>
        <a class="btn btn-primary" type="button" href="/">Ganancias</a>
    </div>

         

  </div>
    
@endsection
