@extends('adminlte::page')

@section('title', 'Romeral I')

@section('content_header')
    <h1> Servicios de la Vivienda </h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.servicios.store', 'autocomplete' => 'off']) !!}

            {{-- Pregunta 7 Inicio --}}

                <div class="form-group">
                    <p class="font-weight-bold">
                       1) Aguas Blancas --
                        <label class="mr-2">
                            {!! Form::radio('7Aguas_Blancas', 1) !!}
                            Si
                        </label>
                        <label class="mr-2">
                            {!! Form::radio('7Aguas_Blancas', 0) !!}
                            No
                        </label>
                    </p>
                    @error('7Aguas_Blancas')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">

                    <label class="mr-2">                      
                        {!! Form::checkbox('Acueducto_7', 1) !!}
                        Acueducto
                    </label>
                    
                    <label class="mr-2">
                        {!! Form::checkbox('Camion_7', 1) !!}
                        Camion
                    </label>

                    <label class="mr-2">                      
                        {!! Form::checkbox('ViaPublivca_7', 1) !!}
                        Via Publica
                    </label>
                    
                    <label class="mr-2">
                        {!! Form::checkbox('Rio_7', 1) !!}
                        Rio
                    </label>
                    <br>
                    {!! Form::label('Otro_7', 'Otros') !!}
                    {!! Form::text('Otro_7', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el tipo de Aguas Blancas']) !!}
                    
                    @error('Otro_7')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            {{-- Pregunta 7 Fin --}}

                <hr>

            {{-- Pregunta 8 Inicio --}}

                <div class="form-group">
                    <p class="font-weight-bold">
                       2) Aguas Servidas -- 
                        <label class="mr-2">
                            {!! Form::radio('8Aguas_Servidas', 1) !!}
                            Si
                        </label>
                        
                        <label class="mr-2">
                            {!! Form::radio('8Aguas_Servidas', 0) !!}
                            No
                        </label>
                    </p>
                    @error('8Aguas_Servidas')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">

                    <label class="mr-2">
                        {!! Form::checkbox('Cloacas_8', 1) !!}
                        Cloacas
                    </label>
                    
                    <label class="mr-2">
                        {!! Form::checkbox('PozoSeptico_8', 1) !!}
                        Pozo Septico
                    </label>

                    <label class="mr-2">
                        {!! Form::checkbox('Letrina_8', 1) !!}
                        Letrina
                    </label>
                    
                    <label class="mr-2">
                        {!! Form::checkbox('AireLibre_8', 1) !!}
                        Aire Libre
                    </label>

                    <label class="mr-2">
                        {!! Form::checkbox('EnBolsas_8', 1) !!}
                        En Bolsas
                    </label>

                    <br>
                    {!! Form::label('Otro_8', 'Otros') !!}
                    {!! Form::text('Otro_8', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el tipo de Aguas Servidas']) !!}
                
                    @error('Otro_8')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            {{-- Pregunta 8 Fin --}}

                <hr>

            {{-- Pregunta 9 Inicio --}}

                <div class="form-group">
                    <p class="font-weight-bold">
                       3) Gas -- 
                        <label class="mr-2">
                            {!! Form::radio('9Gas', 1) !!}
                            Si
                        </label>
                        
                        <label class="mr-2">
                            {!! Form::radio('9Gas', 0) !!}
                            No
                        </label>
                    </p>
                    <p>_____________________________________________________________</p>
                    @error('9Gas')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    
                    <p class="font-weight-bold">
                        Bombona --
                        <label class="mr-2">
                            {!! Form::radio('Bombona_9', 1) !!}
                            Si
                        </label>
                        <label class="mr-2">
                            {!! Form::radio('Bombona_9', 0) !!}
                            No
                        </label>
                    </p>

                    <label class="mr-2">
                        {!! Form::checkbox('10Kg_9', 1) !!}
                        10 Kg
                    </label>
                    
                    <label class="mr-2">
                        {!! Form::checkbox('18Kg_9', 1) !!}
                        18 Kg
                    </label>

                    <label class="mr-2">
                        {!! Form::checkbox('27Kg_9', 1) !!}
                        27 Kg
                    </label>

                    <label class="mr-2">
                        {!! Form::checkbox('43Kg_9', 1) !!}
                        43 Kg
                    </label>
                    <p>_____________________________________________________________</p>
                    
                    <p class="font-weight-bold">
                        Tuberia --
                        <label class="mr-2">
                            {!! Form::radio('Tuberia_9', 1) !!}
                            Si
                        </label>
                        <label class="mr-2">
                            {!! Form::radio('Tuberia_9', 0) !!}
                            No
                        </label>
                    </p>
                    
                    {!! Form::label('Regularidad_9', 'Regularidad') !!}
                    {!! Form::text('Regularidad_9', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la regularidad del Gas']) !!}
                
                    @error('Regularidad_9')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

            {{-- Pregunta 9 Fin --}}

                <hr>

            {{-- Pregunta 10 Inicio --}}

                <div class="form-group">
                    <p class="font-weight-bold">
                       4) Sistema Electrico -- 

                       <label class="mr-2">
                        {!! Form::radio('10Sistema_Electrico', 1) !!}
                        Si
                    </label>
                    
                    <label class="mr-2">
                        {!! Form::radio('10Sistema_Electrico', 0) !!}
                        No
                    </label>
                    </p>

                    @error('10Sistema_Electrico')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">

                    <label class="mr-2">
                        {!! Form::checkbox('Elecpublico_10', 1) !!}
                        Electrificado Publico
                    </label>
                    
                    <label class="mr-2">
                        {!! Form::checkbox('Plantapropia_10', 1) !!}
                        Platan Electrica Propia
                    </label>

                    <p class="font-weight-bold">
                        ¿Posee Medidor? -- 
 
                        <label class="mr-2">
                         {!! Form::radio('Medidor_10', 1) !!}
                         Si
                     </label>
                     
                     <label class="mr-2">
                         {!! Form::radio('Medidor_10', 0) !!}
                         No
                     </label>
                     </p>
                    
                    
                    {!! Form::label('Regularidad_10', 'Regularidad') !!}
                    {!! Form::text('Regularidad_10', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la regularidad de la Electricidad']) !!}
                
                    @error('Regularidad_10')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

            {{-- Pregunta 10 Fin --}}

                <hr>

            {{-- Pregunta 11 Inicio --}}

                <div class="form-group">
                    <p class="font-weight-bold">
                       5) Telefonia -- 

                    <label class="mr-2">
                        {!! Form::radio('11Telefonia', 1) !!}
                        Si
                    </label>
                    
                    <label class="mr-2">
                        {!! Form::radio('11Telefonia', 0) !!}
                        No
                    </label>
                    </p>

                    @error('11Telefonia')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">

                    <label class="mr-2">
                        {!! Form::checkbox('Domiciliaria_11', 1) !!}
                        Domiciliaria
                    </label>
                    
                    <label class="mr-2">
                        {!! Form::checkbox('Celular_11', 1) !!}
                        Celular
                    </label>

                    <label class="mr-2">
                        {!! Form::checkbox('Prepago_11', 1) !!}
                        Prepago
                    </label>
                    
                    <label class="mr-2">
                        {!! Form::checkbox('CentroConexion_11', 1) !!}
                        Centro de Conexión
                    </label>

                    <br>
                    {!! Form::label('Otro_11', 'Otros') !!}
                    {!! Form::text('Otro_11', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el tipo de Telefonía']) !!}
                
                    @error('Otro_11')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                
                </div>

            {{-- Pregunta 11 Fin --}}

                <hr>

            {{-- Pregunta 12 Inicio --}}

                <div class="form-group">
                    <p class="font-weight-bold">
                        6) Transporte -- 

                        <label class="mr-2">
                            {!! Form::radio('12Transporte', 1) !!}
                            Si
                        </label>
                        
                        <label class="mr-2">
                            {!! Form::radio('12Transporte', 0) !!}
                            No
                        </label>
                    </p>

                    @error('12Transporte')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">

                    <label class="mr-2">
                        {!! Form::checkbox('Propio_12', 1) !!}
                        Propio
                    </label>
                    
                    <label class="mr-2">
                        {!! Form::checkbox('Publico_12', 1) !!}
                        Publico
                    </label>

                    <label class="mr-2">
                        {!! Form::checkbox('Busetas_12', 1) !!}
                        Busetas
                    </label>
                    
                    <label class="mr-2">
                        {!! Form::checkbox('Taxiprivado_12', 1) !!}
                        Privados (Taxi)
                    </label>

                    <br>
                    {!! Form::label('Otro_12', 'Otros') !!}
                    {!! Form::text('Otro_12', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el tipo de Transporte']) !!}
                
                    @error('Otro_12')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                
                </div>

            {{-- Pregunta 12 Fin --}}
            
                <hr>

            {{-- Pregunta 13 Inicio --}}

                <div class="form-group">
                    <p class="font-weight-bold">
                        7) Mecanismo de Información -- 

                        <label class="mr-2">
                            {!! Form::radio('13Mecanismo_Informacion', 1) !!}
                            Si
                        </label>
                        
                        <label class="mr-2">
                            {!! Form::radio('13Mecanismo_Informacion', 0) !!}
                            No
                        </label>
                    </p>

                    @error('13Mecanismo_Informacion')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    
                    <label class="mr-2">
                        {!! Form::checkbox('Television_13', 1) !!}
                        Televisión
                    </label>

                    <label class="mr-2">
                        {!! Form::checkbox('Radio_13', 1) !!}
                        Radio
                    </label>
                    
                    <label class="mr-2">
                        {!! Form::checkbox('Prensa_13', 1) !!}
                        Prensa
                    </label>

                    <label class="mr-2">
                        {!! Form::checkbox('Internet_13', 1) !!}
                        Internet
                    </label>

                    <label class="mr-2">
                        {!! Form::checkbox('Mediosalternativos_13', 1) !!}
                        Medios Alternativos Comunitarios
                    </label>

                    <br>
                    {!! Form::label('Otro_13', 'Otros') !!}
                    {!! Form::text('Otro_13', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Medio de Comunicaión que posee']) !!}
                
                    @error('Otro_13')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                
                </div>

            {{-- Pregunta 13 Fin --}}

                <hr>

            {{-- Pregunta 14 Inicio --}}

                <div class="form-group">
                    <p class="font-weight-bold">
                        8) Servicios Comunales -- 

                        <label class="mr-2">
                            {!! Form::radio('14Servicios_Comunales', 1) !!}
                            Si
                        </label>
                        
                        <label class="mr-2">
                            {!! Form::radio('14Servicios_Comunales', 0) !!}
                            No
                        </label>
                    </p>

                    @error('14Servicios_Comunales')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">

                    <label class="mr-2">
                        {!! Form::checkbox('Mercados_14', 1) !!}
                        Mercados
                    </label>
                    
                    <label class="mr-2">
                        {!! Form::checkbox('Abastos_14', 1) !!}
                        Abastos
                    </label>

                    <label class="mr-2">
                        {!! Form::checkbox('Bodegas_14', 1) !!}
                        Bodegas
                    </label>
                    
                    <label class="mr-2">
                        {!! Form::checkbox('Farmacias_14', 1) !!}
                        Farmacias
                    </label>

                    <label class="mr-2">
                        {!! Form::checkbox('PlazasParques_14', 1) !!}
                        Plazas y Parques
                    </label>
                    
                    <label class="mr-2">
                        {!! Form::checkbox('Escuelas_14', 1) !!}
                        Escuelas
                    </label>

                    <label class="mr-2">
                        {!! Form::checkbox('Liceos_14', 1) !!}
                        Liceos
                    </label>
                    
                    <label class="mr-2">
                        {!! Form::checkbox('CentroSalud_14', 1) !!}
                        Centro de Salud
                    </label>

                    <label class="mr-2">
                        {!! Form::checkbox('Canchas_14', 1) !!}
                        Canchas
                    </label>

                    <label class="mr-2">
                        {!! Form::checkbox('Casacomunal_14', 1) !!}
                        Casa Comunal
                    </label>
                    
                    <label class="mr-2">
                        {!! Form::checkbox('Iglesias_14', 1) !!}
                        Iglesias
                    </label>

                    <br>
                    {!! Form::label('Otro_14', 'Otros') !!}
                    {!! Form::text('Otro_14', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el tipo de Servicios Comunales']) !!}
                
                    @error('Otro_14')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                
                </div>

            {{-- Pregunta 14 Fin --}}

                <hr>

            {{-- Pregunta 15 Inicio --}}

                <div class="form-group">
                    <p class="font-weight-bold">
                        9) ¿Existen Organizaciones Comunitarias? -- 

                        <label class="mr-2">
                            {!! Form::radio('15Organizaciones_Comunitarias', 1) !!}
                            Si
                        </label>
                        
                        <label class="mr-2">
                            {!! Form::radio('15Organizaciones_Comunitarias', 0) !!}
                            No
                        </label>
                    </p>

                    @error('15Organizaciones_Comunitarias')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">

                    {!! Form::label('Respuesta_15', 'Indique') !!}
                    {!! Form::text('Respuesta_15', null, ['class' => 'form-control', 'placeholder' => 'Ingrese las Organizaciones Comunitarias']) !!}
                
                    @error('Respuesta_15')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                
                </div>

            {{-- Pregunta 15 Fin --}}

                <hr>

            {{-- Pregunta 16 Inicio --}}

                <div class="form-group">
                    <p class="font-weight-bold">
                        10) ¿Algún miembro de la Familia Padece alguna Discapacidad? -- 

                        <label class="mr-2">
                            {!! Form::radio('16Discapacidad_Familia', 1) !!}
                            Si
                        </label>
                        
                        <label class="mr-2">
                            {!! Form::radio('16Discapacidad_Familia', 0) !!}
                            No
                        </label>
                    </p>

                    @error('16Discapacidad_Familia')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">

                    {!! Form::label('Respuesta_16', 'Indique') !!}
                    {!! Form::text('Respuesta_16', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la Discapacidad']) !!}
                
                    @error('Respuesta_16')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                
                </div>

            {{-- Pregunta 16 Fin --}}

                <hr>

            {{-- Pregunta 17 Inicio --}}

                <div class="form-group">
                    <p class="font-weight-bold">
                        11) ¿Algún miembro de la Familia padece alguna Enfermedad Crónica? -- 

                        <label class="mr-2">
                            {!! Form::radio('17Enfermedad_cronica', 1) !!}
                            Si
                        </label>
                        
                        <label class="mr-2">
                            {!! Form::radio('17Enfermedad_cronica', 0) !!}
                            No
                        </label>
                    </p>

                    @error('17Enfermedad_cronica')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">

                    {!! Form::label('Respuesta_17', 'Indique') !!}
                    {!! Form::text('Respuesta_17', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la Enfermedad']) !!}
                
                    @error('Respuesta_17')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                
                </div>

            {{-- Pregunta 17 Fin --}}

                <hr>

            {{-- Pregunta 18 Inicio --}}

                <div class="form-group">
                    <p class="font-weight-bold">
                        12) ¿Algún miembro de la Familia toma Medicamentos Permanentemente? -- 

                        <label class="mr-2">
                            {!! Form::radio('18Medicamientos_permanentes', 1) !!}
                            Si
                        </label>
                        
                        <label class="mr-2">
                            {!! Form::radio('18Medicamientos_permanentes', 0) !!}
                            No
                        </label>
                    </p>

                    @error('18Medicamientos_permanentes')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">

                    {!! Form::label('Respuesta_18', 'Indique') !!}
                    {!! Form::text('Respuesta_18', null, ['class' => 'form-control', 'placeholder' => 'Ingrese los Medicamentos']) !!}
                
                    @error('Respuesta_18')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                
                </div>

            {{-- Pregunta 18 Fin --}}

                <hr>

            {{-- Pregunta 19 Inicio --}}

                <div class="form-group">
                    <p class="font-weight-bold">
                        13) ¿Algún miembro de la Familia requiere Ayuda Técnica? -- 

                        <label class="mr-2">
                            {!! Form::radio('19Ayuda_tecnica', 1) !!}
                            Si
                        </label>
                        
                        <label class="mr-2">
                            {!! Form::radio('19Ayuda_tecnica', 0) !!}
                            No
                        </label>
                    </p>

                    @error('19Ayuda_tecnica')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">

                    {!! Form::label('Respuesta_19', 'Indique') !!}
                    {!! Form::text('Respuesta_19', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la Ayuda']) !!}
                
                    @error('Respuesta_19')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                
                </div>

            {{-- Pregunta 19 Fin --}}

                <hr>

            {{-- Pregunta 20 Inicio --}}

                <div class="form-group">
                    <p class="font-weight-bold">
                        14) ¿Algún miembro de la Familia requiere alguna Intervención Quirúrgica? -- 

                        <label class="mr-2">
                            {!! Form::radio('20Intervencion_quirurgica', 1) !!}
                            Si
                        </label>
                        
                        <label class="mr-2">
                            {!! Form::radio('20Intervencion_quirurgica', 0) !!}
                            No
                        </label>
                    </p>

                    @error('20Intervencion_quirurgica')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">

                    {!! Form::label('Respuesta_20', 'Indique') !!}
                    {!! Form::text('Respuesta_20', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la Intervención']) !!}
                
                    @error('Respuesta_20')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                
                </div>

            {{-- Pregunta 20 Fin --}}
            
                <hr>

            {{-- Pregunta 21 Inicio --}}

                <div class="form-group">
                    <p class="font-weight-bold">
                        15) ¿Tiene Animales Domestico en la Vivienda? -- 

                        <label class="mr-2">
                            {!! Form::radio('21Animal_domestico', 1) !!}
                            Si
                        </label>
                        
                        <label class="mr-2">
                            {!! Form::radio('21Animal_domestico', 0) !!}
                            No
                        </label>
                    </p>

                    @error('21Animal_domestico')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">

                    {!! Form::label('Cantidad_21', 'Cantidad') !!}
                    {!! Form::text('Cantidad_21', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la cantidad de Animales']) !!}
                
                    @error('Cantidad_21')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                
                </div>
                <div class="form-group">

                    {!! Form::label('Especificacion_21', 'Indique') !!}
                    {!! Form::text('Especificacion_21', null, ['class' => 'form-control', 'placeholder' => 'Ingrese los Animales']) !!}
                
                    @error('Especificacion_21')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                
                </div>

            {{-- Pregunta 21 Fin --}}

                <hr>

            {{-- Pregunta 22 Inicio --}}

                <div class="form-group">
                    <p class="font-weight-bold">
                        16) ¿Precensia de Insectos o Roedores en la Vivienda? -- 

                        <label class="mr-2">
                            {!! Form::radio('22Insectos_roedores', 1) !!}
                            Si
                        </label>
                        
                        <label class="mr-2">
                            {!! Form::radio('22Insectos_roedores', 0) !!}
                            No
                        </label>
                    </p>

                    @error('22Insectos_roedores')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">

                    {!! Form::label('Respuesta_22', 'Indique') !!}
                    {!! Form::text('Respuesta_22', null, ['class' => 'form-control', 'placeholder' => 'Ingrese los Insectos o Roedores']) !!}
                
                    @error('Respuesta_22')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                
                </div>

            {{-- Pregunta 22 Fin --}}

                <hr>

            {{-- Pregunta 23 Inicio --}}

                <div class="form-group">
                    <p class="font-weight-bold">
                        17) ¿Existe algun sistema de Protección en la Vivienda? -- 

                        <label class="mr-2">
                            {!! Form::radio('23Sistema_proteccion', 1) !!}
                            Si
                        </label>
                        
                        <label class="mr-2">
                            {!! Form::radio('23Sistema_proteccion', 0) !!}
                            No
                        </label>
                    </p>

                    @error('23Sistema_proteccion')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">

                    {!! Form::label('Respuesta_23', 'Indique') !!}
                    {!! Form::text('Respuesta_23', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el sistema']) !!}
                
                    @error('Respuesta_23')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                
                </div>

            {{-- Pregunta 23 Fin --}}

                <hr>

            {{-- Pregunta 24 Inicio --}}

                <div class="form-group">
                    <p class="font-weight-bold">
                        18) ¿Se ha recibido Amparo Gubernamental para el Sistema de Protección? -- 

                        <label class="mr-2">
                            {!! Form::radio('24Amparosistema_proteccion', 1) !!}
                            Si
                        </label>
                        
                        <label class="mr-2">
                            {!! Form::radio('24Amparosistema_proteccion', 0) !!}
                            No
                        </label>
                    </p>

                    @error('24Amparosistema_proteccion')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">

                    {!! Form::label('Respuesta_24', 'Indique') !!}
                    {!! Form::text('Respuesta_24', null, ['class' => 'form-control', 'placeholder' => 'Expecifique']) !!}
                
                    @error('Respuesta_24')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                
                </div>

            {{-- Pregunta 24 Fin --}}

                <hr>

            {{-- Pregunta 25 Inicio --}}

                <div class="form-group">
                    <p class="font-weight-bold">
                        19) Nº de la Vivienda -- 

                        <label class="mr-2">
                            {!! Form::radio('25Nro_Vivienda', 1) !!}
                            Si
                        </label>
                        
                        <label class="mr-2">
                            {!! Form::radio('25Nro_Vivienda', 0) !!}
                            No
                        </label>
                    </p>

                    @error('25Nro_Vivienda')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">

                    {!! Form::label('Nrohabitantes_25', 'Nº de Habitantes') !!}
                    {!! Form::text('Nrohabitantes_25', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Numero de Habitantes en la Vivienda']) !!}
                
                    @error('Nrohabitantes_25')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                
                </div>
                <div class="form-group">

                    {!! Form::label('Nrofamilias_25', 'Nº de Familias') !!}
                    {!! Form::text('Nrofamilias_25', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Numero de Familias en la Vivienda']) !!}
                
                    @error('Nrofamilias_25')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                
                </div>

            {{-- Pregunta 25 Fin --}}

                <hr>

            {{-- Pregunta 26 Inicio --}}

                <div class="form-group">
                    <p class="font-weight-bold">
                        20) ¿Se realiza algun tipo de Actividad Comercial en la Vivienda? -- 

                        <label class="mr-2">
                            {!! Form::radio('26Actividad_comercial', 1) !!}
                            Si
                        </label>
                        
                        <label class="mr-2">
                            {!! Form::radio('26Actividad_comercial', 0) !!}
                            No
                        </label>
                    </p>

                    @error('26Actividad_comercial')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">

                    {!! Form::label('Respuesta_26', 'Indique') !!}
                    {!! Form::text('Respuesta_26', null, ['class' => 'form-control', 'placeholder' => 'Expecifique la Actividad Comercial']) !!}
                
                    @error('Respuesta_26')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                
                </div>

            {{-- Pregunta 26 Fin --}}

                <hr>

            {{-- Pregunta 27 Inicio --}}

                <div class="form-group">
                    <p class="font-weight-bold">
                        21) Factores de Riesgo en la Familia -- 

                        <label class="mr-2">
                            {!! Form::radio('27Factores_Riesgos', 1) !!}
                            Si
                        </label>
                        
                        <label class="mr-2">
                            {!! Form::radio('27Factores_Riesgos', 0) !!}
                            No
                        </label>
                    </p>

                    @error('27Factores_Riesgos')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">

                    <label class="mr-2">
                        {!! Form::checkbox('Tabaquismo_27', 1) !!}
                        Tabaquismo
                    </label>
                    
                    <label class="mr-2">
                        {!! Form::checkbox('Drogas_27', 1) !!}
                        Drogas
                    </label>

                    <label class="mr-2">
                        {!! Form::checkbox('Alcoholismo_27', 1) !!}
                        Alcoholismo
                    </label>
                    
                    <label class="mr-2">
                        {!! Form::checkbox('Emabarazotemprano_27', 1) !!}
                        Embarazo Temprano
                    </label>

                    {!! Form::label('Otro_27', 'Otros') !!}
                    {!! Form::text('Otro_27', null, ['class' => 'form-control', 'placeholder' => 'Ingrese los factores de Riesgo']) !!}
                
                    @error('Otro_27')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                
                </div>

            {{-- Pregunta 27 Fin --}}

                <hr>

            {{-- Pregunta 28 Inicio --}}

                <div class="form-group">
                    <p class="font-weight-bold">
                        22) Gestantes en el Grupo Familiar -- 

                        <label class="mr-2">
                            {!! Form::radio('28Gestatnte_Gfamilia', 1) !!}
                            Si
                        </label>
                        
                        <label class="mr-2">
                            {!! Form::radio('28Gestatnte_Gfamilia', 0) !!}
                            No
                        </label>
                    </p>

                    @error('28Gestatnte_Gfamilia')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">

                    <p class="font-weight-bold">
                        Embarazo Controlado -- 

                        <label class="mr-2">
                            {!! Form::radio('Embarazocontrolado_28', 1) !!}
                            Si
                        </label>
                        
                        <label class="mr-2">
                            {!! Form::radio('Embarazocontrolado_28', 0) !!}
                            No
                        </label>
                    </p>
                    @error('Embarazocontrolado_28')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                    {!! Form::label('NroSemanas_28', 'Nº de Semanas de Gestación') !!}
                    {!! Form::text('NroSemanas_28', null, ['class' => 'form-control', 'placeholder' => 'Ingrese las Semanas de Gestación']) !!}
                
                    @error('NroSemanas_28')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                
                </div>

            {{-- Pregunta 28 Fin --}}

                <hr>

            {{-- Pregunta 29 Inicio --}}

                <div class="form-group">
                    <p class="font-weight-bold">
                        23) ¿El Grupo Familiar tiene algun Proyecto Socio-Productivo? -- 

                        <label class="mr-2">
                            {!! Form::radio('29Proyecto_Socio-Productivo', 1) !!}
                            Si
                        </label>
                        
                        <label class="mr-2">
                            {!! Form::radio('29Proyecto_Socio-Productivo', 0) !!}
                            No
                        </label>
                    </p>

                    @error('29Proyecto_Socio-Productivo')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">

                    {!! Form::label('Respuesta_29', 'Indique') !!}
                    {!! Form::text('Respuesta_29', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Proyecto']) !!}
                
                    @error('Respuesta_29')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                
                </div>

            {{-- Pregunta 29 Fin --}}

                <hr>

            {{-- Pregunta 30 Inicio --}}

                <div class="form-group">

                    {!! Form::label('30Necesidad_Desarrollo', '24) ¿Que necesita para Desarrollarlo?') !!}
                    {!! Form::text('30Necesidad_Desarrollo', null, ['class' => 'form-control', 'placeholder' => 'Expecifique']) !!}
                
                    @error('30Necesidad_Desarrollo')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                
                </div>

            {{-- Pregunta 30 Fin --}}

                <hr>

            {{-- Pregunta 31 Inicio --}}
            
                <div class="form-group">

                    {!! Form::label('31Participacion_Proyecto', '25) ¿De no tener un Proyecto Especifico en que le gustaria al Grupo Familiar Participar?') !!}
                    {!! Form::text('31Participacion_Proyecto', null, ['class' => 'form-control', 'placeholder' => 'Expecifique']) !!}
                
                    @error('31Participacion_Proyecto')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                
                </div>

            {{-- Pregunta 31 Fin --}}

                <hr>

            {{-- Pregunta 32 Inicio --}}
            
                <div class="form-group">
                    <p class="font-weight-bold">
                        26) ¿Como Jefe de Familia siente que su familia esta siendo atendida por la BMS en esta Guerra Económica? -- 

                        <label class="mr-2">
                            {!! Form::radio('32Pregunta', 1) !!}
                            Si
                        </label>
                        
                        <label class="mr-2">
                            {!! Form::radio('32Pregunta', 0) !!}
                            No
                        </label>
                    </p>

                    @error('32Pregunta')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">

                    {!! Form::label('Respuesta_32', 'Explique') !!}
                    {!! Form::text('Respuesta_32', null, ['class' => 'form-control', 'placeholder' => 'Ingrese su Respuesta']) !!}
                
                    @error('Respuesta_32')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                
                </div>

            {{-- Pregunta 32 Fin --}}

                <hr>

            {{-- Pregunta 33 Inicio --}}
            
                <div class="form-group">

                    {!! Form::label('33AporteBMS_Fortalecimiento', '27) ¿De que manera apoyaría a su familia para Fortalecimiento de la BMS?') !!}
                    {!! Form::text('33AporteBMS_Fortalecimiento', null, ['class' => 'form-control', 'placeholder' => 'Explique']) !!}
                
                    @error('33AporteBMS_Fortalecimiento')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                
                </div>

            {{-- Pregunta 33 Fin --}}

                <hr>

            {{-- Pregunta 34 Inicio --}}
            
                <div class="form-group">

                    {!! Form::label('34Observaciones_Generales', '28) Observaciones') !!}
                    {!! Form::text('34Observaciones_Generales', null, ['class' => 'form-control', 'placeholder' => 'Ingrese las Observaciones']) !!}
                
                    @error('34Observaciones_Generales')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                
                </div>

            {{-- Pregunta 34 Fin --}}

                <hr>
                

                {{-- <div class="form-group">
                    {!! Form::label('vivienda_id', 'Vivienda') !!}
                    {!! Form::text('vivienda_id', $vivienda, ['class' => 'form-control', 'readonly']) !!}
                
                    @error('vivienda_id')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                
                </div>

                <div class="form-group">
                    {!! Form::label('nucleof_id', 'Nucleo') !!}
                    {!! Form::text('nucleof_id', $nucleo, ['class' => 'form-control', 'readonly']) !!}
                
                    @error('nucleof_id')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                
                </div> --}}

                {!! Form::hidden('user_id', auth()->user()->id) !!}
                
                {!! Form::submit('Siguiente', ['class' => 'btn btn-success']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop