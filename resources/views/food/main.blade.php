@extends('layouts.plantilla')
@section('tittle','Platos principales')
@section('content')
<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 15px;
        text-align: center;
    }

    th {
        background-color: #f2f2f2;
    }

    img {
        width: 240px; 
        height: 150px;
        border-radius: 5px; 
    }

    .btn-visualizar {
        display: inline-block;
        padding: 10px 15px;
        text-decoration: none;
        background-color: #3498db; 
        color: #fff; 
        border-radius: 5px;
        transition: background-color 0.3s; 
    }

    .btn-visualizar:hover {
        background-color: #2980b9; 
    }
</style>

<table>
    <tr>
        <th>Plato Principal</th>
        <th>Descripción</th>
        <th>Imagen</th>
        <th>Visualizar</th>
    </tr>
    <tr>
        <td>Lasaña de carne</td>
        <td>Deliciosa lasaña con capas de carne, queso y salsa de tomate.</td>
        <td><img src="https://cadenaser00.epimg.net/ser/imagenes/2020/01/10/radio_palencia/1578649822_033933_1578649994_noticia_normal.jpg" alt="Lasaña de Carne"></td>
        <td><a href="#" class="btn-visualizar">Visualizar</a></td>
    </tr>
    <tr>
        <td>Parrillada mixta</td>
        <td>Variedad de carnes asadas a la parrilla acompañadas de vegetales frescos.</td>
        <td><img src="https://tse2.mm.bing.net/th?id=OIP.SrarniGOkcWbtuV5r0wEZAHaFG&pid=Api&P=0&h=180" alt="Parrillada Mixta"></td>
        <td><a href="#" class="btn-visualizar">Visualizar</a></td>
    </tr>
    <tr>
        <td>Sushi variado</td>
        <td>Selección de sushi fresco con una mezcla de sabores y texturas.</td>
        <td><img src="https://tse2.mm.bing.net/th?id=OIP.Fsl3IHkSMF2Uv7tMo91qXgHaFj&pid=Api&P=0&h=180" alt="Sushi Variado"></td>
        <td><a href="#" class="btn-visualizar">Visualizar</a></td>
    </tr>
    <tr>
        <td>Pasta alfredo con pollo</td>
        <td>Pasta alfredo cremosa con trozos de pollo tierno.</td>
        <td><img src="https://melaoypapelon.com/wp-content/uploads/2018/04/PASTA-ALFREDO-DE-POLLO-CON-SALSA-CUATRO-QUESOS.jpg" alt="Pasta Alfredo con Pollo"></td>
        <td><a href="#" class="btn-visualizar">Visualizar</a></td>
    </tr>
  
</table>







@endsection