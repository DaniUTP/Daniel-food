
<?php $__env->startSection('tittle', 'Lista de clientes'); ?>
<?php $__env->startSection('content'); ?>
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
        <?php $__currentLoopData = $resultado; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($result->dni); ?></td>
                <td><?php echo e($result->name); ?></td>
                <td><?php echo e($result->comment); ?></td>
                <td class="table-links">
                    <div class="fila">
                        <div>
                    <a href="<?php echo e(route('food.foodFormUpdate', ['dni' => $result->dni])); ?>">Modificar</a>
                </div>
                <div>   
                <form action="<?php echo e(route('food.deleteRecord',['dni'=> $result->dni])); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                    <input type="submit" value="Eliminar">
                    </form>
                </div> 
                <div>
                    <a href="<?php echo e(route('food.showReport',['dni'=>$result->dni])); ?>">Ver</a>
                </div>
                </div>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\comida-daniel\resources\views/food/listClient.blade.php ENDPATH**/ ?>