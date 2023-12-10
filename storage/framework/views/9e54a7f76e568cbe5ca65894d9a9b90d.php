
<?php $__env->startSection('tittle', 'Reporte'); ?>
<?php $__env->startSection('content'); ?>
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

<?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="report">
        <div class="label">Nombre del cliente:</div>
        <div><?php echo e($data->name); ?></div>

        <div class="label">DNI del cliente:</div>
        <div><?php echo e($data->dni); ?></div>

        <div class="label">Registro creado el:</div>
        <div><?php echo e($data->created_at); ?></div>

        <div class="label">Actualizado el:</div>
        <div><?php echo e($data->updated_at); ?></div>

        <div class="label">Comentario realizado:</div>
        <div><?php echo e($data->comment); ?></div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<a href="<?php echo e(route('food.listClient')); ?>" class="back-button">Regresar</a>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\comida-daniel\resources\views/food/foodReport.blade.php ENDPATH**/ ?>