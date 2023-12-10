
<?php $__env->startSection('tittle','Actualización de los datos'); ?>
<?php $__env->startSection('content'); ?>

<div class="container mt-5">
    <h1 class="mb-4">Actualización de datos</h1>
    <?php $__currentLoopData = $resultado; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <form method="POST" action="<?php echo e(route('food.updateRecord', ['dni' => $result->dni])); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

    
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" value="<?php echo e($result->name); ?>" disabled>
        </div>

        <div class="form-group">
            <label for="dni">DNI</label>
            <input type="text" class="form-control" id="dni" value="<?php echo e($result->dni); ?>" disabled>
        </div>

        <div class="form-group">
            <label for="comentario">Comentario</label>
            <textarea class="form-control" id="comentario" name="comment" rows="3"><?php echo e($result->comment); ?></textarea>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div style="padding:10px">
        <button type="submit" class="btn btn-primary" >Actualizar Comentario</button>
    </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\comida-daniel\resources\views/food/foodFormUpdate.blade.php ENDPATH**/ ?>