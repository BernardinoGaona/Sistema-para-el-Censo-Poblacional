@extends('adminlte::page')

@section('title', 'Romeral I')

@section('content_header')
    <h1>Situación de la Vivienda </h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.situaciones.store', 'autocomplete' => 'off']) !!}

            {{-- Pregunta 1 Inicio --}}

                <div class="form-group">
                    <p class="font-weight-bold">
                       1) Condiciones del Terreno --
                        <label class="mr-2">
                            {!! Form::radio('1Condicion_terreno', 1) !!}
                            Si
                        </label>
                        <label class="mr-2">
                            {!! Form::radio('1Condicion_terreno', 0) !!}
                            No
                        </label>
                    </p>
                    @error('1Condicion_terreno')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">

                    <label class="mr-2">                      
                        {!! Form::checkbox('Estable_1', 1) !!}
                        Estable
                    </label>
                    
                    <label class="mr-2">
                        {!! Form::checkbox('Inestable_1', 1) !!}
                        Inestable
                    </label>

                    <label class="mr-2">                      
                        {!! Form::checkbox('Altoriesgo_1', 1) !!}
                        Alto Riesgo
                    </label>
                    
                    <label class="mr-2">
                        {!! Form::checkbox('Vulnerable_1', 1) !!}
                        Vulnerable
                    </label>
                    <br>
                    {!! Form::label('Otro_1', 'Otro') !!}
                    {!! Form::text('Otro_1', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la condición del Terreno']) !!}
                </div>

                @error('Otro_1')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            {{-- Pregunta 1 Fin --}}

                <hr>

            {{-- Pregunta 2 Inicio --}}

                <div class="form-group">
                    <p class="font-weight-bold">
                       2) Forma de Tenecia -- 
                        <label class="mr-2">
                            {!! Form::radio('2Forma_Tenencia', 1) !!}
                            Si
                        </label>
                        
                        <label class="mr-2">
                            {!! Form::radio('2Forma_Tenencia', 0) !!}
                            No
                        </label>
                    </p>
                    @error('2Forma_Tenencia')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">

                    <label class="mr-2">
                        {!! Form::checkbox('Alquilada_2', 1) !!}
                        Alquilada
                    </label>
                    
                    <label class="mr-2">
                        {!! Form::checkbox('Invadida_2', 1) !!}
                        Invadida
                    </label>

                    <label class="mr-2">
                        {!! Form::checkbox('Traspasada_2', 1) !!}
                        Traspasada
                    </label>
                    
                    <label class="mr-2">
                        {!! Form::checkbox('Prestada_2', 1) !!}
                        Prestada
                    </label>

                    <br>
                    {!! Form::label('Otro_2', 'Otro') !!}
                    {!! Form::text('Otro_2', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la forma de Tenencia']) !!}
                </div>

                @error('Otro_2')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            {{-- Pregunta 2 Fin --}}

                <hr>

            {{-- Pregunta 3 Inicio --}}

                <div class="form-group">
                    <p class="font-weight-bold">
                       3) Tipo de Vivienda -- 

                        <label class="mr-2">
                            {!! Form::radio('3Tipo_Vivienda', 1) !!}
                            Si
                        </label>
                        
                        <label class="mr-2">
                            {!! Form::radio('3Tipo_Vivienda', 0) !!}
                            No
                        </label>
                    </p>

                    @error('3Tipo_Vivienda')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">

                    <label class="mr-2">
                        {!! Form::checkbox('Quinta_3', 1) !!}
                        Quinta
                    </label>
                    
                    <label class="mr-2">
                        {!! Form::checkbox('Casa_3', 1) !!}
                        Casa
                    </label>

                    <label class="mr-2">
                        {!! Form::checkbox('Apartamento_3', 1) !!}
                        Apartamento
                    </label>
                    
                    <label class="mr-2">
                        {!! Form::checkbox('Rancho_3', 1) !!}
                        Rancho
                    </label>

                    <label class="mr-2">
                        {!! Form::checkbox('Barraca_3', 1) !!}
                        Barraca
                    </label>

                    <label class="mr-2">
                        {!! Form::checkbox('Habitacionanexo_3', 1) !!}
                        Habitación o Anexo
                    </label>
                </div>

            {{-- Pregunta 3 Fin --}}

                <hr>

            {{-- Pregunta 4 Inicio --}}

                <div class="form-group">
                    <p class="font-weight-bold">
                       4) Habitaciones de la Vivienda -- 

                       <label class="mr-2">
                        {!! Form::radio('4Habitaciones_Vivienda', 1) !!}
                        Si
                    </label>
                    
                    <label class="mr-2">
                        {!! Form::radio('4Habitaciones_Vivienda', 0) !!}
                        No
                    </label>
                    </p>

                    @error('4Habitaciones_Vivienda')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">

                    <label class="mr-2">
                        {!! Form::checkbox('Sala_4', 1) !!}
                        Sala
                    </label>
                    
                    <label class="mr-2">
                        {!! Form::checkbox('Comedor_4', 1) !!}
                        Comedor
                    </label>

                    <label class="mr-2">
                        {!! Form::checkbox('Cocina_4', 1) !!}
                        Cocina
                    </label>
                    
                    <label class="mr-2">
                        {!! Form::checkbox('Baño_4', 1) !!}
                        Baño
                    </label>
                    <br><br>
                    {!! Form::label('Cantidadhabitaciones_4', '¿Cuantas Habitaciones Posee? Indique') !!}
                    {!! Form::text('Cantidadhabitaciones_4', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la cantidad de Habitaciones']) !!}
                
                    @error('Cantidadhabitaciones_4')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

            {{-- Pregunta 4 Fin --}}

                <hr>

            {{-- Pregunta 5 Inicio --}}

                <div class="form-group">
                    <p class="font-weight-bold">
                       5) Tipo de Paredes -- 

                    <label class="mr-2">
                        {!! Form::radio('5Tipo_Paredes', 1) !!}
                        Si
                    </label>
                    
                    <label class="mr-2">
                        {!! Form::radio('5Tipo_Paredes', 0) !!}
                        No
                    </label>
                    </p>

                    @error('5Tipo_Paredes')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">

                    <label class="mr-2">
                        {!! Form::checkbox('Frisada_5', 1) !!}
                        Frisada
                    </label>
                    
                    <label class="mr-2">
                        {!! Form::checkbox('SinFrisar_5', 1) !!}
                        Sin Frisar
                    </label>

                    <label class="mr-2">
                        {!! Form::checkbox('Tablas_5', 1) !!}
                        Tablas
                    </label>
                    
                    <label class="mr-2">
                        {!! Form::checkbox('BaharequeAdobe_5', 1) !!}
                        Bahareque o Adobe
                    </label>

                    <label class="mr-2">
                        {!! Form::checkbox('Zinc_5', 1) !!}
                        Zinc
                    </label>
                    
                    <label class="mr-2">
                        {!! Form::checkbox('Cartonpiedra_5', 1) !!}
                        Carton Piedra
                    </label>
                    <br>
                    {!! Form::label('Otro_5', 'Otros') !!}
                    {!! Form::text('Otro_5', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el tipo de Pared']) !!}
                
                    @error('Otro_5')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                
                </div>

            {{-- Pregunta 5 Fin --}}

                <hr>

            {{-- Pregunta 6 Inicio --}}

                <div class="form-group">
                    <p class="font-weight-bold">
                        6) Tipo de Techo -- 

                        <label class="mr-2">
                            {!! Form::radio('6Tipo_Techo', 1) !!}
                            Si
                        </label>
                        
                        <label class="mr-2">
                            {!! Form::radio('6Tipo_Techo', 0) !!}
                            No
                        </label>
                    </p>

                    @error('6Tipo_Techo')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">

                    <label class="mr-2">
                        {!! Form::checkbox('Platabanda_6', 1) !!}
                        Platabanda
                    </label>
                    
                    <label class="mr-2">
                        {!! Form::checkbox('Asbesto_6', 1) !!}
                        Asbesto
                    </label>

                    <label class="mr-2">
                        {!! Form::checkbox('Teja_6', 1) !!}
                        Teja
                    </label>
                    
                    <label class="mr-2">
                        {!! Form::checkbox('Zinc_6', 1) !!}
                        Zinc
                    </label>

                    <label class="mr-2">
                        {!! Form::checkbox('Machihembrado_6', 1) !!}
                        Machihembrado
                    </label>
                    
                    <label class="mr-2">
                        {!! Form::checkbox('Techoraso_6', 1) !!}
                        Techo Raso
                    </label>
                    <br>
                    {!! Form::label('Otro_6', 'Otros') !!}
                    {!! Form::text('Otro_6', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el tipo de Techo']) !!}
                
                    @error('Otro_6')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                
                </div>

            {{-- Pregunta 6 Fin --}}
           
                <hr>

                <div class="form-group">
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
                
                </div>

                <div class="form-group">
                    {!! Form::label('comunidad_id', 'Comunidad') !!}
                    {!! Form::select('comunidad_id', $comunidad, null,['class' => 'form-control']) !!}
                
                    @error('comunidad_id')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                
                </div>

                {!! Form::hidden('user_id', auth()->user()->id) !!}

                {{-- <div class="form-group">
                    {!! Form::label('user_id', 'Id_Usuario') !!}
                    {!! Form::select('user_id', $user, null, ['class' => 'form-control']) !!}
                    
                    @error('user_id')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                
                </div> --}}
                
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