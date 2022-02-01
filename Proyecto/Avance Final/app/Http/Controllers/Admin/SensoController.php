<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comunidade;
use App\Models\Consejo;
use App\Models\Estado;
use App\Models\Municipio;
use App\Models\Nucleo_f;
use App\Models\Parroquia;
use App\Models\Sectore;
use App\Models\Senso;
use App\Models\User;
use Illuminate\Http\Request;

class SensoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $censos = Senso::all();

        return view('admin.censos.index', compact('censos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $consejos = Consejo::pluck('name', 'id');
        $estados = Estado::pluck('name', 'id');
        $municipios = Municipio::pluck('name', 'id');
        $parroquias = Parroquia::pluck('name', 'id');
        $sectores = Sectore::pluck('name', 'id');
        $comunidades = Comunidade::pluck('name', 'id');
        $nucleos = Nucleo_f::latest('id')->pluck('id')->first();
        $user = User::pluck('id');
        return view('admin.censos.create', compact('consejos', 'estados', 'municipios', 'parroquias', 'sectores', 'comunidades', 'nucleos', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return redirect()->route('admin.censos.index')->with('info', 'Censo realizado con exito');
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
