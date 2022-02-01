<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreJefeRequest;
use App\Models\EstadoCivile;
use App\Models\Jefe;
use App\Models\NivelInstruccione;
use App\Models\Persona;
use App\Models\Respuesta;
use App\Models\Sexo;
use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class JefeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        return view('admin.jefes.create', compact('sexos', 'estados', 'nivel', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJefeRequest $request)
    {
        $jefe = Jefe::create($request->all());
        $persona = Persona::create($request->all());

        return redirect()->route('admin.caracteristicas.create', $persona)->with('info', 'El jefe se ha creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
