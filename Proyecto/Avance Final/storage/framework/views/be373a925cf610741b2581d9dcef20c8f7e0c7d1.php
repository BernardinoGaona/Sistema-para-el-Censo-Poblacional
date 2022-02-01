

<?php $__env->startSection('title', 'Romeral I'); ?>

<?php $__env->startSection('content_header'); ?>

    <div class="card-head">
        <a class="btn btn-primary float-right" href="<?php echo e(route('admin.nucleos.create')); ?>">Nuevo Núcleo Familiar</a>
    </div>

    <h1>Nucleos Familiares</h1>
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
                        <th>Jefe de Familia</th>
                        <th>Vivienda</th>
                        <th>Cantidad de Personas</th>
                        <th>Status</th>
                        <th>Id User</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    <?php $__currentLoopData = $nucleos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nucleo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($nucleo->id); ?></td>
                            <td><?php echo e($nucleo->jefe_name); ?></td>
                            <td><?php echo e($nucleo->vivienda_id); ?></td>
                            <td><?php echo e($nucleo->cant_personas); ?></td>
                            <td>
                            <?php if($nucleo->status == 1): ?>
                                    <?php echo e('Activo'); ?>

                            <?php else: ?>
                                    <?php echo e('Inactivo'); ?>

                            <?php endif; ?>
                            </td>
                            <td><?php echo e($nucleo->user_id); ?></td>
                            <td width="10px">
                                <a class="btn btn-warning btn-sm" href="<?php echo e(route('admin.nucleos.edit', $nucleo->id)); ?>">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="<?php echo e(route('admin.nucleos.destroy', $nucleo->id)); ?>" method="POST">
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
    <div  class="card-head">
        <a class="btn btn-link" href="<?php echo e(route('admin.personas.create')); ?>">Agregar Persona</a>
    </div>
    <div  class="card-head">
        <a class="btn btn-link" href="<?php echo e(route('admin.situaciones.create')); ?>">Agregar Situación de la Vivienda</a>
    </div>
    <div class="card-head">
        <a class="btn btn-link" href="<?php echo e(route('admin.servicios.create')); ?>">Agregar Servicios de la Vivienda</a>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script> console.log('Hi!'); </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\comunidad\resources\views/admin/nucleos/index.blade.php ENDPATH**/ ?>