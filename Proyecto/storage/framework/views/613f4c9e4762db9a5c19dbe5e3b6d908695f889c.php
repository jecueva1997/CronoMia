

<?php $__env->startSection('content'); ?>
<?php if($errors->any()): ?>
    <ul class="alertaU2">
        <section class="alerta2">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="alertaLi2"><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </section>
    </ul>
<?php endif; ?>
<div class="VentanaRegistro">
    <div class="">
        <div class="reg1">
        <img src="../../img/usuario (1) 1.png" alt="registrarse">
            Crear Album</div>
        <div class="">
            <form method="POST" action="<?php echo e(route('mostrarAlbum.store')); ?>">
                <?php echo csrf_field(); ?>

                <div class="reg2">
                    <label for="id_album" class="labelInicio">Album</label>
                    <select name="id_album" id="id_album">
                        <option value="">Selecciona un Album..</option>
                        <?php $__currentLoopData = $albums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $album): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($album -> id); ?>" <?php echo e($album->id == '{$album -> id' ? 'selected' : ''); ?>}>
                                <?php echo e($album -> nombreAlbum); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <div class="">
                    <div class="reg9">
                        <button type="submit" class="">
                            Obtener
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.appNavegando', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aplicaciones\proyectoIntegrador\laravel\Nueva carpeta\ProyectoCromos\Proyect\resources\views//usuario/obtenerAlbum.blade.php ENDPATH**/ ?>