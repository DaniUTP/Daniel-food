@extends('layouts.plantilla')
@section('tittle','Menú')
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
        width: 100%; 
        height: auto;
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
    .espaciado{
padding:5px;

    }
</style>
<table>
    <tr>
        <th>Desayuno</th>
        <th>Platos principales</th>
        <th>Bebidas</th>
    </tr>
    <tr>
        <td>
            <div class="espaciado">
            <img src="https://tse3.mm.bing.net/th?id=OIP.TZSFN-0uKmSvOoOPrsVrwAHaEV&pid=Api&P=0&h=180" alt="">
        </div>
        <div class="espaciado">
            <a href="{{route('food.breakfast')}}" class="btn-visualizar">Visualizar</a>
        </div>
        </td>
        <td>
            <div class="espaciado">
            <img src="https://tse1.mm.bing.net/th?id=OIP.f5Q-E2Kn9p_gUvgw8-1sdwHaE1&pid=Api&P=0&h=180" alt="">
        </div>
        <div class="espaciado">  
        <a href="{{route('food.main')}}" class="btn-visualizar">Visualizar</a>
    </div>      
    </td>
        <td>
            <div class="espaciado">
            <img src="https://tse2.mm.bing.net/th?id=OIP.NMKWqOBAkZ_7x1YtVrE2WgHaE7&pid=Api&P=0&h=180" alt="">
        </div>
        <div class="espaciado">
            <a href="{{route('food.drink')}}" class="btn-visualizar">Visualizar</a>
        </div>
        </td>
    </tr>
</table>
@endsection
