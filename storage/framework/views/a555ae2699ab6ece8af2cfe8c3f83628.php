
<?php $__env->startSection('tittle','Menú'); ?>
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
        width: 100%; /* Ajusta el tamaño de las imágenes según sea necesario */
        height: auto;
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
            <a href="<?php echo e(route('food.breakfast')); ?>" class="btn-visualizar">Visualizar</a>
        </div>
        </td>
        <td>
            <div class="espaciado">
            <img src="https://tse1.mm.bing.net/th?id=OIP.f5Q-E2Kn9p_gUvgw8-1sdwHaE1&pid=Api&P=0&h=180" alt="">
        </div>
        <div class="espaciado">  
        <a href="<?php echo e(route('food.main')); ?>" class="btn-visualizar">Visualizar</a>
    </div>      
    </td>
        <td>
            <div class="espaciado">
            <img src="https://tse2.mm.bing.net/th?id=OIP.NMKWqOBAkZ_7x1YtVrE2WgHaE7&pid=Api&P=0&h=180" alt="">
        </div>
        <div class="espaciado">
            <a href="<?php echo e(route('food.drink')); ?>" class="btn-visualizar">Visualizar</a>
        </div>
        </td>
    </tr>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\comida-daniel\resources\views/food/list.blade.php ENDPATH**/ ?>