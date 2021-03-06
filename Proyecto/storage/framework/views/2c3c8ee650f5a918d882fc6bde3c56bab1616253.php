<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CroNomía</title>
    <link rel="stylesheet" href="../../css/estilos.css">
</head>
<body>
    <header class="encabezado">
        <img src="../../img/money-stack 1.png" alt="logo">
        <h1>CroNomía</h1>
        <h2>La Economía Basada en Cromos</h2>
    </header>
    <nav class="menuPrincipalIniciando">
        <div class="menuPrincipal1">
            <a href="<?php echo e(url('/')); ?>" class="menu1">
                <img src="../../img/casa 1.png" alt="menu Principal welcome">
                Inicio
            </a>
            <a href="<?php echo e(route('login')); ?>" class="menu1">
                <img src="../../img/controlador-de-gamepad 1.png" alt="menu juego">
                Juego
            </a>
            <a href="<?php echo e(route('login')); ?>" class="menu1">
                <img src="../../img/album-de-fotos (1) 1.png" alt="menu album">
                Album
            </a>
            <a href="<?php echo e(route('login')); ?>" class="menu1">
                <img src="../../img/intercambiar 1.png" alt="menu intercambio">
                Intercambio
            </a>
        </div>
        <div class="menuPrincipal2">
            <a class="menuPrincipal2_1" href="<?php echo e(route('login')); ?>">Login </a>
            <a class="menuPrincipal2_2" href="<?php echo e(route('register')); ?>">Register</a>
        </div>
    </nav>
    <div>
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <footer class="piePagina">
        <p class="informacion">
            Copyright © 2020, All Rigthts Reserved
        </p>
        <ul class="redesSociales">
            <li>
                <img src="../../img/facebook-brands 1.png" alt="facebook">
            </li>
            <li>
                <img src="../../img/Twitter 1.png" alt="twitter">
            </li>
            <li>
                <img src="../../img/instagram 1.png" alt="instagram">
            </li>
        </ul>
        <div class="utpl">
            <img src="../../img/ba.png" alt="logo UTPL">
        </div>
    </footer>
</body>
</html><?php /**PATH C:\xampp\htdocs\aplicaciones\proyectoIntegrador\laravel\Nueva carpeta\ProyectoCromos\Proyect\resources\views/layouts/appInicio.blade.php ENDPATH**/ ?>