<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sexo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Vivienda;

class ViviendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $viviendas = Vivienda::all();

        return view('admin.viviendas.index', compact('viviendas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.viviendas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nro_identificacion' => 'required',
            'direccion' => 'required',
            'slug' => 'required|unique:viviendas',
            'user_id' => 'required'
        ]);

        $vivienda = Vivienda::create($request->all());
        return redirect()->route('admin.censos.eleccion', $vivienda)->with('info', 'La vivienda se ha creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Vivienda $Vivienda)
    {
        $vivienda = Vivienda::all($Vivienda);
        return view('admin.viviendas.show', compact('vivienda'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Vivienda)
    {
        $vivienda = Vivienda::where('id', $Vivienda)->first();
        return view('admin.viviendas.edit', compact('vivienda'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vivienda $Vivienda)
    {
        $request->validate([
            'nro_identificacion' => 'required',
            'direccion' => 'required',
            'slug' => "required|unique:viviendas,slug,$Vivienda->id",
            'user_id' => 'required'
        ]);

        $Vivienda->update($request->all());

        /* $Vivienda = DB::table('viviendas')
              ->where('id_vivienda', $request->id_vivienda)
              ->update([$Vivienda->nro_identificacion => $request->nro_identificacion,
                        $Vivienda->direccion => $request->direccion,
                        $Vivienda->slug => $request->slug]); */

        /* $Vivienda->nro_identificacion = $request->nro_identificacion;
        $Vivienda->direccion = $request->direccion;
        $Vivienda->slug = $request->slug; */

        return redirect()->route('admin.viviendas.index', $Vivienda)->with('info', 'La vivienda se Actualizo con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Vivienda $Vivienda)
    {
        //$Vivienda->update($request->where('id', $request->id));
        $Vivienda->status='0';
        return redirect()->route('admin.viviendas.index')->with('info', 'La vivienda se elimino con exito');
    }
}
