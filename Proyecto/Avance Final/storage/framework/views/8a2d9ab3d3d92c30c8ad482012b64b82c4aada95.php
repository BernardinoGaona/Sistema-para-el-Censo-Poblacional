

<?php $__env->startSection('title', 'Romeral I'); ?>

<?php $__env->startSection('content_header'); ?>

    <div class="card-head">
        <a class="btn btn-primary float-right" href="<?php echo e(route('admin.jefes.create')); ?>">Nuevo Censo</a>
    </div>

    <h1>Censo Poblacional Comunidad "Romeral 1"</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php if(session('info')): ?>
        <div class="alert alert-success">
            <strong><?php echo e(session('info')); ?></strong>
        </div>
    <?php endif; ?>

    <div class="card">

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Consejo Comunal</th>
                        <th>Estado</th>
                        <th>Municipio</th>
                        <th>Parroquia</th>
                        <th>Sector</th>
                        <th>Comunidad</th>
                        <th>Nucleo Familiar</th>
                        <th>Id User</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    <?php $__currentLoopData = $censos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $censo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($censo->id); ?></td>
                            <td><?php echo e($censo->consejo_id); ?></td>
                            <td><?php echo e($censo->estado_id); ?></td>
                            <td><?php echo e($censo->municipio_id); ?></td>
                            <td><?php echo e($censo->parroquia_id); ?></td>
                            <td><?php echo e($censo->sector_id); ?></td>
                            <td><?php echo e($censo->comunidad_id); ?></td>
                            <td><?php echo e($censo->nucleo_id); ?></td>
                            <td><?php echo e($censo->user_id); ?></td>
                            <td width="10px">
                                <a class="btn btn-warning btn-sm" href="<?php echo e(route('admin.censos.edit', $censo->id)); ?>">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="<?php echo e(route('admin.censos.destroy', $censo->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('delete'); ?>

                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>

            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script> console.log('Hi!'); </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\comunidad\resources\views/admin/censos/index.blade.php ENDPATH**/ ?>