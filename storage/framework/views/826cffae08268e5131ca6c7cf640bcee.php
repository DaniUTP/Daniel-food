
<?php $__env->startSection('tittle','Platos principales'); ?>
<?php $__env->startSection('content'); ?>
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
        width: 240px; /* Ajusta el tamaño de las imágenes según sea necesario */
        height: 150px;
        border-radius: 5px; /* Añade bordes redondeados a las imágenes */
    }

    .btn-visualizar {
        display: inline-block;
        padding: 10px 15px;
        text-decoration: none;
        background-color: #3498db; /* Color de fondo del botón */
        color: #fff; /* Color del texto del botón */
        border-radius: 5px; /* Bordes redondeados del botón */
        transition: background-color 0.3s; /* Efecto de transición al pasar el cursor */
    }

    .btn-visualizar:hover {
        background-color: #2980b9; /* Cambia el color de fondo al pasar el cursor */
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







<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\comida-daniel\resources\views/food/main.blade.php ENDPATH**/ ?>