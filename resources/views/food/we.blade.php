@extends('layouts.plantilla')
@section('tittle','Nosotros')
@section('content')
<style>
.fila {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 20px; 
    text-align: center; 
    padding: 20px; 
}
h2{
    text-align: center;
}
#imagen img {
    width: 400px; 
    height: auto; 
    border-radius: 10px; 
}

#contenido {
    max-width: 600px; 
    text-align: justify;
}
</style>
<div class="fila">
    <div id="imagen">
        <img src="https://img.freepik.com/foto-gratis/senora-mayor-cocinando-casa_102671-4372.jpg?size=626&ext=jpg" alt="">
    </div>
    <div id="contenido">
        <h2>Nosotros</h2>
        <p>¡Bienvenido a DanielFoods!</p>
        <p>Somos apasionados por brindarte experiencias culinarias excepcionales y sabrosas. En DanielFoods, nos esforzamos por ofrecer no solo deliciosos platillos, sino también una conexión genuina con la comida. Creemos que cada bocado cuenta una historia y queremos compartir contigo los sabores que hacen que cada día sea especial.</p>
        <p>En DanielFoods, nuestra misión es llevar la excelencia a tu mesa. Seleccionamos cuidadosamente los ingredientes más frescos y de la más alta calidad para crear platillos que deleitarán tu paladar. Nos inspira la pasión por la cocina auténtica y la satisfacción de nuestros clientes.</p>
        <p>Nos comprometemos a ofrecerte no solo comida, sino una experiencia culinaria inolvidable. Desde platos tradicionales hasta creaciones innovadoras, cada elección en nuestro menú refleja nuestro compromiso con la calidad y la autenticidad.</p>
        <p>DanielFoods comenzó con una visión simple: compartir la alegría de la buena comida. A lo largo de los años, hemos crecido, pero nuestra dedicación a la excelencia y al servicio excepcional sigue siendo la misma. Cada día nos esforzamos por superar tus expectativas y hacer que cada comida sea especial.</p>
        <p>¡Acompáñanos en este viaje culinario y descubre por qué en DanielFoods no solo vendemos comida, creamos experiencias!</p>
    </div>
</div>
@endsection
