@extends('layouts.plantilla')
@section('tittle','Bebida')
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
        <th>Bebida</th>
        <th>Descripción</th>
        <th>Imagen</th>
        <th>Visualizar</th>
    </tr>
    <tr>
        <td>Margarita de fresa</td>
        <td>Refrescante margarita preparada con deliciosas fresas frescas.</td>
        <td><img src="https://tse3.mm.bing.net/th?id=OIP.NWtGO9_MWdoLghiL46e-BQHaE7&pid=Api&P=0&h=180" alt="Margarita de Fresa"></td>
        <td><a href="#" class="btn-visualizar">Visualizar</a></td>
    </tr>
    <tr>
        <td>Café espresso</td>
        <td>Intenso café espresso con crema suave y aroma irresistible.</td>
        <td><img src="https://tse4.mm.bing.net/th?id=OIP.qAKjNHNopRVcO6M4i8d84QHaEJ&pid=Api&P=0&h=180" alt="Café Espresso"></td>
        <td><a href="#" class="btn-visualizar">Visualizar</a></td>
    </tr>
    <tr>
        <td>Smoothie de frutas tropicales</td>
        <td>Mezcla refrescante de frutas tropicales para energizar tu día.</td>
        <td><img src="https://entrecampeonas.com/wp-content/uploads/2019/03/shutterstock_539687179-1.jpg" alt="Smoothie de Frutas Tropicales"></td>
        <td><a href="#" class="btn-visualizar">Visualizar</a></td>
    </tr>
    <tr>
        <td>Jugo de naranja natural</td>
        <td>Jugo de naranja recién exprimido para una explosión de sabor.</td>
        <td><img src="https://www.lavanguardia.com/files/og_thumbnail/uploads/2020/01/14/5e9978a10b3d7.jpeg" alt="Jugo de Naranja Natural"></td>
        <td><a href="#" class="btn-visualizar">Visualizar</a></td>
    </tr>

</table>







@endsection