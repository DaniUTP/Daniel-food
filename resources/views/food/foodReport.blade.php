@extends('layouts.plantilla')
@section('tittle', 'Reporte')
@section('content')
<style>


    .report {
        border: 1px solid #ccc;
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 10px;
        width: 100%; 
        box-sizing: border-box; 
        text-align: left;
    }

    .label {
        font-weight: bold;
        margin-bottom: 5px;
    }

    .back-button {
        margin-top: 20px;
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        font-weight: bold;
    }

    .back-button:hover {
        background-color: #45a049;
    }
</style>

@foreach ($result as $data)
    <div class="report">
        <div class="label">Nombre del cliente:</div>
        <div>{{ $data->name }}</div>

        <div class="label">DNI del cliente:</div>
        <div>{{ $data->dni }}</div>

        <div class="label">Registro creado el:</div>
        <div>{{ $data->created_at }}</div>

        <div class="label">Actualizado el:</div>
        <div>{{ $data->updated_at }}</div>

        <div class="label">Comentario realizado:</div>
        <div>{{ $data->comment }}</div>
    </div>
@endforeach

<a href="{{route('food.listClient')}}" class="back-button">Regresar</a>

@endsection
