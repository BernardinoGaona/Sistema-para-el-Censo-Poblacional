<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCaracteristicasRequest;
use App\Models\CaractGrupo_f;
use App\Models\Nucleo_f;
use App\Models\Persona;
use App\Models\TallaCamisa;
use App\Models\TallaPantalone;
use Illuminate\Http\Request;

class CaracteristicasController extends Controller
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
        $name = Persona::latest('id')->pluck('names', 'id')->first();
        $surname = Persona::latest('id')->pluck('surnames', 'id')->first();

        $camisa = TallaCamisa::pluck('name', 'id');
        $pantalon = TallaPantalone::pluck('name', 'id');

        $persona = Persona::latest('id')->pluck('id')->first();
        $nucleo = Nucleo_f::latest('id')->pluck('id')->first();

        return view('admin.caracteristicas.create', compact('name', 'surname', 'camisa', 'pantalon', 'persona','nucleo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCaracteristicasRequest $request)
    {
        CaractGrupo_f::create($request->all());

        return redirect()->route('admin.nucleos.index')->with('info', 'Se ha completado el registro de la persona con exito');
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
