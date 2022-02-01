

<?php $__env->startSection('title', 'Romeral I'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Crear nueva Vivienda</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-body">
            <?php echo Form::open(['route' => 'admin.viviendas.store', 'autocomplete' => 'off']); ?>


                <div class="form-group">
                    <?php echo Form::label('nro_identificacion', 'Nº Vivienda'); ?>

                    <?php echo Form::text('nro_identificacion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el numero de identificacion de la Vivienda']); ?>

                
                    <?php $__errorArgs = ['nro_vivienda'];
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
                    <?php echo Form::label('direccion', 'Direccción'); ?>

                    <?php echo Form::text('direccion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la dirección de la Vivienda']); ?>

                    
                    <?php $__errorArgs = ['direccion'];
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
                    <?php echo Form::label('slug', 'Slug'); ?>

                    <?php echo Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug de la Vivienda', 'readonly']); ?>

                
                    <?php $__errorArgs = ['slug'];
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


                <?php echo Form::submit('Crear Vivienda', ['class' => 'btn btn-success']); ?>


            <?php echo Form::close(); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    
    <script src="<?php echo e(asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')); ?>"></script>

    <script>
        $(document).ready( function() {
            $("#nro_identificacion").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
  });
});
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\comunidad\resources\views/admin/viviendas/create.blade.php ENDPATH**/ ?>