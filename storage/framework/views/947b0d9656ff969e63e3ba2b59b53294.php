<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('tittle'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    a{
        text-decoration: none;
    }
    nav {
    background-color: #333; 
    padding: 10px; 
}

ul {
    list-style-type: none; 
    margin: 0;
    padding: 0;
    overflow: hidden;
}

li {
    float: left; 
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px; 
}

li a:hover {
    background-color: #555; 
}

</style>
<body>
    <nav>
     <ul>
    <li><a href="<?php echo e(route('food.principal')); ?>">Principal</a></li>
    <li><a href="<?php echo e(route('food.we')); ?>">Nosotros</a></li>    
    <li><a href="<?php echo e(route('food.list')); ?>">Menú</a></li>  
    <li><a href="<?php echo e(route('food.comment')); ?>">Comentarios</a></li>  
    <li><a href="<?php echo e(route('food.sesion')); ?>">Inicio de sesión</a></li>
    </ul>   
    </nav>
    <?php echo $__env->yieldContent('content'); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\comida-daniel\resources\views/layouts/plantilla.blade.php ENDPATH**/ ?>