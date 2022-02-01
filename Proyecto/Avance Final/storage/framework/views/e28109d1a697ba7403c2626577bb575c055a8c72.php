

<?php $__env->startSection('title', 'Romeral I'); ?>

<?php $__env->startSection('content_header'); ?>

    <div class="card-head">
        <a class="btn btn-primary float-right" href="<?php echo e(route('admin.viviendas.create')); ?>">Agregar Vivienda</a>
    </div>

    <h1>Lista de Viviendas</h1>
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
                        <th>Nº de Identificacion</th>
                        <th>Direccion</th>
                        <th>Status</th>
                        <th>Id User</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    <?php $__currentLoopData = $viviendas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vivienda): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($vivienda->id); ?></td>
                            <td><?php echo e($vivienda->nro_identificacion); ?></td>
                            <td><?php echo e($vivienda->direccion); ?></td>
                            <td>
                               <?php if($vivienda->status == 1): ?>
                                    <?php echo e('Activo'); ?>

                               <?php else: ?>
                                    <?php echo e('Inactivo'); ?>

                               <?php endif; ?>
                            </td>
                            <td><?php echo e($vivienda->user_id); ?></td>
                            <td width="10px">
                                <a class="btn btn-warning btn-sm" href="<?php echo e(route('admin.viviendas.edit', $vivienda->id)); ?>">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="<?php echo e(route('admin.viviendas.destroy', $vivienda->id)); ?>" method="POST">
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

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\comunidad\resources\views/admin/viviendas/index.blade.php ENDPATH**/ ?>