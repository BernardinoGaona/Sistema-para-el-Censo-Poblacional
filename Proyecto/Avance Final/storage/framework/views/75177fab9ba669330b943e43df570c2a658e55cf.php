

<?php $__env->startSection('title', 'Romeral I'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Características de <?php echo e($name); ?> <?php echo e($surname); ?></h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-body">
            <?php echo Form::open(['route' => 'admin.caracteristicas.store', 'autocomplete' => 'off']); ?>


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
                <hr>
                <div class="form-group">
                    <p class="font-weight-bold">Inscripción CNE</p>

                    <label class="mr-2">
                        <?php echo Form::radio('inscrip_cne', 1); ?>

                        Si
                    </label>
                    
                    <label class="mr-2">
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
                <hr>
                <div class="form-group">
                    <?php echo Form::label('sitio_vota', '¿Donde Vota?'); ?>

                    <?php echo Form::text('sitio_vota', null, ['class' => 'form-control', 'placeholder' => 'Ingrese donde es el lugar donde Vota']); ?>

                
                    <?php $__errorArgs = ['sitio_vota'];
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
                <hr>
                <div class="form-group">
                    <p class="font-weight-bold">Misión Hogares de la Patria</p>

                    <label class="mr-2">
                        <?php echo Form::radio('mision_hogaresp', 1); ?>

                        Si
                    </label>
                    
                    <label class="mr-2">
                        <?php echo Form::radio('mision_hogaresp', 0); ?>

                        No
                    </label>

                    <?php $__errorArgs = ['mision_hogaresp'];
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
                <hr>
                <div class="form-group">
                    <p class="font-weight-bold">Misión Jose Gregorio Hernandez</p>

                    <label class="mr-2">
                        <?php echo Form::radio('mision_josegregorio', 1); ?>

                        Si
                    </label>
                    
                    <label class="mr-2">
                        <?php echo Form::radio('mision_josegregorio', 0); ?>

                        No
                    </label>

                    <?php $__errorArgs = ['mision_josegregorio'];
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
                <hr>
                <div class="form-group">
                    <p class="font-weight-bold">Misión Parto Humanizado</p>

                    <label class="mr-2">
                        <?php echo Form::radio('mision_partohumanizado', 1); ?>

                        Si
                    </label>
                    
                    <label class="mr-2">
                        <?php echo Form::radio('mision_partohumanizado', 0); ?>

                        No
                    </label>

                    <?php $__errorArgs = ['mision_partohumanizado'];
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
                <hr>
                <div class="form-group">
                    <p class="font-weight-bold">Misión Lactancia Materna</p>

                    <label class="mr-2">
                        <?php echo Form::radio('mision_lactanciamaterna', 1); ?>

                        Si
                    </label>
                    
                    <label class="mr-2">
                        <?php echo Form::radio('mision_lactanciamaterna', 0); ?>

                        No
                    </label>

                    <?php $__errorArgs = ['mision_lactanciamaterna'];
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
                <hr>
                <div class="form-group">
                    <p class="font-weight-bold">Misión Amor Mayor</p>

                    <label class="mr-2">
                        <?php echo Form::radio('mision_amormayor', 1); ?>

                        Si
                    </label>
                    
                    <label class="mr-2">
                        <?php echo Form::radio('mision_amormayor', 0); ?>

                        No
                    </label>

                    <?php $__errorArgs = ['mision_amormayor'];
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
                <hr>
                <div class="form-group">
                    <p class="font-weight-bold">Misión Chamba Juvenil</p>

                    <label class="mr-2">
                        <?php echo Form::radio('mision_chambajuvenil', 1); ?>

                        Si
                    </label>
                    
                    <label class="mr-2">
                        <?php echo Form::radio('mision_chambajuvenil', 0); ?>

                        No
                    </label>

                    <?php $__errorArgs = ['mision_chambajuvenil'];
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
                <hr>
                <div class="form-group">
                    <p class="font-weight-bold">Misión Movimiento Somos Venezuela</p>

                    <label class="mr-2">
                        <?php echo Form::radio('mision_movimientosomosv', 1); ?>

                        Si
                    </label>
                    
                    <label class="mr-2">
                        <?php echo Form::radio('mision_movimientosomosv', 0); ?>

                        No
                    </label>

                    <?php $__errorArgs = ['mision_movimientosomosv'];
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
                <hr>
                <div class="form-group">
                    <?php echo Form::label('organizacion_p', '¿Pertenece a una Organización? Indique'); ?>

                    <?php echo Form::text('organizacion_p', null, ['class' => 'form-control', 'placeholder' => 'Ingrese si pertenece a una organización']); ?>

                
                    <?php $__errorArgs = ['organizacion_p'];
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
                <hr>
                <div class="form-group">
                    <p class="font-weight-bold">Carnet de la Patria</p>

                    <label class="mr-2">
                        <?php echo Form::radio('carnet_patria', 1); ?>

                        Si
                    </label>
                    
                    <label class="mr-2">
                        <?php echo Form::radio('carnet_patria', 0); ?>

                        No
                    </label>

                    <?php $__errorArgs = ['carnet_patria'];
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
                <hr>
                <div class="form-group">
                    <?php echo Form::label('codigo_carnet', 'Codigo del Carnet de la Patria'); ?>

                    <?php echo Form::text('codigo_carnet', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el codigo del carnet de la patria']); ?>

                
                    <?php $__errorArgs = ['codigo_carnet'];
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
                <hr>
                <div class="form-group">
                    <?php echo Form::label('serial_carnet', 'Serial del Carnet de la Patria'); ?>

                    <?php echo Form::text('serial_carnet', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el serial del carnet de la patria']); ?>

                
                    <?php $__errorArgs = ['serial_carnet'];
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
                <hr>
                <div class="form-group">
                    <p class="font-weight-bold">¿Recibe CLAP?</p>

                    <label class="mr-2">
                        <?php echo Form::radio('recibe_clap', 1); ?>

                        Si
                    </label>
                    
                    <label class="mr-2">
                        <?php echo Form::radio('recibe_clap', 0); ?>

                        No
                    </label>

                    <?php $__errorArgs = ['recibe_clap'];
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
                <hr>
                <div class="form-group">
                    <?php echo Form::label('nro_mercados', 'Nº de Mercados'); ?>

                    <?php echo Form::text('nro_mercados', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el numero de mercados que recibe por el CLAP']); ?>

                
                    <?php $__errorArgs = ['nro_mercados'];
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
                <hr>
                <div class="form-group">
                    <?php echo Form::label('talla_zapato', 'Talla de Zapato'); ?>

                    <?php echo Form::text('talla_zapato', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la talla de Calzado']); ?>

                
                    <?php $__errorArgs = ['talla_zapato'];
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
                <hr>
                <div class="form-group">
                    <?php echo Form::label('tallaC_id', 'Talla de Camisa'); ?>

                    <?php echo Form::select('tallaC_id', $camisa, null,['class' => 'form-control']); ?>

                    
                    <?php $__errorArgs = ['tallaC_id'];
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
                <hr>
                <div class="form-group">
                    <?php echo Form::label('tallaP_id', 'Talla de Pantalon'); ?>

                    <?php echo Form::select('tallaP_id', $pantalon, null,['class' => 'form-control']); ?>

                    
                    <?php $__errorArgs = ['tallaP_id'];
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
                <hr>
                <div class="form-group">
                    <?php echo Form::label('persona_id', 'Persona'); ?>

                    <?php echo Form::text('persona_id', $persona, ['class' => 'form-control', 'readonly']); ?>

                
                    <?php $__errorArgs = ['persona_id'];
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
                    <?php echo Form::label('nucleof_id', 'Nucleo'); ?>

                    <?php echo Form::text('nucleof_id', $nucleo, ['class' => 'form-control', 'readonly']); ?>

                
                    <?php $__errorArgs = ['nucleof_id'];
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


                
                
                <?php echo Form::submit('Siguiente', ['class' => 'btn btn-success']); ?>


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
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\comunidad\resources\views/admin/caracteristicas/create.blade.php ENDPATH**/ ?>