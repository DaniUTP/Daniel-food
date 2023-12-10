@extends('layouts.plantilla')
@section('tittle','Desayuno')

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
        <th>Plato de Desayuno</th>
        <th>Descripción</th>
        <th>Imagen</th>
        <th>Visualizar</th>
    </tr>
    <tr>
        <td>Omelette de champiñones</td>
        <td>Delicioso omelette relleno de champiñones frescos.</td>
        <td><img src="https://tse1.mm.bing.net/th?id=OIP.9x4pV4yg1sl82hx5eOy32QHaEc&pid=Api&P=0&h=180" alt="Omelette de Champiñones"></td>
        <td><a href="#" class="btn-visualizar">Visualizar</a></td>
    </tr>
    <tr>
        <td>Hotcakes con jarabe de arce</td>
        <td>Esponjosos hotcakes servidos con abundante jarabe de arce.</td>
        <td><img src="https://tse4.mm.bing.net/th?id=OIP.sQvMAvwAxxeRZUkRJKE2vAHaEK&pid=Api&P=0&h=180" alt="Hotcakes con Jarabe de Arce"></td>
        <td><a href="#" class="btn-visualizar">Visualizar</a></td>
    </tr>
    <tr>
        <td>Tostadas francesas</td>
        <td>Deliciosas tostadas francesas cubiertas con canela y azúcar en polvo.</td>
        <td><img src="https://tse2.mm.bing.net/th?id=OIP.gbr2j_kFQoYBKabRRGJ9cAHaFj&pid=Api&P=0&h=180" alt="Tostadas Francesas"></td>
        <td><a href="#" class="btn-visualizar">Visualizar</a></td>
    </tr>
    <tr>
        <td>Bowl de avena con frutas</td>
        <td>Saludable bowl de avena con una mezcla colorida de frutas frescas.</td>
        <td><img src="https://tse2.mm.bing.net/th?id=OIP.wvkPGvqD2-CogM4Bc6PfTAHaE8&pid=Api&P=0&h=180" alt="Bowl de Avena con Frutas"></td>
        <td><a href="#" class="btn-visualizar">Visualizar</a></td>
    </tr>
    <tr>
        <td>Yogurt con granola y frutas</td>
        <td>Yogurt cremoso acompañado de granola crujiente y una variedad de frutas.</td>
        <td><img src="https://tse1.mm.bing.net/th?id=OIP.z3WYba0MVM-IroHcPV4JeAHaE8&pid=Api&P=0&h=180" alt="Yogur con Granola y Frutas"></td>
        <td><a href="#" class="btn-visualizar">Visualizar</a></td>
    </tr>
    <tr>
        <td>Huevos revueltos con palta</td>
        <td>Huevos revueltos suaves acompañadas de palta fresca.</td>
        <td><img src="https://adelgazarencasa.co/wp-content/uploads/2019/01/Huevos-revueltos-con-aguacate-e1603299822853.jpg" alt="Huevos Revueltos con Aguacate"></td>
        <td><a href="#" class="btn-visualizar">Visualizar</a></td>
    </tr>
</table>
@endsection
