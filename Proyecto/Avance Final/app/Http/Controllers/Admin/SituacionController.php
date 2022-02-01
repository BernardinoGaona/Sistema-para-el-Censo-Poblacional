<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSituacionRequest;
use App\Models\CaractGrupo_f;
use App\Models\Comunidade;
use App\Models\Nucleo_f;
use App\Models\SituacionVivienda;
use App\Models\Vivienda;
use Illuminate\Http\Request;

class SituacionController extends Controller
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
        $vivienda = Vivienda::latest('id')->pluck('id')->first();
        $nucleo = Nucleo_f::latest('id')->pluck('id')->first();
        $comunidad = Comunidade::pluck('name', 'id');

        return view('admin.situaciones.create', compact('vivienda', 'nucleo', 'comunidad'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSituacionRequest $request)
    {
        $caract = SituacionVivienda::create($request->all());

        return redirect()->route('admin.servicios.create', $caract)->with('info', 'La Situación de la vivienda se ha registrado con exito');
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
