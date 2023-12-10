@extends('layouts.plantilla')
@section('tittle', 'Lista de clientes')
@section('content')
<style>
 
    label {
        display: block;
        font-size: 18px;
        margin-bottom: 10px;
        padding: 10px;
    }

    .user-label {
        color: #333;
        background-color: #f2f2f2;
        padding: 10px;
        border-radius: 5px;
    }

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

    .table-links a {
        display: inline-block;
        background-color: #4CAF50;
        color: white;
        padding: 5px 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-right: 5px;
        text-decoration: none;
    }

    .table-links a:hover {
        background-color: #45a049;
    }
    .table-links form input[type="submit"] {
        background-color: #d9534f; 
        color: white;
        padding: 5px 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-right: 5px;
    }

    .table-links form input[type="submit"]:hover {
        background-color: #c9302c; 
    }
    .fila{
        display:flex;
        justify-content: center; 
        align-items: center;
    }
</style>
<table>
    <thead>
        <tr>
            <th>DNI</th>
            <th>Nombre</th>
            <th>Comentario</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($resultado as $result)
            <tr>
                <td>{{ $result->dni }}</td>
                <td>{{ $result->name }}</td>
                <td>{{ $result->comment }}</td>
                <td class="table-links">
                    <div class="fila">
                        <div>
                    <a href="{{ route('food.foodFormUpdate', ['dni' => $result->dni]) }}">Modificar</a>
                </div>
                <div>   
                <form action="{{route('food.deleteRecord',['dni'=> $result->dni])}}" method="POST">
                        @csrf
                        @method('delete')
                    <input type="submit" value="Eliminar">
                    </form>
                </div> 
                <div>
                    <a href="{{route('food.showReport',['dni'=>$result->dni])}}">Ver</a>
                </div>
                </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
