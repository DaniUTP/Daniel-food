
<?php $__env->startSection('tittle','Inicio de sesión'); ?>
<?php $__env->startSection('content'); ?>
<style>
    .formulario {
        max-width: 400px;
        margin: 50px auto;
    }

    .formulario form {
        padding: 20px;
        background-color: #f8f9fa;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .formulario label {
        font-weight: bold;
    }

    .formulario input,
    .formulario button {
        margin-top: 10px;
    }

    .formulario button {
        padding: 10px 15px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    .formulario button:hover {
        background-color: #0056b3;
    }
</style>

<div class="formulario">
    <form action="<?php echo e(route('food.found')); ?>" method="GET">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="email" class="form-label">Correo Electrónico:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="mb-3">
            <button type="submit">Iniciar Sesión</button>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\comida-daniel\resources\views/food/sesion.blade.php ENDPATH**/ ?>