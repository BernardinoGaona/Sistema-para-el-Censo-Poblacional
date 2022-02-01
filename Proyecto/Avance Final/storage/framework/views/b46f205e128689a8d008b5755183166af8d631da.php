

<?php $__env->startSection('title', 'Romeral I'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Situación de la Vivienda </h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-body">
            <?php echo Form::open(['route' => 'admin.situaciones.store', 'autocomplete' => 'off']); ?>


            

                <div class="form-group">
                    <p class="font-weight-bold">
                       1) Condiciones del Terreno --
                        <label class="mr-2">
                            <?php echo Form::radio('1Condicion_terreno', 1); ?>

                            Si
                        </label>
                        <label class="mr-2">
                            <?php echo Form::radio('1Condicion_terreno', 0); ?>

                            No
                        </label>
                    </p>
                    <?php $__errorArgs = ['1Condicion_terreno'];
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

                    <label class="mr-2">                      
                        <?php echo Form::checkbox('Estable_1', 1); ?>

                        Estable
                    </label>
                    
                    <label class="mr-2">
                        <?php echo Form::checkbox('Inestable_1', 1); ?>

                        Inestable
                    </label>

                    <label class="mr-2">                      
                        <?php echo Form::checkbox('Altoriesgo_1', 1); ?>

                        Alto Riesgo
                    </label>
                    
                    <label class="mr-2">
                        <?php echo Form::checkbox('Vulnerable_1', 1); ?>

                        Vulnerable
                    </label>
                    <br>
                    <?php echo Form::label('Otro_1', 'Otro'); ?>

                    <?php echo Form::text('Otro_1', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la condición del Terreno']); ?>

                </div>

                <?php $__errorArgs = ['Otro_1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-danger"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            

                <hr>

            

                <div class="form-group">
                    <p class="font-weight-bold">
                       2) Forma de Tenecia -- 
                        <label class="mr-2">
                            <?php echo Form::radio('2Forma_Tenencia', 1); ?>

                            Si
                        </label>
                        
                        <label class="mr-2">
                            <?php echo Form::radio('2Forma_Tenencia', 0); ?>

                            No
                        </label>
                    </p>
                    <?php $__errorArgs = ['2Forma_Tenencia'];
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

                    <label class="mr-2">
                        <?php echo Form::checkbox('Alquilada_2', 1); ?>

                        Alquilada
                    </label>
                    
                    <label class="mr-2">
                        <?php echo Form::checkbox('Invadida_2', 1); ?>

                        Invadida
                    </label>

                    <label class="mr-2">
                        <?php echo Form::checkbox('Traspasada_2', 1); ?>

                        Traspasada
                    </label>
                    
                    <label class="mr-2">
                        <?php echo Form::checkbox('Prestada_2', 1); ?>

                        Prestada
                    </label>

                    <br>
                    <?php echo Form::label('Otro_2', 'Otro'); ?>

                    <?php echo Form::text('Otro_2', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la forma de Tenencia']); ?>

                </div>

                <?php $__errorArgs = ['Otro_2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-danger"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            

                <hr>

            

                <div class="form-group">
                    <p class="font-weight-bold">
                       3) Tipo de Vivienda -- 

                        <label class="mr-2">
                            <?php echo Form::radio('3Tipo_Vivienda', 1); ?>

                            Si
                        </label>
                        
                        <label class="mr-2">
                            <?php echo Form::radio('3Tipo_Vivienda', 0); ?>

                            No
                        </label>
                    </p>

                    <?php $__errorArgs = ['3Tipo_Vivienda'];
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

                    <label class="mr-2">
                        <?php echo Form::checkbox('Quinta_3', 1); ?>

                        Quinta
                    </label>
                    
                    <label class="mr-2">
                        <?php echo Form::checkbox('Casa_3', 1); ?>

                        Casa
                    </label>

                    <label class="mr-2">
                        <?php echo Form::checkbox('Apartamento_3', 1); ?>

                        Apartamento
                    </label>
                    
                    <label class="mr-2">
                        <?php echo Form::checkbox('Rancho_3', 1); ?>

                        Rancho
                    </label>

                    <label class="mr-2">
                        <?php echo Form::checkbox('Barraca_3', 1); ?>

                        Barraca
                    </label>

                    <label class="mr-2">
                        <?php echo Form::checkbox('Habitacionanexo_3', 1); ?>

                        Habitación o Anexo
                    </label>
                </div>

            

                <hr>

            

                <div class="form-group">
                    <p class="font-weight-bold">
                       4) Habitaciones de la Vivienda -- 

                       <label class="mr-2">
                        <?php echo Form::radio('4Habitaciones_Vivienda', 1); ?>

                        Si
                    </label>
                    
                    <label class="mr-2">
                        <?php echo Form::radio('4Habitaciones_Vivienda', 0); ?>

                        No
                    </label>
                    </p>

                    <?php $__errorArgs = ['4Habitaciones_Vivienda'];
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

                    <label class="mr-2">
                        <?php echo Form::checkbox('Sala_4', 1); ?>

                        Sala
                    </label>
                    
                    <label class="mr-2">
                        <?php echo Form::checkbox('Comedor_4', 1); ?>

                        Comedor
                    </label>

                    <label class="mr-2">
                        <?php echo Form::checkbox('Cocina_4', 1); ?>

                        Cocina
                    </label>
                    
                    <label class="mr-2">
                        <?php echo Form::checkbox('Baño_4', 1); ?>

                        Baño
                    </label>
                    <br><br>
                    <?php echo Form::label('Cantidadhabitaciones_4', '¿Cuantas Habitaciones Posee? Indique'); ?>

                    <?php echo Form::text('Cantidadhabitaciones_4', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la cantidad de Habitaciones']); ?>

                
                    <?php $__errorArgs = ['Cantidadhabitaciones_4'];
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
                    <p class="font-weight-bold">
                       5) Tipo de Paredes -- 

                    <label class="mr-2">
                        <?php echo Form::radio('5Tipo_Paredes', 1); ?>

                        Si
                    </label>
                    
                    <label class="mr-2">
                        <?php echo Form::radio('5Tipo_Paredes', 0); ?>

                        No
                    </label>
                    </p>

                    <?php $__errorArgs = ['5Tipo_Paredes'];
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

                    <label class="mr-2">
                        <?php echo Form::checkbox('Frisada_5', 1); ?>

                        Frisada
                    </label>
                    
                    <label class="mr-2">
                        <?php echo Form::checkbox('SinFrisar_5', 1); ?>

                        Sin Frisar
                    </label>

                    <label class="mr-2">
                        <?php echo Form::checkbox('Tablas_5', 1); ?>

                        Tablas
                    </label>
                    
                    <label class="mr-2">
                        <?php echo Form::checkbox('BaharequeAdobe_5', 1); ?>

                        Bahareque o Adobe
                    </label>

                    <label class="mr-2">
                        <?php echo Form::checkbox('Zinc_5', 1); ?>

                        Zinc
                    </label>
                    
                    <label class="mr-2">
                        <?php echo Form::checkbox('Cartonpiedra_5', 1); ?>

                        Carton Piedra
                    </label>
                    <br>
                    <?php echo Form::label('Otro_5', 'Otros'); ?>

                    <?php echo Form::text('Otro_5', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el tipo de Pared']); ?>

                
                    <?php $__errorArgs = ['Otro_5'];
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
                    <p class="font-weight-bold">
                        6) Tipo de Techo -- 

                        <label class="mr-2">
                            <?php echo Form::radio('6Tipo_Techo', 1); ?>

                            Si
                        </label>
                        
                        <label class="mr-2">
                            <?php echo Form::radio('6Tipo_Techo', 0); ?>

                            No
                        </label>
                    </p>

                    <?php $__errorArgs = ['6Tipo_Techo'];
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

                    <label class="mr-2">
                        <?php echo Form::checkbox('Platabanda_6', 1); ?>

                        Platabanda
                    </label>
                    
                    <label class="mr-2">
                        <?php echo Form::checkbox('Asbesto_6', 1); ?>

                        Asbesto
                    </label>

                    <label class="mr-2">
                        <?php echo Form::checkbox('Teja_6', 1); ?>

                        Teja
                    </label>
                    
                    <label class="mr-2">
                        <?php echo Form::checkbox('Zinc_6', 1); ?>

                        Zinc
                    </label>

                    <label class="mr-2">
                        <?php echo Form::checkbox('Machihembrado_6', 1); ?>

                        Machihembrado
                    </label>
                    
                    <label class="mr-2">
                        <?php echo Form::checkbox('Techoraso_6', 1); ?>

                        Techo Raso
                    </label>
                    <br>
                    <?php echo Form::label('Otro_6', 'Otros'); ?>

                    <?php echo Form::text('Otro_6', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el tipo de Techo']); ?>

                
                    <?php $__errorArgs = ['Otro_6'];
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
                    <?php echo Form::label('vivienda_id', 'Vivienda'); ?>

                    <?php echo Form::text('vivienda_id', $vivienda, ['class' => 'form-control', 'readonly']); ?>

                
                    <?php $__errorArgs = ['vivienda_id'];
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

                <div class="form-group">
                    <?php echo Form::label('comunidad_id', 'Comunidad'); ?>

                    <?php echo Form::select('comunidad_id', $comunidad, null,['class' => 'form-control']); ?>

                
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
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\comunidad\resources\views/admin/situaciones/create.blade.php ENDPATH**/ ?>