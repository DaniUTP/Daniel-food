@extends('layouts.plantilla')
@section('tittle','Principal')
@section('content')
<style>
#fondo {
    background-image: url(https://i.pinimg.com/originals/3c/14/0c/3c140c2d2b1a7b38fa298c0052cac705.jpg);
    background-size: cover; 
    background-position: center; 
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 87.9vh; 
    width: 100%;
    margin: 0; 
    color: white;
    text-align: center; 
}

#fondo h1 {
    margin-bottom: 10px; 
}


</style>

<div id="fondo">
<h1>Bienvenido a la página de venta de comidas</h1>
<h2>Disfrutaras de las mejores comidas del mundo</h2>
</div>  
@endsection
