<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyecto;
class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos=Proyecto::all();
        return $proyectos;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $codigo= rand(1,9999999999999);
        $this->validate($request,[
            'titulo'=>'required',
            'objGeneral'=>'required',
            'comunidad'=>'required',
            'tipo'=>'required',
            'carrera'=>'required',
            'inicio'=>'required',
            'fin'=>'required',
        ]);
        Proyecto::create([
            'codigo' => $codigo,
            'titulo' => $request->titulo,
            'objGeneral' => $request->objGeneral,
            'comunidad' => $request->comunidad,
            'tipo' => $request->tipo,
            'carrera' => $request->carrera,
            'inicio' => $request->inicio,
            'fin' => $request->fin,
        ]);
        return;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Proyecto = Proyecto::find($id);
        return $Proyecto;
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
        Proyecto::find($id)->update([
            'titulo' => request('titulo'),
            'objGeneral' => request('objGeneral'),
            'comunidad' => request('comunidad'),
            'inicio' => request('inicio'),
            'fin' => request('fin'),
            ]);
        return;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Proyecto::find($id)->delete();
    }
}
