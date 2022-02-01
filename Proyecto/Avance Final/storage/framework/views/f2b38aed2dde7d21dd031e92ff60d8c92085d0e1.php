

<?php $__env->startSection('title', 'Romeral I'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Características de la Persona <?php echo e($persona->name); ?></h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-body">
            <?php echo Form::open(['route' => 'admin.Caracteristicas.store', 'autocomplete' => 'off']); ?>


                <div class="form-group">
                    <?php echo Form::label('situacion_laboral', 'Situación Laboral'); ?>

                    <?php echo Form::text('situacion_laboral', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la Situación laboral de la persona']); ?>

                
                    <?php $__errorArgs = ['situacion_laboral'];
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
                    <p class="font-weight-bold">Inscripcion CNE</p>

                    <label class="">
                        <?php echo Form::radio('inscrip_cne', 1); ?>

                        Si
                    </label>

                    <label class="">
                        <?php echo Form::radio('inscrip_cne', 0); ?>

                        No
                    </label>

                    <?php $__errorArgs = ['inscrip_cne'];
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


                
                
                <?php echo Form::submit('Crear Persona', ['class' => 'btn btn-success']); ?>


            <?php echo Form::close(); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script> console.log('Hi!'); </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\comunidad\resources\views/admin/Caracteristicas/create.blade.php ENDPATH**/ ?>