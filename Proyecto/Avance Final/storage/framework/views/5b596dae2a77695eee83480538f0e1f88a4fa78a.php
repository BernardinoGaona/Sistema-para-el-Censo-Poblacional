

<?php $__env->startSection('title', 'Romeral I'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Editar Persona</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-body">
        <?php echo Form::model($persona, ['route' => ['admin.personas.update', $persona->id], 'method' => 'put', 'autocomplete' => 'off']); ?>


            <div class="form-group">
                <?php echo Form::label('cedula', 'Cedula'); ?>

                <?php echo Form::text('cedula', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la cedula de la persona']); ?>

            
                <?php $__errorArgs = ['cedula'];
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
                <?php echo Form::label('names', 'Nombres'); ?>

                <?php echo Form::text('names', null, ['class' => 'form-control', 'placeholder' => 'Ingrese los nombres de la persona']); ?>

                
                <?php $__errorArgs = ['names'];
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
                <?php echo Form::label('surnames', 'Apellidos'); ?>

                <?php echo Form::text('surnames', null, ['class' => 'form-control', 'placeholder' => 'Ingrese los apellidos de la persona']); ?>

                
                <?php $__errorArgs = ['surnames'];
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
                <?php echo Form::label('sexo', 'Sexo'); ?>

                <?php echo Form::select('sexo', $sexos, null,['class' => 'form-control']); ?>

                
                <?php $__errorArgs = ['sexo'];
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
                <?php echo Form::label('fecha_n', 'Fecha de Nacimiento'); ?>

                <?php echo Form::text('fecha_n', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la fecha de nacimiento de la persona ----- Formato dd/mm/aaaa']); ?>

                
                <?php $__errorArgs = ['fecha_n'];
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
                <?php echo Form::label('parentesco', 'Parentesco'); ?>

                <?php echo Form::text('parentesco', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el parentesco de la persona']); ?>

                
                <?php $__errorArgs = ['parentesco'];
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
                <?php echo Form::label('estado_civil', 'Estado Civil'); ?>

                <?php echo Form::select('estado_civil', $estados, null,['class' => 'form-control']); ?>

                
                <?php $__errorArgs = ['estado_civil'];
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
                <?php echo Form::label('telefono', 'Telefono'); ?>

                <?php echo Form::text('telefono', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el numero de telefono de la persona']); ?>

                
                <?php $__errorArgs = ['telefono'];
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
                <?php echo Form::label('email', 'Correo Electronico'); ?>

                <?php echo Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el correo electronico de la persona']); ?>

                
                <?php $__errorArgs = ['email'];
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
                <?php echo Form::label('nivel_instruccion', 'Nivel de Instrucción'); ?>

                <?php echo Form::select('nivel_instruccion', $nivel, null,['class' => 'form-control']); ?>

                
                <?php $__errorArgs = ['nivel_instruccion'];
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
                <?php echo Form::label('profecion_ocu', 'Profesion u Ocupación'); ?>

                <?php echo Form::text('profecion_ocu', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la profesión u ocupación de la persona']); ?>

                
                <?php $__errorArgs = ['profecion_ocu'];
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
                <?php echo Form::label('jefe', 'Jefe de Familia'); ?>

                <?php echo Form::select('jefe', $respuest, null,['class' => 'form-control']); ?>

                
                <?php $__errorArgs = ['jefe'];
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


            <?php echo Form::submit('Actualizar Persona', ['class' => 'btn btn-primary']); ?>


        <?php echo Form::close(); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    
    <script src="<?php echo e(asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')); ?>"></script>

    <script>
        $(document).ready( function() {
            $("#names").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
  });
});
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\comunidad\resources\views/admin/personas/edit.blade.php ENDPATH**/ ?>