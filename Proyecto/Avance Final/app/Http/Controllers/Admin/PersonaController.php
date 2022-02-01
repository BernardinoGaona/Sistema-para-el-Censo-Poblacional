<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePersonaRequest;
use App\Http\Requests\UpdatePersonaRequest;
use App\Models\EstadoCivile;
use App\Models\NivelInstruccione;
use App\Models\Nucleo_f;
use App\Models\NucleoPersona;
use App\Models\Persona;
use App\Models\Respuesta;
use App\Models\Sexo;
use App\Models\User;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas = Persona::all();

        return view('admin.personas.index', compact('personas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sexos = Sexo::pluck('name', 'id');
        $estados = EstadoCivile::pluck('name', 'id');
        $nivel = NivelInstruccione::pluck('name', 'id');
        $user = User::pluck('id');
        return view('admin.personas.create', compact('sexos', 'estados', 'nivel', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePersonaRequest $request)
    {
        $persona = Persona::create($request->all());

        $nucleo = Nucleo_f::latest('id')->first('id');
        $id = Persona::latest('id')->first('id');

        NucleoPersona::create([
            'nucleo_id' => $nucleo['id'],
            'persona_id' => $id['id']
        ]);

        /* if($request->id){
            $id->nucleo()->attach($nucleo->id);
        } */

        /* $data = Modelo::latest('id')->first(); */

        return redirect()->route('admin.caracteristicas.create', $persona)->with('info', 'La Persona se ha creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Persona)
    {
        $persona = Persona::all($Persona);
        return view('admin.personas.show', compact('persona'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Persona)
    {
        $sexos = Sexo::pluck('name', 'id');
        $estados = EstadoCivile::pluck('name', 'id');
        $nivel = NivelInstruccione::pluck('name', 'id');
        $respuest = Respuesta::pluck('name', 'id');
        $user = User::pluck('id');
        
        $persona = Persona::where('id', $Persona)->first();
        return view('admin.personas.edit', compact('persona','sexos', 'estados', 'nivel', 'respuest', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePersonaRequest $request,Persona $Persona)
    {
        $Persona->update($request->all());

        return redirect()->route('admin.personas.index', $Persona)->with('info', 'La persona se Actualizo con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Persona)
    {
        //
    }
}
