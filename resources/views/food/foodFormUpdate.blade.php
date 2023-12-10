@extends('layouts.plantilla')
@section('tittle','Actualización de los datos')
@section('content')

<div class="container mt-5">
    <h1 class="mb-4">Actualización de datos</h1>
    @foreach ($resultado as $result)
    <form method="POST" action="{{ route('food.updateRecord', ['dni' => $result->dni]) }}">
        @csrf
        @method('PUT')

    
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" value="{{$result->name}}" disabled>
        </div>

        <div class="form-group">
            <label for="dni">DNI</label>
            <input type="text" class="form-control" id="dni" value="{{$result->dni}}" disabled>
        </div>

        <div class="form-group">
            <label for="comentario">Comentario</label>
            <textarea class="form-control" id="comentario" name="comment" rows="3">{{$result->comment}}</textarea>
        </div>
        @endforeach
        <div style="padding:10px">
        <button type="submit" class="btn btn-primary" >Actualizar Comentario</button>
    </div>
    </form>
</div>
@endsection