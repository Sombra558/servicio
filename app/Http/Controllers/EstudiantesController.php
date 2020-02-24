<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumnos;
use App\Proyecto;
class EstudiantesController extends Controller
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
        
        $this->validate($request,[
            'cedula'=>'required',
            'nombre'=>'required',
            'apellido'=>'required',
            'proyecto_id'=>'required',
            
        ]);

        if (Alumnos::find($request->cedula)){
            $alumnos=Alumnos::find($request->cedula);
            $proyecto=Proyecto::find($request->proyecto_id);
            
            if($proyecto->tipo=="Servicio Comunitario"){
                $alumnos->update([
                    'servicio_id' => request('proyecto_id'),
                ]);
            }if($proyecto->tipo=="Proyecto Servicio Comunitario"){
                $alumnos->update([
                    'proyecto_id' => request('proyecto_id'),
                ]);
            }
        }
        else{
            $proyecto=Proyecto::find($request->proyecto_id);
            if($proyecto->tipo=="Servicio Comunitario"){
                Alumnos::create([
                    'cedula' => $request->cedula,
                    'nombre' => $request->nombre,
                    'apellido' => $request->apellido,
                    'servicio_id' => $request->proyecto_id,
                ]);
            }else{
                Alumnos::create([
                    'cedula' => $request->cedula,
                    'nombre' => $request->nombre,
                    'apellido' => $request->apellido,
                    'proyecto_id' => $request->proyecto_id,
                ]);
            }
           
        }
      
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
