

<?php $__env->startSection('title', 'Romeral I'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1> Servicios de la Vivienda </h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-body">
            <?php echo Form::open(['route' => 'admin.servicios.store', 'autocomplete' => 'off']); ?>


            

                <div class="form-group">
                    <p class="font-weight-bold">
                       1) Aguas Blancas --
                        <label class="mr-2">
                            <?php echo Form::radio('7Aguas_Blancas', 1); ?>

                            Si
                        </label>
                        <label class="mr-2">
                            <?php echo Form::radio('7Aguas_Blancas', 0); ?>

                            No
                        </label>
                    </p>
                    <?php $__errorArgs = ['7Aguas_Blancas'];
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
                        <?php echo Form::checkbox('Acueducto_7', 1); ?>

                        Acueducto
                    </label>
                    
                    <label class="mr-2">
                        <?php echo Form::checkbox('Camion_7', 1); ?>

                        Camion
                    </label>

                    <label class="mr-2">                      
                        <?php echo Form::checkbox('ViaPublivca_7', 1); ?>

                        Via Publica
                    </label>
                    
                    <label class="mr-2">
                        <?php echo Form::checkbox('Rio_7', 1); ?>

                        Rio
                    </label>
                    <br>
                    <?php echo Form::label('Otro_7', 'Otro'); ?>

                    <?php echo Form::text('Otro_7', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el tipo de Aguas Blancas']); ?>

                    
                    <?php $__errorArgs = ['Otro_7'];
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
                       2) Aguas Servidas -- 
                        <label class="mr-2">
                            <?php echo Form::radio('8Aguas_Servidas', 1); ?>

                            Si
                        </label>
                        
                        <label class="mr-2">
                            <?php echo Form::radio('8Aguas_Servidas', 0); ?>

                            No
                        </label>
                    </p>
                    <?php $__errorArgs = ['8Aguas_Servidas'];
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
                        <?php echo Form::checkbox('Cloacas_8', 1); ?>

                        Cloacas
                    </label>
                    
                    <label class="mr-2">
                        <?php echo Form::checkbox('PozoSeptico_8', 1); ?>

                        Pozo Septico
                    </label>

                    <label class="mr-2">
                        <?php echo Form::checkbox('Letrina_8', 1); ?>

                        Letrina
                    </label>
                    
                    <label class="mr-2">
                        <?php echo Form::checkbox('AireLibre_8', 1); ?>

                        Aire Libre
                    </label>

                    <label class="mr-2">
                        <?php echo Form::checkbox('EnBolsas_8', 1); ?>

                        En Bolsas
                    </label>

                    <br>
                    <?php echo Form::label('Otro_8', 'Otro'); ?>

                    <?php echo Form::text('Otro_8', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el tipo de Aguas Servidas']); ?>

                
                    <?php $__errorArgs = ['Otro_8'];
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
                       3) Gas -- 

                        <label class="mr-2">
                            <?php echo Form::radio('9Gas', 1); ?>

                            Si
                        </label>
                        
                        <label class="mr-2">
                            <?php echo Form::radio('9Gas', 0); ?>

                            No
                        </label>
                    </p>

                    <?php $__errorArgs = ['9Gas'];
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

                    <p class="font-weight-bold">
                        Bombona --
                        <label class="mr-2">
                            <?php echo Form::checkbox('Bombona_9', 1); ?>

                            Si
                        </label>
                        <label class="mr-2">
                            <?php echo Form::checkbox('Bombona_9', 0); ?>

                            No
                        </label>
                    </p>

                    <label class="mr-2">
                        <?php echo Form::checkbox('10Kg_9', 1); ?>

                        10 Kg
                    </label>
                    
                    <label class="mr-2">
                        <?php echo Form::checkbox('18Kg_9', 1); ?>

                        18 Kg
                    </label>

                    <label class="mr-2">
                        <?php echo Form::checkbox('27Kg_9', 1); ?>

                        27 Kg
                    </label>

                    <label class="mr-2">
                        <?php echo Form::checkbox('43Kg_9', 1); ?>

                        43 Kg
                    </label>
                    <br>
                    <p class="font-weight-bold">
                        Tuberia --
                        <label class="mr-2">
                            <?php echo Form::checkbox('Tuberia_9', 1); ?>

                            Si
                        </label>
                        <label class="mr-2">
                            <?php echo Form::checkbox('Tuberia_9', 0); ?>

                            No
                        </label>
                    </p>
                    <br>
                    <?php echo Form::label('Regularidad_9', 'Regularidad'); ?>

                    <?php echo Form::text('Regularidad_9', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la regularidad del Gas']); ?>

                
                    <?php $__errorArgs = ['Regularidad_9'];
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
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\comunidad\resources\views/admin/Servicios/create.blade.php ENDPATH**/ ?>