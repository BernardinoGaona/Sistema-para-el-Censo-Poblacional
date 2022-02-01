

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
                    <?php echo Form::label('Otro_7', 'Otros'); ?>

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
                    <?php echo Form::label('Otro_8', 'Otros'); ?>

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
                    <p>_____________________________________________________________</p>
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
                            <?php echo Form::radio('Bombona_9', 1); ?>

                            Si
                        </label>
                        <label class="mr-2">
                            <?php echo Form::radio('Bombona_9', 0); ?>

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
                    <p>_____________________________________________________________</p>
                    
                    <p class="font-weight-bold">
                        Tuberia --
                        <label class="mr-2">
                            <?php echo Form::radio('Tuberia_9', 1); ?>

                            Si
                        </label>
                        <label class="mr-2">
                            <?php echo Form::radio('Tuberia_9', 0); ?>

                            No
                        </label>
                    </p>
                    
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
                       4) Sistema Electrico -- 

                       <label class="mr-2">
                        <?php echo Form::radio('10Sistema_Electrico', 1); ?>

                        Si
                    </label>
                    
                    <label class="mr-2">
                        <?php echo Form::radio('10Sistema_Electrico', 0); ?>

                        No
                    </label>
                    </p>

                    <?php $__errorArgs = ['10Sistema_Electrico'];
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
                        <?php echo Form::checkbox('Elecpublico_10', 1); ?>

                        Electrificado Publico
                    </label>
                    
                    <label class="mr-2">
                        <?php echo Form::checkbox('Plantapropia_10', 1); ?>

                        Platan Electrica Propia
                    </label>

                    <p class="font-weight-bold">
                        ¿Posee Medidor? -- 
 
                        <label class="mr-2">
                         <?php echo Form::radio('Medidor_10', 1); ?>

                         Si
                     </label>
                     
                     <label class="mr-2">
                         <?php echo Form::radio('Medidor_10', 0); ?>

                         No
                     </label>
                     </p>
                    
                    
                    <?php echo Form::label('Regularidad_10', 'Regularidad'); ?>

                    <?php echo Form::text('Regularidad_10', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la regularidad de la Electricidad']); ?>

                
                    <?php $__errorArgs = ['Regularidad_10'];
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
                       5) Telefonia -- 

                    <label class="mr-2">
                        <?php echo Form::radio('11Telefonia', 1); ?>

                        Si
                    </label>
                    
                    <label class="mr-2">
                        <?php echo Form::radio('11Telefonia', 0); ?>

                        No
                    </label>
                    </p>

                    <?php $__errorArgs = ['11Telefonia'];
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
                        <?php echo Form::checkbox('Domiciliaria_11', 1); ?>

                        Domiciliaria
                    </label>
                    
                    <label class="mr-2">
                        <?php echo Form::checkbox('Celular_11', 1); ?>

                        Celular
                    </label>

                    <label class="mr-2">
                        <?php echo Form::checkbox('Prepago_11', 1); ?>

                        Prepago
                    </label>
                    
                    <label class="mr-2">
                        <?php echo Form::checkbox('CentroConexion_11', 1); ?>

                        Centro de Conexión
                    </label>

                    <br>
                    <?php echo Form::label('Otro_11', 'Otros'); ?>

                    <?php echo Form::text('Otro_11', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el tipo de Telefonía']); ?>

                
                    <?php $__errorArgs = ['Otro_11'];
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
                        6) Transporte -- 

                        <label class="mr-2">
                            <?php echo Form::radio('12Transporte', 1); ?>

                            Si
                        </label>
                        
                        <label class="mr-2">
                            <?php echo Form::radio('12Transporte', 0); ?>

                            No
                        </label>
                    </p>

                    <?php $__errorArgs = ['12Transporte'];
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
                        <?php echo Form::checkbox('Propio_12', 1); ?>

                        Propio
                    </label>
                    
                    <label class="mr-2">
                        <?php echo Form::checkbox('Publico_12', 1); ?>

                        Publico
                    </label>

                    <label class="mr-2">
                        <?php echo Form::checkbox('Busetas_12', 1); ?>

                        Busetas
                    </label>
                    
                    <label class="mr-2">
                        <?php echo Form::checkbox('Taxiprivado_12', 1); ?>

                        Privados (Taxi)
                    </label>

                    <br>
                    <?php echo Form::label('Otro_12', 'Otros'); ?>

                    <?php echo Form::text('Otro_12', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el tipo de Transporte']); ?>

                
                    <?php $__errorArgs = ['Otro_12'];
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
                        7) Mecanismo de Información -- 

                        <label class="mr-2">
                            <?php echo Form::radio('13Mecanismo_Informacion', 1); ?>

                            Si
                        </label>
                        
                        <label class="mr-2">
                            <?php echo Form::radio('13Mecanismo_Informacion', 0); ?>

                            No
                        </label>
                    </p>

                    <?php $__errorArgs = ['13Mecanismo_Informacion'];
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
                        <?php echo Form::checkbox('Television_13', 1); ?>

                        Televisión
                    </label>

                    <label class="mr-2">
                        <?php echo Form::checkbox('Radio_13', 1); ?>

                        Radio
                    </label>
                    
                    <label class="mr-2">
                        <?php echo Form::checkbox('Prensa_13', 1); ?>

                        Prensa
                    </label>

                    <label class="mr-2">
                        <?php echo Form::checkbox('Internet_13', 1); ?>

                        Internet
                    </label>

                    <label class="mr-2">
                        <?php echo Form::checkbox('Mediosalternativos_13', 1); ?>

                        Medios Alternativos Comunitarios
                    </label>

                    <br>
                    <?php echo Form::label('Otro_13', 'Otros'); ?>

                    <?php echo Form::text('Otro_13', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Medio de Comunicaión que posee']); ?>

                
                    <?php $__errorArgs = ['Otro_13'];
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
                        8) Servicios Comunales -- 

                        <label class="mr-2">
                            <?php echo Form::radio('14Servicios_Comunales', 1); ?>

                            Si
                        </label>
                        
                        <label class="mr-2">
                            <?php echo Form::radio('14Servicios_Comunales', 0); ?>

                            No
                        </label>
                    </p>

                    <?php $__errorArgs = ['14Servicios_Comunales'];
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
                        <?php echo Form::checkbox('Mercados_14', 1); ?>

                        Mercados
                    </label>
                    
                    <label class="mr-2">
                        <?php echo Form::checkbox('Abastos_14', 1); ?>

                        Abastos
                    </label>

                    <label class="mr-2">
                        <?php echo Form::checkbox('Bodegas_14', 1); ?>

                        Bodegas
                    </label>
                    
                    <label class="mr-2">
                        <?php echo Form::checkbox('Farmacias_14', 1); ?>

                        Farmacias
                    </label>

                    <label class="mr-2">
                        <?php echo Form::checkbox('PlazasParques_14', 1); ?>

                        Plazas y Parques
                    </label>
                    
                    <label class="mr-2">
                        <?php echo Form::checkbox('Escuelas_14', 1); ?>

                        Escuelas
                    </label>

                    <label class="mr-2">
                        <?php echo Form::checkbox('Liceos_14', 1); ?>

                        Liceos
                    </label>
                    
                    <label class="mr-2">
                        <?php echo Form::checkbox('CentroSalud_14', 1); ?>

                        Centro de Salud
                    </label>

                    <label class="mr-2">
                        <?php echo Form::checkbox('Canchas_14', 1); ?>

                        Canchas
                    </label>

                    <label class="mr-2">
                        <?php echo Form::checkbox('Casacomunal_14', 1); ?>

                        Casa Comunal
                    </label>
                    
                    <label class="mr-2">
                        <?php echo Form::checkbox('Iglesias_14', 1); ?>

                        Iglesias
                    </label>

                    <br>
                    <?php echo Form::label('Otro_14', 'Otros'); ?>

                    <?php echo Form::text('Otro_14', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el tipo de Servicios Comunales']); ?>

                
                    <?php $__errorArgs = ['Otro_14'];
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
                        9) ¿Existen Organizaciones Comunitarias? -- 

                        <label class="mr-2">
                            <?php echo Form::radio('15Organizaciones_Comunitarias', 1); ?>

                            Si
                        </label>
                        
                        <label class="mr-2">
                            <?php echo Form::radio('15Organizaciones_Comunitarias', 0); ?>

                            No
                        </label>
                    </p>

                    <?php $__errorArgs = ['15Organizaciones_Comunitarias'];
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

                    <?php echo Form::label('Respuesta_15', 'Indique'); ?>

                    <?php echo Form::text('Respuesta_15', null, ['class' => 'form-control', 'placeholder' => 'Ingrese las Organizaciones Comunitarias']); ?>

                
                    <?php $__errorArgs = ['Respuesta_15'];
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
                        10) ¿Algún miembro de la Familia Padece alguna Discapacidad? -- 

                        <label class="mr-2">
                            <?php echo Form::radio('16Discapacidad_Familia', 1); ?>

                            Si
                        </label>
                        
                        <label class="mr-2">
                            <?php echo Form::radio('16Discapacidad_Familia', 0); ?>

                            No
                        </label>
                    </p>

                    <?php $__errorArgs = ['16Discapacidad_Familia'];
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

                    <?php echo Form::label('Respuesta_16', 'Indique'); ?>

                    <?php echo Form::text('Respuesta_16', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la Discapacidad']); ?>

                
                    <?php $__errorArgs = ['Respuesta_16'];
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
                        11) ¿Algún miembro de la Familia padece alguna Enfermedad Crónica? -- 

                        <label class="mr-2">
                            <?php echo Form::radio('17Enfermedad_cronica', 1); ?>

                            Si
                        </label>
                        
                        <label class="mr-2">
                            <?php echo Form::radio('17Enfermedad_cronica', 0); ?>

                            No
                        </label>
                    </p>

                    <?php $__errorArgs = ['17Enfermedad_cronica'];
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

                    <?php echo Form::label('Respuesta_17', 'Indique'); ?>

                    <?php echo Form::text('Respuesta_17', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la Enfermedad']); ?>

                
                    <?php $__errorArgs = ['Respuesta_17'];
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
                        12) ¿Algún miembro de la Familia toma Medicamentos Permanentemente? -- 

                        <label class="mr-2">
                            <?php echo Form::radio('18Medicamientos_permanentes', 1); ?>

                            Si
                        </label>
                        
                        <label class="mr-2">
                            <?php echo Form::radio('18Medicamientos_permanentes', 0); ?>

                            No
                        </label>
                    </p>

                    <?php $__errorArgs = ['18Medicamientos_permanentes'];
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

                    <?php echo Form::label('Respuesta_18', 'Indique'); ?>

                    <?php echo Form::text('Respuesta_18', null, ['class' => 'form-control', 'placeholder' => 'Ingrese los Medicamentos']); ?>

                
                    <?php $__errorArgs = ['Respuesta_18'];
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
                        13) ¿Algún miembro de la Familia requiere Ayuda Técnica? -- 

                        <label class="mr-2">
                            <?php echo Form::radio('19Ayuda_tecnica', 1); ?>

                            Si
                        </label>
                        
                        <label class="mr-2">
                            <?php echo Form::radio('19Ayuda_tecnica', 0); ?>

                            No
                        </label>
                    </p>

                    <?php $__errorArgs = ['19Ayuda_tecnica'];
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

                    <?php echo Form::label('Respuesta_19', 'Indique'); ?>

                    <?php echo Form::text('Respuesta_19', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la Ayuda']); ?>

                
                    <?php $__errorArgs = ['Respuesta_19'];
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
                        14) ¿Algún miembro de la Familia requiere alguna Intervención Quirúrgica? -- 

                        <label class="mr-2">
                            <?php echo Form::radio('20Intervencion_quirurgica', 1); ?>

                            Si
                        </label>
                        
                        <label class="mr-2">
                            <?php echo Form::radio('20Intervencion_quirurgica', 0); ?>

                            No
                        </label>
                    </p>

                    <?php $__errorArgs = ['20Intervencion_quirurgica'];
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

                    <?php echo Form::label('Respuesta_20', 'Indique'); ?>

                    <?php echo Form::text('Respuesta_20', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la Intervención']); ?>

                
                    <?php $__errorArgs = ['Respuesta_20'];
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
                        15) ¿Tiene Animales Domestico en la Vivienda? -- 

                        <label class="mr-2">
                            <?php echo Form::radio('21Animal_domestico', 1); ?>

                            Si
                        </label>
                        
                        <label class="mr-2">
                            <?php echo Form::radio('21Animal_domestico', 0); ?>

                            No
                        </label>
                    </p>

                    <?php $__errorArgs = ['21Animal_domestico'];
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

                    <?php echo Form::label('Cantidad_21', 'Cantidad'); ?>

                    <?php echo Form::text('Cantidad_21', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la cantidad de Animales']); ?>

                
                    <?php $__errorArgs = ['Cantidad_21'];
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

                    <?php echo Form::label('Especificacion_21', 'Indique'); ?>

                    <?php echo Form::text('Especificacion_21', null, ['class' => 'form-control', 'placeholder' => 'Ingrese los Animales']); ?>

                
                    <?php $__errorArgs = ['Especificacion_21'];
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
                        16) ¿Precensia de Insectos o Roedores en la Vivienda? -- 

                        <label class="mr-2">
                            <?php echo Form::radio('22Insectos_roedores', 1); ?>

                            Si
                        </label>
                        
                        <label class="mr-2">
                            <?php echo Form::radio('22Insectos_roedores', 0); ?>

                            No
                        </label>
                    </p>

                    <?php $__errorArgs = ['22Insectos_roedores'];
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

                    <?php echo Form::label('Respuesta_22', 'Indique'); ?>

                    <?php echo Form::text('Respuesta_22', null, ['class' => 'form-control', 'placeholder' => 'Ingrese los Insectos o Roedores']); ?>

                
                    <?php $__errorArgs = ['Respuesta_22'];
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
                        17) ¿Existe algun sistema de Protección en la Vivienda? -- 

                        <label class="mr-2">
                            <?php echo Form::radio('23Sistema_proteccion', 1); ?>

                            Si
                        </label>
                        
                        <label class="mr-2">
                            <?php echo Form::radio('23Sistema_proteccion', 0); ?>

                            No
                        </label>
                    </p>

                    <?php $__errorArgs = ['23Sistema_proteccion'];
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

                    <?php echo Form::label('Respuesta_23', 'Indique'); ?>

                    <?php echo Form::text('Respuesta_23', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el sistema']); ?>

                
                    <?php $__errorArgs = ['Respuesta_23'];
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
                        18) ¿Se ha recibido Amparo Gubernamental para el Sistema de Protección? -- 

                        <label class="mr-2">
                            <?php echo Form::radio('24Amparosistema_proteccion', 1); ?>

                            Si
                        </label>
                        
                        <label class="mr-2">
                            <?php echo Form::radio('24Amparosistema_proteccion', 0); ?>

                            No
                        </label>
                    </p>

                    <?php $__errorArgs = ['24Amparosistema_proteccion'];
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

                    <?php echo Form::label('Respuesta_24', 'Indique'); ?>

                    <?php echo Form::text('Respuesta_24', null, ['class' => 'form-control', 'placeholder' => 'Expecifique']); ?>

                
                    <?php $__errorArgs = ['Respuesta_24'];
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
                        19) Nº de la Vivienda -- 

                        <label class="mr-2">
                            <?php echo Form::radio('25Nro_Vivienda', 1); ?>

                            Si
                        </label>
                        
                        <label class="mr-2">
                            <?php echo Form::radio('25Nro_Vivienda', 0); ?>

                            No
                        </label>
                    </p>

                    <?php $__errorArgs = ['25Nro_Vivienda'];
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

                    <?php echo Form::label('Nrohabitantes_25', 'Nº de Habitantes'); ?>

                    <?php echo Form::text('Nrohabitantes_25', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Numero de Habitantes en la Vivienda']); ?>

                
                    <?php $__errorArgs = ['Nrohabitantes_25'];
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

                    <?php echo Form::label('Nrofamilias_25', 'Nº de Familias'); ?>

                    <?php echo Form::text('Nrofamilias_25', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Numero de Familias en la Vivienda']); ?>

                
                    <?php $__errorArgs = ['Nrofamilias_25'];
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
                        20) ¿Se realiza algun tipo de Actividad Comercial en la Vivienda? -- 

                        <label class="mr-2">
                            <?php echo Form::radio('26Actividad_comercial', 1); ?>

                            Si
                        </label>
                        
                        <label class="mr-2">
                            <?php echo Form::radio('26Actividad_comercial', 0); ?>

                            No
                        </label>
                    </p>

                    <?php $__errorArgs = ['26Actividad_comercial'];
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

                    <?php echo Form::label('Respuesta_26', 'Indique'); ?>

                    <?php echo Form::text('Respuesta_26', null, ['class' => 'form-control', 'placeholder' => 'Expecifique la Actividad Comercial']); ?>

                
                    <?php $__errorArgs = ['Respuesta_26'];
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
                        21) Factores de Riesgo en la Familia -- 

                        <label class="mr-2">
                            <?php echo Form::radio('27Factores_Riesgos', 1); ?>

                            Si
                        </label>
                        
                        <label class="mr-2">
                            <?php echo Form::radio('27Factores_Riesgos', 0); ?>

                            No
                        </label>
                    </p>

                    <?php $__errorArgs = ['27Factores_Riesgos'];
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
                        <?php echo Form::checkbox('Tabaquismo_27', 1); ?>

                        Tabaquismo
                    </label>
                    
                    <label class="mr-2">
                        <?php echo Form::checkbox('Drogas_27', 1); ?>

                        Drogas
                    </label>

                    <label class="mr-2">
                        <?php echo Form::checkbox('Alcoholismo_27', 1); ?>

                        Alcoholismo
                    </label>
                    
                    <label class="mr-2">
                        <?php echo Form::checkbox('Emabarazotemprano_27', 1); ?>

                        Embarazo Temprano
                    </label>

                    <?php echo Form::label('Otro_27', 'Otros'); ?>

                    <?php echo Form::text('Otro_27', null, ['class' => 'form-control', 'placeholder' => 'Ingrese los factores de Riesgo']); ?>

                
                    <?php $__errorArgs = ['Otro_27'];
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
                        22) Gestantes en el Grupo Familiar -- 

                        <label class="mr-2">
                            <?php echo Form::radio('28Gestatnte_Gfamilia', 1); ?>

                            Si
                        </label>
                        
                        <label class="mr-2">
                            <?php echo Form::radio('28Gestatnte_Gfamilia', 0); ?>

                            No
                        </label>
                    </p>

                    <?php $__errorArgs = ['28Gestatnte_Gfamilia'];
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
                        Embarazo Controlado -- 

                        <label class="mr-2">
                            <?php echo Form::radio('Embarazocontrolado_28', 1); ?>

                            Si
                        </label>
                        
                        <label class="mr-2">
                            <?php echo Form::radio('Embarazocontrolado_28', 0); ?>

                            No
                        </label>
                    </p>
                    <?php $__errorArgs = ['Embarazocontrolado_28'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-danger"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    <?php echo Form::label('NroSemanas_28', 'Nº de Semanas de Gestación'); ?>

                    <?php echo Form::text('NroSemanas_28', null, ['class' => 'form-control', 'placeholder' => 'Ingrese las Semanas de Gestación']); ?>

                
                    <?php $__errorArgs = ['NroSemanas_28'];
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
                        23) ¿El Grupo Familiar tiene algun Proyecto Socio-Productivo? -- 

                        <label class="mr-2">
                            <?php echo Form::radio('29Proyecto_Socio-Productivo', 1); ?>

                            Si
                        </label>
                        
                        <label class="mr-2">
                            <?php echo Form::radio('29Proyecto_Socio-Productivo', 0); ?>

                            No
                        </label>
                    </p>

                    <?php $__errorArgs = ['29Proyecto_Socio-Productivo'];
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

                    <?php echo Form::label('Respuesta_29', 'Indique'); ?>

                    <?php echo Form::text('Respuesta_29', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Proyecto']); ?>

                
                    <?php $__errorArgs = ['Respuesta_29'];
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

                    <?php echo Form::label('30Necesidad_Desarrollo', '24) ¿Que necesita para Desarrollarlo?'); ?>

                    <?php echo Form::text('30Necesidad_Desarrollo', null, ['class' => 'form-control', 'placeholder' => 'Expecifique']); ?>

                
                    <?php $__errorArgs = ['30Necesidad_Desarrollo'];
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

                    <?php echo Form::label('31Participacion_Proyecto', '25) ¿De no tener un Proyecto Especifico en que le gustaria al Grupo Familiar Participar?'); ?>

                    <?php echo Form::text('31Participacion_Proyecto', null, ['class' => 'form-control', 'placeholder' => 'Expecifique']); ?>

                
                    <?php $__errorArgs = ['31Participacion_Proyecto'];
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
                        26) ¿Como Jefe de Familia siente que su familia esta siendo atendida por la BMS en esta Guerra Económica? -- 

                        <label class="mr-2">
                            <?php echo Form::radio('32Pregunta', 1); ?>

                            Si
                        </label>
                        
                        <label class="mr-2">
                            <?php echo Form::radio('32Pregunta', 0); ?>

                            No
                        </label>
                    </p>

                    <?php $__errorArgs = ['32Pregunta'];
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

                    <?php echo Form::label('Respuesta_32', 'Explique'); ?>

                    <?php echo Form::text('Respuesta_32', null, ['class' => 'form-control', 'placeholder' => 'Ingrese su Respuesta']); ?>

                
                    <?php $__errorArgs = ['Respuesta_32'];
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

                    <?php echo Form::label('33AporteBMS_Fortalecimiento', '27) ¿De que manera apoyaría a su familia para Fortalecimiento de la BMS?'); ?>

                    <?php echo Form::text('33AporteBMS_Fortalecimiento', null, ['class' => 'form-control', 'placeholder' => 'Explique']); ?>

                
                    <?php $__errorArgs = ['33AporteBMS_Fortalecimiento'];
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

                    <?php echo Form::label('34Observaciones_Generales', '28) Observaciones'); ?>

                    <?php echo Form::text('34Observaciones_Generales', null, ['class' => 'form-control', 'placeholder' => 'Ingrese las Observaciones']); ?>

                
                    <?php $__errorArgs = ['34Observaciones_Generales'];
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
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\comunidad\resources\views/admin/servicios/create.blade.php ENDPATH**/ ?>