<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNucleoRequest;
use App\Models\Jefe;
use App\Models\Nucleo_f;
use App\Models\Vivienda;
use Illuminate\Http\Request;

class NucleoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nucleos = Nucleo_f::all();

        return view('admin.nucleos.index', compact('nucleos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jefe = Jefe::latest('id')->pluck('id')->first();
        $jefename = Jefe::latest('id')->pluck('names', 'id')->first();
        $vivienda = Vivienda::latest('id')->pluck('id')->first();
        $viviendaname = Vivienda::latest('id')->pluck('nro_identificacion', 'id')->first();

        return view('admin.nucleos.create', compact('jefe', 'jefename', 'vivienda', 'viviendaname'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNucleoRequest $request)
    {
        $nucleo = Nucleo_f::create($request->all());

        return redirect()->route('admin.personas.create', $nucleo)->with('info', 'El nucleo familiar se ha creado con exito');
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
