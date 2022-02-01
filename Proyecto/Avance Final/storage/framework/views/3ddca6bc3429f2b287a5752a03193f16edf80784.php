

<?php $__env->startSection('title', 'Romeral I'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Censo</h1>
    <?php if(session('info')): ?>
        <div class="alert alert-success">
            <strong><?php echo e(session('info')); ?></strong>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<br>
    <a class="btn btn-primary btn-block " href="<?php echo e(route('admin.jefes.create')); ?>">Registrar Jefe de Familia</a>
    <br><br>
    <a class="btn btn-primary btn-block" href="<?php echo e(route('admin.viviendas.create')); ?>">Registrar Vivienda</a>
    <br><br>
    <a class="btn btn-primary btn-block" href="<?php echo e(route('admin.nucleos.create')); ?>">Registrar Nucleo Familiar</a>
    <br>
    <br>
    <br>
    <a class="btn btn-secondary" href="<?php echo e(route('admin.censos.index')); ?>">Volver</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script> console.log('Hi!'); </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\comunidad\resources\views/admin/censos/eleccion.blade.php ENDPATH**/ ?>