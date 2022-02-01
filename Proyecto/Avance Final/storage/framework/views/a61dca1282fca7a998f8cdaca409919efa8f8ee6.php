

<?php $__env->startSection('title', 'Romeral I'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Censo Poblacional</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php if(session('info')): ?>
        <div class="alert alert-success">
            <strong><?php echo e(session('info')); ?></strong>
        </div>
    <?php endif; ?>

<div class="card">
    <div class="card-body">
        <?php echo Form::open(['route' => 'admin.censos.store', 'autocomplete' => 'off']); ?>


            <div class="form-group">
                <?php echo Form::label('consejo_id', 'Consejo Comunal'); ?>

                <?php echo Form::select('consejo_id', $consejos, null,['class' => 'form-control']); ?>

                
                <?php $__errorArgs = ['consejo_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-danger"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            
            </div>

            <div class="form-group">
                <?php echo Form::label('estado_id', 'Estado'); ?>

                <?php echo Form::select('estado_id', $estados, null,['class' => 'form-control']); ?>

                
                <?php $__errorArgs = ['estado_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-danger"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            
            </div>

            <div class="form-group">
                <?php echo Form::label('municipio_id', 'Municipio'); ?>

                <?php echo Form::select('municipio_id', $municipios, null,['class' => 'form-control']); ?>

                
                <?php $__errorArgs = ['municipio_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-danger"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            
            </div>

            <div class="form-group">
                <?php echo Form::label('parroquias_id', 'Parroquia'); ?>

                <?php echo Form::select('parroquias_id', $parroquias, null,['class' => 'form-control']); ?>

                
                <?php $__errorArgs = ['parroquias_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-danger"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            
            </div>

            <div class="form-group">
                <?php echo Form::label('sector_id', 'Sector'); ?>

                <?php echo Form::select('sector_id', $sectores, null,['class' => 'form-control']); ?>

                
                <?php $__errorArgs = ['sector_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-danger"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            
            </div>

            <div class="form-group">
                <?php echo Form::label('comunidad_id', 'Comunidad'); ?>

                <?php echo Form::select('comunidad_id', $comunidades, null,['class' => 'form-control']); ?>

                
                <?php $__errorArgs = ['comunidad_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-danger"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            
            </div>

            <div class="form-group">
                <?php echo Form::label('nucleo_id', 'Nucleo Familiar'); ?>

                <?php echo Form::text('nucleo_id', $nucleos, ['class' => 'form-control', 'readonly']); ?>

            
                <?php $__errorArgs = ['nucleo_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-danger"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            
            </div>

            <?php echo Form::hidden('user_id', auth()->user()->id); ?>


            <?php echo Form::submit('Crear Censo', ['class' => 'btn btn-success']); ?>


        <?php echo Form::close(); ?>

    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script> console.log('Hi!'); </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\comunidad\resources\views/admin/censos/create.blade.php ENDPATH**/ ?>